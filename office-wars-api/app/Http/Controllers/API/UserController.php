<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validationUser = Validator::make($request->all(), [
                'userFirstName' => 'required|min:1|string',
                'userLastName' => 'required|min:1|string',
                'city' => 'required|integer',
                'userPseudo' => 'required|min:1|string|unique:users',
                'mail' => 'required|min:1|string|unique:users',
                'password' => 'required|string|min:8',
                'phone' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de règles pour l'image
            ]);

            if ($validationUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validationUser->errors(),
                ], 401);
            }

            $user = new User([
                'userFirstName' => $request->userFirstName,
                'userLastName' => $request->userLastName,
                'city' => $request->city,
                'userPseudo' => $request->userPseudo,
                'mail' => $request->mail,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
            ]);

            // Vérifiez si un nouveau fichier image est téléchargé
            if ($request->hasFile('userImage')) {
                $filenameWithExt = $request->file('userImage')->getClientOriginalName();
                $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('userImage')->getClientOriginalExtension();
                $filename = $filenameWithExt . '_' . time() . '.' . $extension;
                $request->file('userImage')->storeAs('public/uploads', $filename);

                // Attribuez le nom du fichier à l'utilisateur
                $user->image = $filename;
            }

            // Ajoutez le pseudo à l'utilisateur
            $user->pseudo = $request->userPseudo;

            // Sauvegardez l'utilisateur en base de données
            $user->save();

            return response()->json([
                'data' => $user,
                'status' => true,
                'message' => 'Utilisateur créé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création de l\'utilisateur : ' . $e->getMessage(),
            ], 403);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($user)
    {
        try {
            $user = User::with(['receiverReviews.sender'])->findOrFail($user);

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Utilisateur non trouvé'
                ], 404);
            }


            // $latestReview = $user->receiverReviews->first(); // Assuming reviews are ordered by creation date

            return response()->json([
                'status' => true,
                'data' => [
                    'user' => $user,
                    // 'latestReview' => $latestReview
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur : ' . $e->getMessage()
            ], 500);
        }
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'userFirstName' => 'required|min:1|string',
                'userLastName' => 'required|min:1|string',
                'city' => 'required|integer',
                'userPseudo' => 'required|min:1|string|unique:users,userPseudo,' . $id,
                'mail' => 'required|min:1|string|unique:users,mail,' . $id,
                'password' => 'required|string|min:8',
                'phone' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de règles pour l'image
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 401);
            }

            $user = User::findOrFail($id);

            // Vérifiez si un nouveau fichier image est téléchargé
            if ($request->hasFile('image')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = $filenameWithExt . '_' . time() . '.' . $extension;
                $request->file('image')->storeAs('public/uploads', $filename);

                // Supprimez l'ancien fichier image s'il existe
                if ($user->image && Storage::exists('public/uploads/' . $user->image)) {
                    Storage::delete('public/uploads/' . $user->image);
                }

                // Attribuez le nom du fichier à l'utilisateur
                $user->image = $filename;
            }

            $user->update([
                'userFirstName' => $request->userFirstName,
                'userLastName' => $request->userLastName,
                'city' => $request->city,
                'userPseudo' => $request->userPseudo,
                'mail' => $request->mail,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
            ]);

            return response()->json([
                'data' => $user,
                'status' => true,
                'message' => 'Utilisateur modifié avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la modification de l\'utilisateur : ' . $e->getMessage(),
            ], 403);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user)
    {
        try {

            $user_find = User::findOrFail($user);

            $user_find->delete();

            return response()->json([
                'status' => true,
                'message' => 'Utilisateur supprimé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la suppression de l\'utilisateur : ' . $e->getMessage(),
            ], 403);
        }
    }
}

import React from "react";
import { Route, Navigate } from "react-router-dom";
import { useUserContext } from "./context/UserProvider";

const AdminRouteGuard = ({ element }) => {
  const { user } = useUserContext();

  // Vérifier si l'utilisateur est authentifié en tant qu'administrateur
  const isAdmin = user && user.role === "admin";

  // Rediriger vers la page de connexion si l'utilisateur n'est pas admin
  if (!isAdmin) {
    return <Navigate to="/login" />;
  }

  // Rendre le composant de la route si l'utilisateur est admin
  return <Route element={element} />;
};

export default AdminRouteGuard;

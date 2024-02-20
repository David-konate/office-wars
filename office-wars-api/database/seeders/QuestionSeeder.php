<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample questions data, adjust accordingly
        $questionsData = [
            // Universe (Level 1)
            [
                'title' => 'Quelle planète est principalement recouverte de sable et abrite la ferme de Luke Skywalker ?',
                'category_id' => 1,
                'level_id' => 1,
            ],
            [
                'title' => 'Quel type de créature est Chewbacca ?',
                'category_id' => 1,
                'level_id' => 1,
            ],
            [
                'title' => 'Qui est le mentor Jedi de Luke Skywalker ?',
                'category_id' => 1,
                'level_id' => 1,
            ],
            [
                'title' => 'Quelle est la capitale de la République Galactique ?',
                'category_id' => 1,
                'level_id' => 1,
            ],
            [
                'title' => 'Sur quelle planète se trouve la cité des Nuages dans l\'épisode V ?',
                'category_id' => 1,
                'level_id' => 1,
            ],
            [
                'title' => 'Quel droïde accompagne Luke Skywalker dès le début de son aventure dans l\'épisode IV ?',
                'category_id' => 1,
                'level_id' => 1,

            ],
            [
                'title' => 'Quelle planète est détruite par l\'Étoile de la Mort dans l\'épisode IV ?',
                'category_id' => 1,
                'level_id' => 1,

            ],
            [
                'title' => 'Quelle organisation gouvernementale dirige la galaxie avant la montée de l\'Empire ?',
                'category_id' => 1,
                'level_id' => 1,

            ],
            [
                'title' => 'Quel est le nom de la planète natale de Han Solo ?',
                'category_id' => 1,
                'level_id' => 1,

            ],
            [
                'title' => 'Comment s\'appelle le désert de sable infesté de criminels dans l\'épisode IV ?',
                'category_id' => 1,
                'level_id' => 1,

            ],

            // Character (Level 1)
            [
                'title' => 'Quel contrebandier est également connu sous le nom de "canaille souriante" ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Qui est le co-pilote de Han Solo à bord du Faucon Millenium ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Quel maître Jedi est connu pour sa sagesse et sa petite taille ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Qui est la princesse de la planète Alderaan ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Quel chasseur de primes est embauché par Dark Vador pour traquer les Rebelles dans l\'épisode V ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Qui est le père de Luke Skywalker ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Quel Sith se cache derrière l\'identité de Dark Sidious ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Dans quel épisode Anakin Skywalker devient-il Dark Vador ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Quel Jedi conduit la Grande Armée de la République lors de la bataille de Géonosis ?',
                'category_id' => 2,
                'level_id' => 1,

            ],
            [
                'title' => 'Qui est le chef suprême du Premier Ordre dans la postlogie ?',
                'category_id' => 2,
                'level_id' => 1,

            ],

            // Story (Level 1)
            [
                'title' => 'Quel est le nom du premier film de la saga Star Wars, sorti en 1977 ?',
                'category_id' => 3,
                'level_id' => 1,
            ],
            [
                'title' => 'Qui est le principal antagoniste dans l\'épisode VII : Le Réveil de la Force ?',
                'category_id' => 3,
                'level_id' => 1,
            ],
            [
                'title' => 'Quelle bataille est au centre de l\'épisode II : L\'Attaque des Clones ?',
                'category_id' => 3,
                'level_id' => 1,
            ],
            [
                'title' => 'Qui était le maître Jedi de Count Dooku avant qu\'il ne tombe du côté obscur ?',
                'category_id' => 3,
                'level_id' => 1,
            ],
            [
                'title' => 'Quel personnage dirige la Résistance dans la trilogie de la postologie ?',
                'category_id' => 3,
                'level_id' => 1,
            ],
            [
                'title' => 'Quel personnage est également connu sous le nom de Dark Vador ?',
                'category_id' => 3,
                'level_id' => 1,
            ],
            [
                'title' => 'Quel est le nom de la base Starkiller dans l\'épisode VII ?',
                'category_id' => 3,
                'level_id' => 1,
            ],
            [
                'title' => 'Dans "Rogue One: A Star Wars Story", quel est le nom du droïde impérial reprogrammé qui accompagne Cassian Andor ?',
                'category_id' => 3,
                'level_id' => 1,

            ],
            [
                'title' => 'Dans "The Mandalorian", quel est le nom du personnage interprété par Pedro Pascal ?',
                'category_id' => 3,
                'level_id' => 1,
            ],
            [
                'title' => 'Dans "The Bad Batch", quel clone devient le mentor du groupe après l\'Ordre 66 ?',
                'category_id' => 3,
                'level_id' => 1,
            ],


            [
                'title' => 'Quelle planète est le lieu d\'origine des Mon Calamari, dont l\'amiral Ackbar ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Quel est le nom du système stellaire où se déroule la bataille finale entre la Résistance et le Premier Ordre dans "Les Derniers Jedi" ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Quel peuple habitant Endor aide les Rebelles à détruire le générateur de bouclier de l\'Étoile de la Mort dans "Le Retour du Jedi" ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Dans "Solo: A Star Wars Story", quelle créature ressemble à un gros poisson et habite les eaux troubles de Mimban ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Quel type de créature est le chasseur de primes Bossk ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Quel droïde assiste le général Grievous dans "La Revanche des Sith" ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Quel Sith est également connu sous le nom de Dark Plagueis ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Qui est le maître Jedi qui découvre la prophétie de l\'Élu dans "La Menace fantôme" ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Quel vaisseau spatial est utilisé par les Rebelles pour détruire la première Étoile de la Mort ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],
            [
                'title' => 'Quel Jedi est connu pour sa maîtrise du combat au sabre violet ?',
                'category_id' => 1, // Universe
                'level_id' => 2,
            ],




            // Characters (Level 2)
            [
                'title' => 'Quel contrebandier a remporté le Faucon Millenium dans un jeu de sabacc contre Lando Calrissian ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quel Wookiee est le copilote du Faucon Millenium ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quel Jedi est surnommé le "Chosen One" ou l\'Élu ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quelle princesse est captive sur l\'Étoile de la Mort dans "Un Nouvel Espoir" ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quel chasseur de primes est également un clone altéré génétiquement ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quel Jedi utilise un double sabre laser rouge et fait partie des Séparatistes ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quel Sith est connu pour ses compétences en duel au sabre laser et son amour des acrobaties ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quelle ancienne apprentie Jedi devient un Inquisiteur sous l\'Empire Galactique ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quel pilote de la Résistance vole le chasseur de la Première Ordre lors de la bataille de Crait dans "Les Derniers Jedi" ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],
            [
                'title' => 'Quel Jedi est connu pour son style de combat acrobatique et son sabre laser jaune ?',
                'category_id' => 2, // Characters
                'level_id' => 2,
            ],



            // Story (Level 2)
            [
                'title' => 'Dans "L\'Empire contre-attaque", quelle révélation choquante Dark Vador fait-il à Luke Skywalker ?',
                'category_id' => 3, // Story
                'level_id' => 2,
            ],
            [
                'title' => 'Quel personnage de la postlogie est le fils de Leia Organa et Han Solo ?',
                'category_id' => 3, // Story
                'level_id' => 2,
            ],
            [
                'title' => 'Quelle organisation dirige la galaxie pendant l\'absence de la République entre la postlogie et la trilogie originale ?',
                'category_id' => 3, // Story
                'level_id' => 2,
            ],
            [
                'title' => 'Dans "La Revanche des Sith", quel Jedi devient le maître de Dark Vador après la chute d\'Obi-Wan Kenobi ?',
                'category_id' => 3, // Story
                'level_id' => 2,
            ],
            [
                'title' => 'Quel Jedi a construit son propre sabre laser violet unique après la chute de l\'Ordre Jedi ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quel est le nom du vaisseau amiral de la Flotte Impériale dirigée par l\'Empereur Palpatine ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quelle est la capitale de la planète Naboo ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quel ordre exécuté par l\'Empire Galactique a conduit à l\'extermination des Jedi dans "La Revanche des Sith" ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quel est le nom du réseau de criminels dirigé par le puissant mafieux Jabba le Hutt ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quel surnom est donné à Anakin Skywalker par les Tusken Raiders après l\'attaque de leur campement ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quel est le nom de la race de Yoda ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quelle planète est le foyer des Wookiees, dont Chewbacca est originaire ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quel chasseur de primes mandalorien est le protagoniste de la série "The Mandalorian" ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],
            [
                'title' => 'Quel Sith a élaboré le plan connu sous le nom de "Règle des Deux" pour maintenir la domination Sith ?',
                'category_id' => 1, // Universe
                'level_id' => 3,
            ],



            // Characters (Level 3)
            [
                'title' => 'Quel Jedi a survécu à l\'Ordre 66 et s\'est caché sur la planète Tatooine en tant qu\'ermite ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quel Sith est le fondateur de l\'Ordre Sith Bane et est souvent cité dans la "Règle des Deux" ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quelle Sith est la disciple de Dark Plagueis et devient la Sith la plus puissante de son temps ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quel chasseur de primes est le père de Boba Fett et apparaît dans "L\'Attaque des Clones" ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quelle Jedi a mené la bataille de Géonosis aux côtés des clones dans "L\'Attaque des Clones" ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quel chef rebelle a dirigé l\'assaut contre l\'Étoile de la Mort dans "Un Nouvel Espoir" ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quel personnage a été formé par Luke Skywalker et devient un chevalier Jedi dans l\'Univers étendu ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quel Sith était autrefois un Jedi du nom de Revan avant de tomber du côté obscur ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quel droïde impérial est chargé de la construction de l\'Étoile de la Mort dans "Rogue One: A Star Wars Story" ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],
            [
                'title' => 'Quel est le nom du seigneur du crime hutt qui contrôle une grande partie de la bordure extérieure ?',
                'category_id' => 2, // Characters
                'level_id' => 3,
            ],




            // Story (Level 3)
            [
                'title' => 'Quel Jedi a découvert la Force fantôme et a tenté de l\'utiliser pour créer la vie ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel personnage a orchestré la capture de Han Solo et la carbonite dans "L\'Empire contre-attaque" ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel Jedi a tenté de tuer l\'Empereur Palpatine après la mort de Mace Windu dans "La Revanche des Sith" ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel personnage de la postlogie cherche à retrouver le chemin de la Force après son exil volontaire ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel Sith est responsable de la capture de Han Solo sur Bespin dans "L\'Empire contre-attaque" ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel Jedi a découvert les archives Jedi sur Kamino et a averti le Conseil Jedi de la création de l\'armée de clones ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel personnage de la postlogie est formé par Luke Skywalker et devient un chevalier Jedi ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel Jedi a dirigé la défense de Kashyyyk pendant la Guerre des Clones ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel personnage de la postlogie est le petit-fils de Dark Vader et Leia Organa ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],
            [
                'title' => 'Quel Sith a élaboré le plan visant à transformer Anakin Skywalker en Dark Vador dans "La Revanche des Sith" ?',
                'category_id' => 3, // Story
                'level_id' => 3,
            ],

        ];



        // Create questions
        foreach ($questionsData as $question) {
            $category = Category::where('id', $question['category_id'])->firstOrFail();
            $level = Level::where('level', $question['level_id'])->firstOrFail();

            Question::create([
                'questionTitle' => $question['title'],
                'level_id' => $level->id,
                'category_id' => $category->id,
                'imageQuestion' => '...', // Ajoutez le chemin de l'image si nécessaire
            ]);
        }
    }
}

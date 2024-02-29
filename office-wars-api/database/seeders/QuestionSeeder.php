<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Category;
use App\Models\Question;
use App\Models\Univer;
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
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                "univer_id" => 1

            ],
            [
                'title' => 'Quel type de créature est Chewbacca ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Qui est le mentor Jedi de Luke Skywalker ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle est la capitale de la République Galactique ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Sur quelle planète se trouve la cité des Nuages dans l\'épisode V ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel droïde accompagne Luke Skywalker dès le début de son aventure dans l\'épisode IV ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Quelle planète est détruite par l\'Étoile de la Mort dans l\'épisode IV ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Quelle organisation gouvernementale dirige la galaxie avant la montée de l\'Empire ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Quel est le nom de la planète natale de Han Solo ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Comment s\'appelle le désert de sable infesté de criminels dans l\'épisode IV ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],

            // Character (Level 1)
            [
                'title' => 'Quel contrebandier est également connu sous le nom de "canaille souriante" ?',
                'level_id' => 1,
                'univer_id' => 1,
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',


            ],
            [
                'title' => 'Qui est le co-pilote de Han Solo à bord du Faucon Millenium ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',

                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Quel maître Jedi est connu pour sa sagesse et sa petite taille ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',

                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Qui est la princesse de la planète Alderaan ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Quel chasseur de primes est embauché par Dark Vador pour traquer les Rebelles dans l\'épisode V ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Qui est le père de Luke Skywalker ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Quel Sith se cache derrière l\'identité de Dark Sidious ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Dans quel épisode Anakin Skywalker devient-il Dark Vador ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Quel Jedi conduit la Grande Armée de la République lors de la bataille de Géonosis ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',                'imageQuestion' => '/mara.jpg',                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Qui est le chef suprême du Premier Ordre dans la postlogie ?',
                'category_id' => 2, // Characters
                'imageQuestion' => '/mara.jpg',                'imageQuestion' => '/mara.jpg',                'level_id' => 1,
                'univer_id' => 1,

            ],

            // Story (Level 1)
            [
                'title' => 'Quel est le nom du premier film de la saga Star Wars, sorti en 1977 ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Qui est le principal antagoniste dans l\'épisode VII : Le Réveil de la Force ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle bataille est au centre de l\'épisode II : L\'Attaque des Clones ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Qui était le maître Jedi de Count Dooku avant qu\'il ne tombe du côté obscur ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel personnage dirige la Résistance dans la trilogie de la postologie ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel personnage est également connu sous le nom de Dark Vador ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel est le nom de la base Starkiller dans l\'épisode VII ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Dans "Rogue One: A Star Wars Story", quel est le nom du droïde impérial reprogrammé qui accompagne Cassian Andor ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,

            ],
            [
                'title' => 'Dans "The Mandalorian", quel est le nom du personnage interprété par Pedro Pascal ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],
            [
                'title' => 'Dans "The Bad Batch", quel clone devient le mentor du groupe après l\'Ordre 66 ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg',
                'level_id' => 1,
                'univer_id' => 1,
            ],


            [
                'title' => 'Quelle planète est le lieu d\'origine des Mon Calamari, dont l\'amiral Ackbar ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel est le nom du système stellaire où se déroule la bataille finale entre la Résistance et le Premier Ordre dans "Les Derniers Jedi" ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel peuple habitant Endor aide les Rebelles à détruire le générateur de bouclier de l\'Étoile de la Mort dans "Le Retour du Jedi" ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Dans "Solo: A Star Wars Story", quelle créature ressemble à un gros poisson et habite les eaux troubles de Mimban ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel type de créature est le chasseur de primes Bossk ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel droïde assiste le général Grievous dans "La Revanche des Sith" ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Sith est également connu sous le nom de Dark Plagueis ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Qui est le maître Jedi qui découvre la prophétie de l\'Élu dans "La Menace fantôme" ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel vaisseau spatial est utilisé par les Rebelles pour détruire la première Étoile de la Mort ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Jedi est connu pour sa maîtrise du combat au sabre violet ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 2,
                'univer_id' => 1,
            ],




            // Characters (Level 2)
            [
                'title' => 'Quel contrebandier a remporté le Faucon Millenium dans un jeu de sabacc contre Lando Calrissian ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Wookiee est le copilote du Faucon Millenium ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Jedi est surnommé le "Chosen One" ou l\'Élu ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle princesse est captive sur l\'Étoile de la Mort dans "Un Nouvel Espoir" ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel chasseur de primes est également un clone altéré génétiquement ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],


            [
                'title' => 'Quel Jedi utilise un double sabre laser rouge et fait partie des Séparatistes ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Sith est connu pour ses compétences en duel au sabre laser et son amour des acrobaties ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle ancienne apprentie Jedi devient un Inquisiteur sous l\'Empire Galactique ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel pilote de la Résistance vole le chasseur de la Première Ordre lors de la bataille de Crait dans "Les Derniers Jedi" ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Jedi est connu pour son style de combat acrobatique et son sabre laser jaune ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 2,
                'univer_id' => 1,
            ],



            // Story (Level 2)
            [
                'title' => 'Dans "L\'Empire contre-attaque", quelle révélation choquante Dark Vador fait-il à Luke Skywalker ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel personnage de la postlogie est le fils de Leia Organa et Han Solo ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle organisation dirige la galaxie pendant l\'absence de la République entre la postlogie et la trilogie originale ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Dans "La Revanche des Sith", quel Jedi devient le maître de Dark Vador après la chute d\'Obi-Wan Kenobi ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 2,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Jedi a construit son propre sabre laser violet unique après la chute de l\'Ordre Jedi ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],

            [
                'title' => 'Quel est le nom du vaisseau amiral de la Flotte Impériale dirigée par l\'Empereur Palpatine ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle est la capitale de la planète Naboo ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel ordre exécuté par l\'Empire Galactique a conduit à l\'extermination des Jedi dans "La Revanche des Sith" ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel est le nom du réseau de criminels dirigé par le puissant mafieux Jabba le Hutt ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel surnom est donné à Anakin Skywalker par les Tusken Raiders après l\'attaque de leur campement ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],


            [
                'title' => 'Quel est le nom de la race de Yoda ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle planète est le foyer des Wookiees, dont Chewbacca est originaire ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel chasseur de primes mandalorien est le protagoniste de la série "The Mandalorian" ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Sith a élaboré le plan connu sous le nom de "Règle des Deux" pour maintenir la domination Sith ?',
                'category_id' => 1,
                'imageQuestion' => '/tunisia.jpg', // Universe
                'level_id' => 3,
                'univer_id' => 1,
            ],



            // Characters (Level 3)
            [
                'title' => 'Quel Jedi a survécu à l\'Ordre 66 et s\'est caché sur la planète Tatooine en tant qu\'ermite ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Sith est le fondateur de l\'Ordre Sith Bane et est souvent cité dans la "Règle des Deux" ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle Sith est la disciple de Dark Plagueis et devient la Sith la plus puissante de son temps ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel chasseur de primes est le père de Boba Fett et apparaît dans "L\'Attaque des Clones" ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quelle Jedi a mené la bataille de Géonosis aux côtés des clones dans "L\'Attaque des Clones" ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],

            //
            [
                'title' => 'Quel chef rebelle a dirigé l\'assaut contre l\'Étoile de la Mort dans "Un Nouvel Espoir" ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel personnage a été formé par Luke Skywalker et devient un chevalier Jedi dans l\'Univers étendu ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Sith était autrefois un Jedi du nom de Revan avant de tomber du côté obscur ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel droïde impérial est chargé de la construction de l\'Étoile de la Mort dans "Rogue One: A Star Wars Story" ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel est le nom du seigneur du crime hutt qui contrôle une grande partie de la bordure extérieure ?',
                'category_id' => 2,
                'imageQuestion' => '/mara.jpg',                'level_id' => 3,
                'univer_id' => 1,
            ],




            // Story (Level 3)
            [
                'title' => 'Quel Jedi a découvert la Force fantôme et a tenté de l\'utiliser pour créer la vie ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel personnage a orchestré la capture de Han Solo et la carbonite dans "L\'Empire contre-attaque" ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Jedi a tenté de tuer l\'Empereur Palpatine après la mort de Mace Windu dans "La Revanche des Sith" ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel personnage de la postlogie cherche à retrouver le chemin de la Force après son exil volontaire ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Sith est responsable de la capture de Han Solo sur Bespin dans "L\'Empire contre-attaque" ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Jedi a découvert les archives Jedi sur Kamino et a averti le Conseil Jedi de la création de l\'armée de clones ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel personnage de la postlogie est formé par Luke Skywalker et devient un chevalier Jedi ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Jedi a dirigé la défense de Kashyyyk pendant la Guerre des Clones ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel personnage de la postlogie est le petit-fils de Dark Vader et Leia Organa ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Story
                'level_id' => 3,
                'univer_id' => 1,
            ],
            [
                'title' => 'Quel Sith a élaboré le plan visant à transformer Anakin Skywalker en Dark Vador dans "La Revanche des Sith" ?',
                'category_id' => 3,
                'imageQuestion' => '/bespi2.jpg', // Storyunivers
                'level_id' => 3,
                'univer_id' => 1,
            ],






            // basket a partir de lid 84




            // Niveau 1: Débutant - Histoire
            [
                'title' => "Quand le basket-ball a-t-il été inventé?",
                'category_id' => 5,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Qui est le fondateur du basket-ball?",
                'category_id' => 5,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Où le premier match de basket-ball a-t-il été joué?",
                'category_id' => 5,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "En quelle année le basket-ball a-t-il été introduit aux Jeux olympiques?",
                'category_id' => 5,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle est l'origine du terme 'basket-ball'?",
                'category_id' => 5,
                'level_id' => 1,
                'univer_id' => 3,
            ],

            // Niveau 1: Débutant - Joueurs
            [
                'title' => "Qui est souvent considéré comme le plus grand joueur de basket-ball de tous les temps?",
                'category_id' => 2,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur a remporté le plus de titres de MVP en NBA?",
                'category_id' => 2,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur a détenu le record du plus grand nombre de points marqués lors d'un seul match NBA?",
                'category_id' => 2,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Qui est le 'The Mailman' dans le monde du basket-ball?",
                'category_id' => 2,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur a été surnommé 'The Answer'?",
                'category_id' => 2,
                'level_id' => 1,
                'univer_id' => 3,
            ],

            // Niveau 1: Débutant - Équipes
            [
                'title' => "Quelle équipe de la NBA a remporté le plus de championnats?",
                'category_id' => 4,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe de la NBA a remporté le plus de matchs en une saison régulière?",
                'category_id' => 4,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe est surnommée 'The Greek Freak'?",
                'category_id' => 4,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe a détenu le record du plus grand nombre de victoires consécutives en NBA?",
                'category_id' => 4,
                'level_id' => 1,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe de la NBA représente la ville de Dallas?",
                'category_id' => 4,
                'level_id' => 1,
                'univer_id' => 3,
            ],

            // Niveau 2: Intermédiaire - Histoire    --  99
            [
                'title' => "Quel événement a conduit à la création du basket-ball féminin?",
                'category_id' => 5,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel pays a remporté le premier tournoi de basket-ball aux Jeux olympiques féminins?",
                'category_id' => 5,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Qui est le premier joueur à avoir marqué 100 points lors d'un seul match de la NBA?",
                'category_id' => 5,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quand a eu lieu la première All-Star Game de la NBA?",
                'category_id' => 5,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe a remporté le premier championnat de la NBA?",
                'category_id' => 4,
                'level_id' => 2,
                'univer_id' => 3,
            ],

            // Niveau 2: Intermédiaire - Joueurs
            [
                'title' => "Combien de fois Michael Jordan a-t-il remporté le titre de MVP des finales NBA?",
                'category_id' => 2,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur est surnommé 'The Beard'?",
                'category_id' => 2,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Qui est le joueur le plus grand à avoir joué en NBA?",
                'category_id' => 2,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur a détenu le record du plus grand nombre de rebonds en carrière en NBA?",
                'category_id' => 2,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur a été le premier choix de la draf de la NBA en 2020?",
                'category_id' => 2,
                'level_id' => 2,
                'univer_id' => 3,
            ],

            // Niveau 2: Intermédiaire - Équipes
            [
                'title' => "Quelle équipe de la NBA est surnommée 'The Process'?",
                'category_id' => 4,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe a remporté le championnat NBA le plus récemment?",
                'category_id' => 4,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe de la NBA a connu la plus longue série de saisons consécutives avec une qualification en séries éliminatoires?",
                'category_id' => 4,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe est souvent associée au 'Showtime'?",
                'category_id' => 4,
                'level_id' => 2,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe a été la première à remporter trois championnats NBA consécutifs dans les années 1950?",
                'category_id' => 4,
                'level_id' => 2,
                'univer_id' => 3,
            ],

            // Niveau 3 : Avancé - Histoire
            [
                'title' => "Quel entraîneur a remporté le plus de championnats de la NBA?",
                'category_id' => 5,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe de la NBA a connu la plus longue série de victoires consécutives en saison régulière?",
                'category_id' => 4,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur a été le premier à remporter le titre de MVP des finales NBA avec trois équipes différentes?",
                'category_id' => 2,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Qui a été le premier joueur à remporter le titre de MVP de la saison régulière et des finales la même année?",
                'category_id' => 2,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe de la NBA a détenu le record du plus grand nombre de victoires en une saison régulière?",
                'category_id' => 4,
                'level_id' => 3,
                'univer_id' => 3,
            ],

            // Niveau 3 : Avancé - Joueurs
            [
                'title' => "Quel joueur a été le premier à enregistrer un triple-double en moyenne sur une saison régulière?",
                'category_id' => 2,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur a remporté le plus de titres de défenseur de l'année en NBA?",
                'category_id' => 2,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Combien de fois Kareem Abdul-Jabbar a-t-il mené la ligue en points par match en saison régulière?",
                'category_id' => 2,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Qui est le seul joueur à avoir remporté le MVP des finales en étant dans l'équipe perdante?",
                'category_id' => 2,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quel joueur a été le premier à enregistrer un quadruple-double en NBA?",
                'category_id' => 2,
                'level_id' => 3,
                'univer_id' => 3,
            ],

            // Niveau 3 : Avancé - Équipes    -123-
            [
                'title' => "Quelle équipe de la NBA est surnommée 'The Bad Boys'?",
                'category_id' => 4,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe a remporté le plus de championnats dans les années 1980?",
                'category_id' => 4,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe a détenu le record du plus grand nombre de victoires en une saison régulière avant que les Warriors de Golden State ne les dépassent?",
                'category_id' => 4,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe de la NBA a le plus grand nombre de participations consécutives aux séries éliminatoires?",
                'category_id' => 4,
                'level_id' => 3,
                'univer_id' => 3,
            ],
            [
                'title' => "Quelle équipe a remporté le premier championnat de la NBA après sa fusion avec la BAA?",
                'category_id' => 4,
                'level_id' => 3,
                'univer_id' => 3,
            ],



            //desperate   --128-

            // Niveau 1: Débutant - Histoire
            // [
            //     'title' => "Quand la série Desperate Housewives a-t-elle été diffusée pour la première fois?",
            //     'category_id' => 1, // Catégorie: Histoire
            //     'level_id' => 1,
            //     'univer_id' => 2, // Univers: Desperate Housewives
            // ],
            // [
            //     'title' => "Qui est le créateur de Desperate Housewives?",
            //     'category_id' => 1,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Où se déroule l'intrigue principale de Desperate Housewives?",
            //     'category_id' => 1,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Combien de saisons la série Desperate Housewives compte-t-elle?",
            //     'category_id' => 1,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle actrice principale a remporté un Golden Globe pour son rôle dans Desperate Housewives?",
            //     'category_id' => 1,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],

            // // Niveau 1: Débutant - Personnages
            // [
            //     'title' => "Qui est la narratrice omnisciente de Desperate Housewives?",
            //     'category_id' => 2, // Catégorie: Personnages
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle desperate housewife est obsédée par la propreté et l'ordre?",
            //     'category_id' => 2,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage est connu pour être une femme d'affaires ambitieuse dans la série?",
            //     'category_id' => 2,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel est le nom du mari de Lynette Scavo dans Desperate Housewives?",
            //     'category_id' => 2,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle desperate housewife est artiste et a des antécédents tumultueux?",
            //     'category_id' => 2,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],

            // // Niveau 1: Débutant - Lieux
            // [
            //     'title' => "Quel est le nom du quartier où se déroule l'intrigue de Desperate Housewives?",
            //     'category_id' => 3, // Catégorie: Lieux
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Dans quel café les personnages de Desperate Housewives se retrouvent-ils fréquemment?",
            //     'category_id' => 3,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle maison a été le lieu de nombreux événements importants dans la série?",
            //     'category_id' => 3,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Où travaille Bree Van de Kamp au début de la série?",
            //     'category_id' => 3,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle est la profession de Susan Mayer dans Desperate Housewives?",
            //     'category_id' => 3,
            //     'level_id' => 1,
            //     'univer_id' => 2,
            // ],

            // // Niveau 2: Intermédiaire - Histoire
            // [
            //     'title' => "Quelle est la principale intrigue de la première saison de Desperate Housewives?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel événement marque le début de la série Desperate Housewives?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle desperate housewife a eu une liaison avec le jardinier, John Rowland?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage principal quitte Wisteria Lane à la fin de la saison 4?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel est le nom de la société fondée par Gabrielle Solis dans la série?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],

            // // Niveau 2: Intermédiaire - Personnages
            // [
            //     'title' => "Quel médecin devient le mari de Susan Mayer dans Desperate Housewives?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage a un fils prénommé Porter?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel est le métier de Carlos Solis dans la série?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle desperate housewife a un passé en tant de mannequin?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage est interprété par Felicity Huffman dans Desperate Housewives?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],

            // // Niveau 2: Intermédiaire - Lieux  -164-
            // [
            //     'title' => "Quelle entreprise Bree Van de Kamp dirige-t-elle plus tard dans la série?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage déménage dans la maison des Applewhite dans la saison 2?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel est le nom du club de golf fréquenté par les habitants de Wisteria Lane?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Où Bree Van de Kamp rencontre-t-elle son futur mari Orson Hodge?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage cache un lourd secret lié à un accident de voiture?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle est la profession d'Orson Hodge dans Desperate Housewives?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle desperate housewife devient brièvement la maire de Fairview?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel est le nom complet de Gabrielle Solis dans la série?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage revient d'entre les morts dans Desperate Housewives?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],

            // [
            //     'title' => "Quel acteur joue le rôle de Mike Delfino dans Desperate Housewives?",
            //     'category_id' => 1,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],

            // // Niveau 2: Intermédiaire - Personnages
            // [
            //     'title' => "Quelle desperate housewife a des jumeaux prénommés Preston et Porter?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel est le métier de Carlos Solis au début de la série?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage est obsédé par les mystères et les complots?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel est le nom de famille d'Edie Britt dans Desperate Housewives?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage est amoureux de Katherine Mayfair?",
            //     'category_id' => 2,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],

            // // Niveau 2: Intermédiaire - Lieux
            // [
            //     'title' => "Quel personnage devient propriétaire d'un restaurant appelé 'Scavo's Pizzeria'?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel événement tragique se produit lors du bal de promo au lycée de Fairview?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel est le nom du club de golf de Fairview dans Desperate Housewives?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quelle desperate housewife a une relation avec son professeur de yoga?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],
            // [
            //     'title' => "Quel personnage habite dans la maison du 4356 Wisteria Lane?",
            //     'category_id' => 3,
            //     'level_id' => 2,
            //     'univer_id' => 2,
            // ],

        ];



        foreach ($questionsData as $question) {
            $category = Category::where('id', $question['category_id'])->firstOrFail();
            $level = Level::where('id', $question['level_id'])->firstOrFail(); // Correction: Utilisez 'id' au lieu de 'level'
            $univer = Univer::where('id', $question['univer_id'])->firstOrFail(); // Correction: Utilisez 'id' au lieu de 'univer_id'

            Question::create([
                'questionTitle' => $question['title'],
                'level_id' => $level->id,
                'category_id' => $category->id,
                'univer_id' => $univer->id,
                // 'imageQuestion' => $question['imageQuestion'], // Ajoutez le chemin de l'image si nécessaire
            ]);
        }
    }
}

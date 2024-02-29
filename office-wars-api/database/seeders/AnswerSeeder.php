<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add your true and false answers here
        $answersData = [
            // Réponses pour la question 1
            [
                'question_id' => 1,
                'answerText' => 'Tatooine',
                'isCorrect' => true,
            ],
            [
                'question_id' => 1,
                'answerText' => 'Naboo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 1,
                'answerText' => 'Endor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 1,
                'answerText' => 'Jakku',
                'isCorrect' => false,
            ],

            // Réponses pour la question 2
            [
                'question_id' => 2,
                'answerText' => 'Wookiee',
                'isCorrect' => true,
            ],
            [
                'question_id' => 2,
                'answerText' => 'Rodian',
                'isCorrect' => false,
            ],
            [
                'question_id' => 2,
                'answerText' => 'Bothan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 2,
                'answerText' => 'Mon Calamari',
                'isCorrect' => false,
            ],

            // Réponses pour la question 3
            [
                'question_id' => 3,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => true,
            ],
            [
                'question_id' => 3,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],
            [
                'question_id' => 3,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 3,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            // Réponses pour la question 4
            [
                'question_id' => 4,
                'answerText' => 'Coruscant',
                'isCorrect' => true,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Tatooine',
                'isCorrect' => false,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Alderaan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Hoth',
                'isCorrect' => false,
            ],

            // Réponses pour la question 5
            [
                'question_id' => 5,
                'answerText' => 'Bespin',
                'isCorrect' => true,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Endor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Coruscant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Naboo',
                'isCorrect' => false,
            ],

            // Réponses pour la question 6
            [
                'question_id' => 6,
                'answerText' => 'R2-D2',
                'isCorrect' => true,
            ],
            [
                'question_id' => 6,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],
            [
                'question_id' => 6,
                'answerText' => 'BB-8',
                'isCorrect' => false,
            ],
            [
                'question_id' => 6,
                'answerText' => 'IG-88',
                'isCorrect' => false,
            ],

            // Réponses pour la question 7
            [
                'question_id' => 7,
                'answerText' => 'Alderaan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Hoth',
                'isCorrect' => false,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Endor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Dagobah',
                'isCorrect' => false,
            ],
            // Réponses pour la question 8
            [
                'question_id' => 8,
                'answerText' => 'République Galactique',
                'isCorrect' => true,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Confédération des Systèmes Indépendants',
                'isCorrect' => false,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Alliance Rebelle',
                'isCorrect' => false,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Empire Galactique',
                'isCorrect' => false,
            ],

            // Réponses pour la question 9
            [
                'question_id' => 9,
                'answerText' => 'Corellia',
                'isCorrect' => true,
            ],
            [
                'question_id' => 9,
                'answerText' => 'Tatooine',
                'isCorrect' => false,
            ],
            [
                'question_id' => 9,
                'answerText' => 'Naboo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 9,
                'answerText' => 'Dagobah',
                'isCorrect' => false,
            ],

            // Réponses pour la question 10
            [
                'question_id' => 10,
                'answerText' => 'Désert de Tatooine',
                'isCorrect' => true,
            ],
            [
                'question_id' => 10,
                'answerText' => 'Désert de Jakku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 10,
                'answerText' => 'Désert de Geonosis',
                'isCorrect' => false,
            ],
            [
                'question_id' => 10,
                'answerText' => 'Désert de Coruscant',
                'isCorrect' => false,
            ],

            // Réponses pour la question 11 (Character)
            [
                'question_id' => 11,
                'answerText' => 'Han Solo',
                'isCorrect' => true,
            ],
            [
                'question_id' => 11,
                'answerText' => 'Lando Calrissian',
                'isCorrect' => false,
            ],
            [
                'question_id' => 11,
                'answerText' => 'Chewbacca',
                'isCorrect' => false,
            ],
            [
                'question_id' => 11,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],

            // Réponses pour la question 12 (Character)
            [
                'question_id' => 12,
                'answerText' => 'Chewbacca',
                'isCorrect' => true,
            ],
            [
                'question_id' => 12,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],
            [
                'question_id' => 12,
                'answerText' => 'R2-D2',
                'isCorrect' => false,
            ],
            [
                'question_id' => 12,
                'answerText' => 'Lando Calrissian',
                'isCorrect' => false,
            ],

            // Réponses pour la question 13 (Character)
            [
                'question_id' => 13,
                'answerText' => 'Yoda',
                'isCorrect' => true,
            ],
            [
                'question_id' => 13,
                'answerText' => 'Ki-Adi-Mundi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 13,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 13,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],

            // Réponses pour la question 14 (Character)
            [
                'question_id' => 14,
                'answerText' => 'Leia Organa',
                'isCorrect' => true,
            ],
            [
                'question_id' => 14,
                'answerText' => 'Padmé Amidala',
                'isCorrect' => false,
            ],
            [
                'question_id' => 14,
                'answerText' => 'Mon Mothma',
                'isCorrect' => false,
            ],
            [
                'question_id' => 14,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => false,
            ],

            // Réponses pour la question 15 (Character)
            [
                'question_id' => 15,
                'answerText' => 'Boba Fett',
                'isCorrect' => true,
            ],
            [
                'question_id' => 15,
                'answerText' => 'IG-88',
                'isCorrect' => false,
            ],
            [
                'question_id' => 15,
                'answerText' => 'Dengar',
                'isCorrect' => false,
            ],
            [
                'question_id' => 15,
                'answerText' => 'Bossk',
                'isCorrect' => false,
            ],

            // Réponses pour la question 16 (Character)
            [
                'question_id' => 16,
                'answerText' => 'Darth Vader',
                'isCorrect' => true,
            ],
            [
                'question_id' => 16,
                'answerText' => 'Emperor Palpatine',
                'isCorrect' => false,
            ],
            [
                'question_id' => 16,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 16,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],

            // Réponses pour la question 17 (Character)
            [
                'question_id' => 17,
                'answerText' => 'Episode III: La Revanche des Sith',
                'isCorrect' => true,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Episode I: La Menace Fantôme',
                'isCorrect' => false,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Episode II: L\'Attaque des Clones',
                'isCorrect' => false,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Episode IV: Un Nouvel Espoir',
                'isCorrect' => false,
            ],


            // Réponses pour la question 18 (Character)
            [
                'question_id' => 18,
                'answerText' => 'Mace Windu',
                'isCorrect' => true,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => false,
            ],

            // Réponses pour la question 19 (Character)
            [
                'question_id' => 19,
                'answerText' => 'Snoke',
                'isCorrect' => true,
            ],
            [
                'question_id' => 19,
                'answerText' => 'Kylo Ren',
                'isCorrect' => false,
            ],
            [
                'question_id' => 19,
                'answerText' => 'General Hux',
                'isCorrect' => false,
            ],
            [
                'question_id' => 19,
                'answerText' => 'Captain Phasma',
                'isCorrect' => false,
            ],

            // Réponses pour la question 20 (Story)
            [
                'question_id' => 20,
                'answerText' => 'Episode IV: Un Nouvel Espoir',
                'isCorrect' => true,
            ],
            [
                'question_id' => 20,
                'answerText' => 'Episode V: L\'Empire Contre-Attaque',
                'isCorrect' => false,
            ],
            [
                'question_id' => 20,
                'answerText' => 'Episode VI: Le Retour du Jedi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 20,
                'answerText' => 'Episode I: La Menace Fantôme',
                'isCorrect' => false,
            ],

            // Réponses pour la question 21 (Story)
            [
                'question_id' => 21,
                'answerText' => 'Kylo Ren',
                'isCorrect' => true,
            ],
            [
                'question_id' => 21,
                'answerText' => 'Snoke',
                'isCorrect' => false,
            ],
            [
                'question_id' => 21,
                'answerText' => 'Captain Phasma',
                'isCorrect' => false,
            ],
            [
                'question_id' => 21,
                'answerText' => 'General Hux',
                'isCorrect' => false,
            ],

            // Réponses pour la question 22 (Story)
            [
                'question_id' => 22,
                'answerText' => 'Bataille de Géonosis',
                'isCorrect' => true,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Bataille de Naboo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Bataille de Coruscant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Bataille de Hoth',
                'isCorrect' => false,
            ],

            // Réponses pour la question 23 (Story)
            [
                'question_id' => 23,
                'answerText' => 'Yoda',
                'isCorrect' => true,
            ],
            [
                'question_id' => 23,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 23,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 23,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            // Réponses pour la question 24 (Story)
            [
                'question_id' => 24,
                'answerText' => 'Leia Organa',
                'isCorrect' => true,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Han Solo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Luke Skywalker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Poe Dameron',
                'isCorrect' => false,
            ],

            // Réponses pour la question 25 (Story)
            [
                'question_id' => 25,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 25,
                'answerText' => 'Kylo Ren',
                'isCorrect' => false,
            ],
            [
                'question_id' => 25,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 25,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],

            // Réponses pour la question 26 (Story)
            [
                'question_id' => 26,
                'answerText' => 'Base Starkiller',
                'isCorrect' => true,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Base Endor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Base Hoth',
                'isCorrect' => false,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Base Yavin IV',
                'isCorrect' => false,
            ],

            // Réponses pour la question 27 (Story)
            [
                'question_id' => 27,
                'answerText' => 'K-2SO',
                'isCorrect' => true,
            ],
            [
                'question_id' => 27,
                'answerText' => 'BB-8',
                'isCorrect' => false,
            ],
            [
                'question_id' => 27,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],
            [
                'question_id' => 27,
                'answerText' => 'R2-D2',
                'isCorrect' => false,
            ],

            // Réponses pour la question 28 (Story)
            [
                'question_id' => 28,
                'answerText' => 'Din Djarin',
                'isCorrect' => true,
            ],
            [
                'question_id' => 28,
                'answerText' => 'Boba Fett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 28,
                'answerText' => 'Cara Dune',
                'isCorrect' => false,
            ],
            [
                'question_id' => 28,
                'answerText' => 'Greef Karga',
                'isCorrect' => false,
            ],

            // Réponses pour la question 29 (Story)
            [
                'question_id' => 29,
                'answerText' => 'Hunter',
                'isCorrect' => true,
            ],
            [
                'question_id' => 29,
                'answerText' => 'Crosshair',
                'isCorrect' => false,
            ],
            [
                'question_id' => 29,
                'answerText' => 'Tech',
                'isCorrect' => false,
            ],
            [
                'question_id' => 29,
                'answerText' => 'Wrecker',
                'isCorrect' => false,
            ],
            // Réponses pour la question 30 (Universe)
            [
                'question_id' => 30,
                'answerText' => 'Mon Cala',
                'isCorrect' => true,
            ],
            [
                'question_id' => 30,
                'answerText' => 'Kashyyyk',
                'isCorrect' => false,
            ],
            [
                'question_id' => 30,
                'answerText' => 'Tatooine',
                'isCorrect' => false,
            ],
            [
                'question_id' => 30,
                'answerText' => 'Naboo',
                'isCorrect' => false,
            ],

            // Réponses pour la question 31 (Universe)
            [
                'question_id' => 31,
                'answerText' => 'Crait',
                'isCorrect' => true,
            ],
            [
                'question_id' => 31,
                'answerText' => 'Jakku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 31,
                'answerText' => 'Hoth',
                'isCorrect' => false,
            ],
            [
                'question_id' => 31,
                'answerText' => 'Tatooine',
                'isCorrect' => false,
            ],

            // Réponses pour la question 32 (Universe)
            [
                'question_id' => 32,
                'answerText' => 'Ewoks',
                'isCorrect' => true,
            ],
            [
                'question_id' => 32,
                'answerText' => 'Wookiees',
                'isCorrect' => false,
            ],
            [
                'question_id' => 32,
                'answerText' => 'Gungans',
                'isCorrect' => false,
            ],
            [
                'question_id' => 32,
                'answerText' => 'Twileks',
                'isCorrect' => false,
            ],

            // Réponses pour la question 33 (Universe)
            [
                'question_id' => 33,
                'answerText' => 'Summa-Verminoth',
                'isCorrect' => true,
            ],
            [
                'question_id' => 33,
                'answerText' => 'Dianoga',
                'isCorrect' => false,
            ],
            [
                'question_id' => 33,
                'answerText' => 'Exogorth',
                'isCorrect' => false,
            ],
            [
                'question_id' => 33,
                'answerText' => 'Sarlacc',
                'isCorrect' => false,
            ],

            // Réponses pour la question 34 (Universe)
            [
                'question_id' => 34,
                'answerText' => 'Trandoshan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Rodian',
                'isCorrect' => false,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Mon Calamari',
                'isCorrect' => false,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Weequay',
                'isCorrect' => false,
            ],

            // Réponses pour la question 35 (Universe)
            [
                'question_id' => 35,
                'answerText' => 'IG-100',
                'isCorrect' => true,
            ],
            [
                'question_id' => 35,
                'answerText' => 'BX-series Droid Commando',
                'isCorrect' => false,
            ],
            [
                'question_id' => 35,
                'answerText' => 'HK-series Assassin Droid',
                'isCorrect' => false,
            ],
            [
                'question_id' => 35,
                'answerText' => 'Protocol Droid',
                'isCorrect' => false,
            ],

            // Réponses pour la question 36 (Universe)
            [
                'question_id' => 36,
                'answerText' => 'Darth Plagueis',
                'isCorrect' => true,
            ],
            [
                'question_id' => 36,
                'answerText' => 'Darth Revan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 36,
                'answerText' => 'Darth Bane',
                'isCorrect' => false,
            ],
            [
                'question_id' => 36,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            // Réponses pour la question 38 (Universe)
            [
                'question_id' => 38,
                'answerText' => 'Millennium Falcon',
                'isCorrect' => true,
            ],
            [
                'question_id' => 38,
                'answerText' => 'X-wing Starfighter',
                'isCorrect' => false,
            ],
            [
                'question_id' => 38,
                'answerText' => 'TIE Fighter',
                'isCorrect' => false,
            ],
            [
                'question_id' => 38,
                'answerText' => 'Slave I',
                'isCorrect' => false,
            ],

            // Réponses pour la question 39 (Universe)
            [
                'question_id' => 39,
                'answerText' => 'Mace Windu',
                'isCorrect' => true,
            ],
            [
                'question_id' => 39,
                'answerText' => 'Kit Fisto',
                'isCorrect' => false,
            ],
            [
                'question_id' => 39,
                'answerText' => 'Ki-Adi-Mundi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 39,
                'answerText' => 'Plo Koon',
                'isCorrect' => false,
            ],
            // Réponses pour la question 40 (Characters)
            [
                'question_id' => 40,
                'answerText' => 'Han Solo',
                'isCorrect' => true,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Chewbacca',
                'isCorrect' => false,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Luke Skywalker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],

            // Réponses pour la question 41 (Characters)
            [
                'question_id' => 41,
                'answerText' => 'Chewbacca',
                'isCorrect' => true,
            ],
            [
                'question_id' => 41,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],
            [
                'question_id' => 41,
                'answerText' => 'R2-D2',
                'isCorrect' => false,
            ],
            [
                'question_id' => 41,
                'answerText' => 'Lando Calrissian',
                'isCorrect' => false,
            ],

            // Réponses pour la question 42 (Characters)
            [
                'question_id' => 42,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 42,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 42,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 42,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            // Réponses pour la question 43 (Characters)
            [
                'question_id' => 43,
                'answerText' => 'Princesse Leia Organa',
                'isCorrect' => true,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Padmé Amidala',
                'isCorrect' => false,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Queen Amidala',
                'isCorrect' => false,
            ],

            // Réponses pour la question 44 (Characters)
            [
                'question_id' => 44,
                'answerText' => 'Boba Fett',
                'isCorrect' => true,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Jango Fett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Cad Bane',
                'isCorrect' => false,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Dengar',
                'isCorrect' => false,
            ],
            // Réponses pour la question 45 (Characters)
            [
                'question_id' => 45,
                'answerText' => 'Asajj Ventress',
                'isCorrect' => true,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Aayla Secura',
                'isCorrect' => false,
            ],

            // Réponses pour la question 46 (Characters)
            [
                'question_id' => 46,
                'answerText' => 'Darth Tyranus (Count Dooku)',
                'isCorrect' => true,
            ],
            [
                'question_id' => 46,
                'answerText' => 'Darth Vader',
                'isCorrect' => false,
            ],
            [
                'question_id' => 46,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 46,
                'answerText' => 'Kylo Ren',
                'isCorrect' => false,
            ],

            // Réponses pour la question 47 (Characters)
            [
                'question_id' => 47,
                'answerText' => 'Barriss Offee',
                'isCorrect' => true,
            ],
            [
                'question_id' => 47,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => false,
            ],
            [
                'question_id' => 47,
                'answerText' => 'Shaak Ti',
                'isCorrect' => false,
            ],
            [
                'question_id' => 47,
                'answerText' => 'Luminara Unduli',
                'isCorrect' => false,
            ],

            // Réponses pour la question 48 (Characters)
            [
                'question_id' => 48,
                'answerText' => 'Rose Tico',
                'isCorrect' => true,
            ],
            [
                'question_id' => 48,
                'answerText' => 'Poe Dameron',
                'isCorrect' => false,
            ],
            [
                'question_id' => 48,
                'answerText' => 'Finn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 48,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],

            // Réponses pour la question 49 (Characters)
            [
                'question_id' => 49,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Ki-Adi-Mundi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Plo Koon',
                'isCorrect' => false,
            ],
            // Réponses pour la question 50 (Story)
            [
                'question_id' => 50,
                'answerText' => 'Il est le père de Luke Skywalker.',
                'isCorrect' => true,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Il est le frère de Luke Skywalker.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Il est le maître de Luke Skywalker.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Il est le fils de Luke Skywalker.',
                'isCorrect' => false,
            ],

            // Réponses pour la question 51 (Story)
            [
                'question_id' => 51,
                'answerText' => 'Ben Solo (Kylo Ren)',
                'isCorrect' => true,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Luke Skywalker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],

            // Réponses pour la question 52 (Story)
            [
                'question_id' => 52,
                'answerText' => 'Le Premier Ordre',
                'isCorrect' => true,
            ],
            [
                'question_id' => 52,
                'answerText' => 'La Résistance',
                'isCorrect' => false,
            ],
            [
                'question_id' => 52,
                'answerText' => 'Les Chevaliers de Ren',
                'isCorrect' => false,
            ],
            [
                'question_id' => 52,
                'answerText' => 'Les Hutts',
                'isCorrect' => false,
            ],

            // Réponses pour la question 53 (Story)
            [
                'question_id' => 53,
                'answerText' => 'Darth Sidious ',
                'isCorrect' => true,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],

            // Réponses pour la question 54 (Universe)
            [
                'question_id' => 54,
                'answerText' => 'Mace Windu',
                'isCorrect' => true,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Ki-Adi-Mundi',
                'isCorrect' => false,
            ],
            // Réponses pour la question 55 (Universe)
            [
                'question_id' => 55,
                'answerText' => 'Executor',
                'isCorrect' => true,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Imperial Star Destroyer',
                'isCorrect' => false,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Devastator',
                'isCorrect' => false,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Eclipse',
                'isCorrect' => false,
            ],

            // Réponses pour la question 56 (Universe)
            [
                'question_id' => 56,
                'answerText' => 'Theed',
                'isCorrect' => true,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Coruscant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Gungan City',
                'isCorrect' => false,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Naboo City',
                'isCorrect' => false,
            ],

            // Réponses pour la question 57 (Universe)
            [
                'question_id' => 57,
                'answerText' => 'Ordre 66',
                'isCorrect' => true,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Protocole 17',
                'isCorrect' => false,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Directive Alpha',
                'isCorrect' => false,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Code 42',
                'isCorrect' => false,
            ],

            // Réponses pour la question 58 (Universe)
            [
                'question_id' => 58,
                'answerText' => 'Le Cartel de la Passe',
                'isCorrect' => true,
            ],
            [
                'question_id' => 58,
                'answerText' => 'La Guilde des Chasseurs de Primes',
                'isCorrect' => false,
            ],
            [
                'question_id' => 58,
                'answerText' => 'Les Hutts',
                'isCorrect' => false,
            ],
            [
                'question_id' => 58,
                'answerText' => 'Le Syndicat des Criminels',
                'isCorrect' => false,
            ],

            // Réponses pour la question 59 (Universe)
            [
                'question_id' => 59,
                'answerText' => 'Darth',
                'isCorrect' => true,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Héros des Sables',
                'isCorrect' => false,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Tueur de Tuskens',
                'isCorrect' => false,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Ani',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'La race de Yoda est appelée les "Yoda\'s species".',
                'isCorrect' => true,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Kubaz',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Trandoshan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Rodian',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Mon Calamari',
                'isCorrect' => false,
            ],

            // Réponses pour la question 61 (Universe)
            [
                'question_id' => 61,
                'answerText' => 'Kashyyyk est la planète d\'origine des Wookiees, dont Chewbacca est originaire.',
                'isCorrect' => true,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Endor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Dagobah',
                'isCorrect' => false,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Tatooine',
                'isCorrect' => false,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Naboo',
                'isCorrect' => false,
            ],
            // Réponses pour la question 62 (Universe)
            [
                'question_id' => 62,
                'answerText' => 'Le protagoniste de la série "The Mandalorian" est Din Djarin.',
                'isCorrect' => true,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Boba Fett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Jango Fett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Cad Bane',
                'isCorrect' => false,
            ],

            // Réponses pour la question 63 (Universe)
            [
                'question_id' => 63,
                'answerText' => 'Darth Bane a élaboré le plan connu sous le nom de "Règle des Deux" pour maintenir la domination Sith.',
                'isCorrect' => true,
            ],
            [
                'question_id' => 63,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 63,
                'answerText' => 'Darth Plagueis',
                'isCorrect' => false,
            ],
            [
                'question_id' => 63,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            // Réponses pour la question 64 (Characters)
            [
                'question_id' => 64,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => true,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],

            // Réponses pour la question 65 (Characters)
            [
                'question_id' => 65,
                'answerText' => 'Darth Bane',
                'isCorrect' => true,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],

            // Réponses pour la question 66 (Characters)
            [
                'question_id' => 66,
                'answerText' => 'Darth Plagueis',
                'isCorrect' => true,
            ],
            [
                'question_id' => 66,
                'answerText' => 'Asajj Ventress',
                'isCorrect' => false,
            ],
            [
                'question_id' => 66,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 66,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],

            // Réponses pour la question 67 (Characters)
            [
                'question_id' => 67,
                'answerText' => 'Jango Fett',
                'isCorrect' => true,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Cad Bane',
                'isCorrect' => false,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Boba Fett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Zam Wesell',
                'isCorrect' => false,
            ],

            // Réponses pour la question 68 (Characters)
            [
                'question_id' => 68,
                'answerText' => 'Shaak Ti',
                'isCorrect' => true,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Aayla Secura',
                'isCorrect' => false,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Ki-Adi-Mundi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Plo Koon',
                'isCorrect' => false,
            ],
            // Réponses pour la question 69 (Characters)
            [
                'question_id' => 69,
                'answerText' => 'Admiral Ackbar',
                'isCorrect' => true,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Mon Mothma',
                'isCorrect' => false,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Wedge Antilles',
                'isCorrect' => false,
            ],
            [
                'question_id' => 69,
                'answerText' => 'General Dodonna',
                'isCorrect' => false,
            ],

            // Réponses pour la question 70 (Characters)
            [
                'question_id' => 70,
                'answerText' => 'Mara Jade',
                'isCorrect' => true,
            ],
            [
                'question_id' => 70,
                'answerText' => 'Kyle Katarn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 70,
                'answerText' => 'Corran Horn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 70,
                'answerText' => 'Jaina Solo',
                'isCorrect' => false,
            ],

            // Réponses pour la question 71 (Characters)
            [
                'question_id' => 71,
                'answerText' => 'Darth Revan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Darth Malak',
                'isCorrect' => false,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Darth Nihilus',
                'isCorrect' => false,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Darth Sion',
                'isCorrect' => false,
            ],

            // Réponses pour la question 72 (Characters)
            [
                'question_id' => 72,
                'answerText' => 'K-2SO',
                'isCorrect' => true,
            ],
            [
                'question_id' => 72,
                'answerText' => 'IG-88',
                'isCorrect' => false,
            ],
            [
                'question_id' => 72,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],
            [
                'question_id' => 72,
                'answerText' => 'R2-D2',
                'isCorrect' => false,
            ],

            // Réponses pour la question 73 (Characters)
            [
                'question_id' => 73,
                'answerText' => 'Jabba the Hutt',
                'isCorrect' => true,
            ],
            [
                'question_id' => 73,
                'answerText' => 'Bib Fortuna',
                'isCorrect' => false,
            ],
            [
                'question_id' => 73,
                'answerText' => 'Greedo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 73,
                'answerText' => 'Sebulba',
                'isCorrect' => false,
            ],
            // Réponses pour la question 74 (Story)
            [
                'question_id' => 74,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            // Réponses pour la question 75 (Story)
            [
                'question_id' => 75,
                'answerText' => 'Boba Fett',
                'isCorrect' => true,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Darth Vader',
                'isCorrect' => false,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Emperor Palpatine',
                'isCorrect' => false,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Jabba the Hutt',
                'isCorrect' => false,
            ],

            // Réponses pour la question 76 (Story)
            [
                'question_id' => 76,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 76,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 76,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 76,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],

            // Réponses pour la question 77 (Story)
            [
                'question_id' => 77,
                'answerText' => 'Luke Skywalker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 77,
                'answerText' => 'Han Solo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 77,
                'answerText' => 'Leia Organa',
                'isCorrect' => false,
            ],
            [
                'question_id' => 77,
                'answerText' => 'Chewbacca',
                'isCorrect' => false,
            ],

            // Réponses pour la question 78 (Story)
            [
                'question_id' => 78,
                'answerText' => 'Darth Vader',
                'isCorrect' => true,
            ],
            [
                'question_id' => 78,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 78,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 78,
                'answerText' => 'General Grievous',
                'isCorrect' => false,
            ],

            // Réponses pour la question 79 (Story)
            [
                'question_id' => 79,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 79,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 79,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 79,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            // Réponses pour la question 80 (Story)
            [
                'question_id' => 80,
                'answerText' => 'Ben Solo (Kylo Ren)',
                'isCorrect' => true,
            ],
            [
                'question_id' => 80,
                'answerText' => 'Finn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 80,
                'answerText' => 'Poe Dameron',
                'isCorrect' => false,
            ],
            [
                'question_id' => 80,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],

            // Réponses pour la question 81 (Story)
            [
                'question_id' => 81,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 81,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 81,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 81,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            // Réponses pour la question 82 (Story)
            [
                'question_id' => 82,
                'answerText' => 'Yoda',
                'isCorrect' => true,
            ],
            [
                'question_id' => 82,
                'answerText' => 'Chewbacca',
                'isCorrect' => false,
            ],
            [
                'question_id' => 82,
                'answerText' => 'Han Solo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 82,
                'answerText' => 'Leia Organa',
                'isCorrect' => false,
            ],

            // Réponses pour la question 83 (Story)
            [
                'question_id' => 83,
                'answerText' => 'Darth Plagueis',
                'isCorrect' => true,
            ],
            [
                'question_id' => 83,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 83,
                'answerText' => 'Darth Vader',
                'isCorrect' => false,
            ],
            [
                'question_id' => 83,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],


            //basket

            [
                'question_id' => 84,
                'answerText' => '1891',
                'isCorrect' => true,
            ],
            [
                'question_id' => 84,
                'answerText' => '1900',
                'isCorrect' => false,
            ],
            [
                'question_id' => 84,
                'answerText' => '1920',
                'isCorrect' => false,
            ],
            [
                'question_id' => 84,
                'answerText' => '1950',
                'isCorrect' => false,
            ],

            [
                'question_id' => 85,
                'answerText' => 'James Naismith',
                'isCorrect' => true,
            ],
            [
                'question_id' => 85,
                'answerText' => 'Michael Jordan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 85,
                'answerText' => 'Kobe Bryant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 85,
                'answerText' => 'LeBron James',
                'isCorrect' => false,
            ],

            [
                'question_id' => 86,
                'answerText' => 'Springfield, Massachusetts, USA',
                'isCorrect' => true,
            ],
            [
                'question_id' => 86,
                'answerText' => 'New York City, New York, USA',
                'isCorrect' => false,
            ],
            [
                'question_id' => 86,
                'answerText' => 'Chicago, Illinois, USA',
                'isCorrect' => false,
            ],
            [
                'question_id' => 86,
                'answerText' => 'Los Angeles, California, USA',
                'isCorrect' => false,
            ],

            [
                'question_id' => 87,
                'answerText' => '1936',
                'isCorrect' => true,
            ],
            [
                'question_id' => 87,
                'answerText' => '1900',
                'isCorrect' => false,
            ],
            [
                'question_id' => 87,
                'answerText' => '1960',
                'isCorrect' => false,
            ],
            [
                'question_id' => 87,
                'answerText' => '1980',
                'isCorrect' => false,
            ],

            [
                'question_id' => 88,
                'answerText' => 'Le terme provient du fait que le premier panier était un panier de pêches.',
                'isCorrect' => true,
            ],
            [
                'question_id' => 88,
                'answerText' => 'Il a été inventé par un joueur nommé Bask et son ballon avait une forme particulière.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 88,
                'answerText' => 'Cela vient de la hauteur du panier qui était initialement très basse.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 88,
                'answerText' => 'Le nom est inspiré d\'un joueur de l\'équipe nationale de basket-ball.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 89,
                'answerText' => 'Michael Jordan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 89,
                'answerText' => 'LeBron James',
                'isCorrect' => false,
            ],
            [
                'question_id' => 89,
                'answerText' => 'Kobe Bryant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 89,
                'answerText' => 'Shaquille O\'Neal',
                'isCorrect' => false,
            ],

            [
                'question_id' => 90,
                'answerText' => 'Kareem Abdul-Jabbar',
                'isCorrect' => true,
            ],
            [
                'question_id' => 90,
                'answerText' => 'Michael Jordan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 90,
                'answerText' => 'LeBron James',
                'isCorrect' => false,
            ],
            [
                'question_id' => 90,
                'answerText' => 'Magic Johnson',
                'isCorrect' => false,
            ],

            [
                'question_id' => 91,
                'answerText' => 'Wilt Chamberlain',
                'isCorrect' => true,
            ],
            [
                'question_id' => 91,
                'answerText' => 'Kobe Bryant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 91,
                'answerText' => 'Michael Jordan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 91,
                'answerText' => 'LeBron James',
                'isCorrect' => false,
            ],

            [
                'question_id' => 92,
                'answerText' => 'Karl Malone',
                'isCorrect' => true,
            ],
            [
                'question_id' => 92,
                'answerText' => 'Tim Duncan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 92,
                'answerText' => 'Kevin Garnett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 92,
                'answerText' => 'Hakeem Olajuwon',
                'isCorrect' => false,
            ],

            [
                'question_id' => 93,
                'answerText' => 'Allen Iverson',
                'isCorrect' => true,
            ],
            [
                'question_id' => 93,
                'answerText' => 'Dwyane Wade',
                'isCorrect' => false,
            ],
            [
                'question_id' => 93,
                'answerText' => 'Stephon Marbury',
                'isCorrect' => false,
            ],
            [
                'question_id' => 93,
                'answerText' => 'Chris Paul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 94,
                'answerText' => 'Boston Celtics',
                'isCorrect' => true,
            ],
            [
                'question_id' => 94,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 94,
                'answerText' => 'Chicago Bulls',
                'isCorrect' => false,
            ],
            [
                'question_id' => 94,
                'answerText' => 'Golden State Warriors',
                'isCorrect' => false,
            ],

            [
                'question_id' => 95,
                'answerText' => 'Golden State Warriors',
                'isCorrect' => true,
            ],
            [
                'question_id' => 95,
                'answerText' => 'Chicago Bulls',
                'isCorrect' => false,
            ],
            [
                'question_id' => 95,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 95,
                'answerText' => 'Miami Heat',
                'isCorrect' => false,
            ],

            [
                'question_id' => 96,
                'answerText' => 'Milwaukee Bucks',
                'isCorrect' => true,
            ],
            [
                'question_id' => 96,
                'answerText' => 'Miami Heat',
                'isCorrect' => false,
            ],
            [
                'question_id' => 96,
                'answerText' => 'Philadelphia 76ers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 96,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],

            [
                'question_id' => 97,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => true,
            ],
            [
                'question_id' => 97,
                'answerText' => 'Golden State Warriors',
                'isCorrect' => false,
            ],
            [
                'question_id' => 97,
                'answerText' => 'Chicago Bulls',
                'isCorrect' => false,
            ],
            [
                'question_id' => 97,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],

            [
                'question_id' => 98,
                'answerText' => 'Dallas Mavericks',
                'isCorrect' => true,
            ],
            [
                'question_id' => 98,
                'answerText' => 'Houston Rockets',
                'isCorrect' => false,
            ],
            [
                'question_id' => 98,
                'answerText' => 'San Antonio Spurs',
                'isCorrect' => false,
            ],
            [
                'question_id' => 98,
                'answerText' => 'Memphis Grizzlies',
                'isCorrect' => false,
            ],
            [
                'question_id' => 99,
                'answerText' => 'Le décret Title IX en 1972',
                'isCorrect' => true,
            ],
            [
                'question_id' => 99,
                'answerText' => 'La création de la WNBA en 1996',
                'isCorrect' => false,
            ],
            [
                'question_id' => 99,
                'answerText' => 'Les Jeux olympiques de 1984',
                'isCorrect' => false,
            ],
            [
                'question_id' => 99,
                'answerText' => 'La première Coupe du monde féminine en 1953',
                'isCorrect' => false,
            ],

            [
                'question_id' => 100,
                'answerText' => 'États-Unis',
                'isCorrect' => true,
            ],
            [
                'question_id' => 100,
                'answerText' => 'Soviet Union',
                'isCorrect' => false,
            ],
            [
                'question_id' => 100,
                'answerText' => 'Australia',
                'isCorrect' => false,
            ],
            [
                'question_id' => 100,
                'answerText' => 'Brazil',
                'isCorrect' => false,
            ],

            [
                'question_id' => 101,
                'answerText' => 'Wilt Chamberlain',
                'isCorrect' => true,
            ],
            [
                'question_id' => 101,
                'answerText' => 'Michael Jordan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 101,
                'answerText' => 'Kobe Bryant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 101,
                'answerText' => 'LeBron James',
                'isCorrect' => false,
            ],

            [
                'question_id' => 102,
                'answerText' => '1951',
                'isCorrect' => true,
            ],
            [
                'question_id' => 102,
                'answerText' => '1960',
                'isCorrect' => false,
            ],
            [
                'question_id' => 102,
                'answerText' => '1975',
                'isCorrect' => false,
            ],
            [
                'question_id' => 102,
                'answerText' => '1983',
                'isCorrect' => false,
            ],

            [
                'question_id' => 103,
                'answerText' => 'Minneapolis Lakers',
                'isCorrect' => true,
            ],
            [
                'question_id' => 103,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 103,
                'answerText' => 'New York Knicks',
                'isCorrect' => false,
            ],
            [
                'question_id' => 103,
                'answerText' => 'Philadelphia Warriors',
                'isCorrect' => false,
            ],
            [
                'question_id' => 104,
                'answerText' => '6 fois',
                'isCorrect' => true,
            ],
            [
                'question_id' => 104,
                'answerText' => '4 fois',
                'isCorrect' => false,
            ],
            [
                'question_id' => 104,
                'answerText' => '8 fois',
                'isCorrect' => false,
            ],
            [
                'question_id' => 104,
                'answerText' => '3 fois',
                'isCorrect' => false,
            ],

            [
                'question_id' => 105,
                'answerText' => 'James Harden',
                'isCorrect' => true,
            ],
            [
                'question_id' => 105,
                'answerText' => 'Stephen Curry',
                'isCorrect' => false,
            ],
            [
                'question_id' => 105,
                'answerText' => 'Kawhi Leonard',
                'isCorrect' => false,
            ],
            [
                'question_id' => 105,
                'answerText' => 'Giannis Antetokounmpo',
                'isCorrect' => false,
            ],

            [
                'question_id' => 106,
                'answerText' => 'Gheorghe Mureșan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 106,
                'answerText' => 'Shaquille O\'Neal',
                'isCorrect' => false,
            ],
            [
                'question_id' => 106,
                'answerText' => 'Yao Ming',
                'isCorrect' => false,
            ],
            [
                'question_id' => 106,
                'answerText' => 'Manute Bol',
                'isCorrect' => false,
            ],

            [
                'question_id' => 107,
                'answerText' => 'Wilt Chamberlain',
                'isCorrect' => true,
            ],
            [
                'question_id' => 107,
                'answerText' => 'Bill Russell',
                'isCorrect' => false,
            ],
            [
                'question_id' => 107,
                'answerText' => 'Kareem Abdul-Jabbar',
                'isCorrect' => false,
            ],
            [
                'question_id' => 107,
                'answerText' => 'Dennis Rodman',
                'isCorrect' => false,
            ],

            [
                'question_id' => 108,
                'answerText' => 'Anthony Edwards',
                'isCorrect' => true,
            ],
            [
                'question_id' => 108,
                'answerText' => 'LaMelo Ball',
                'isCorrect' => false,
            ],
            [
                'question_id' => 108,
                'answerText' => 'James Wiseman',
                'isCorrect' => false,
            ],
            [
                'question_id' => 108,
                'answerText' => 'Obi Toppin',
                'isCorrect' => false,
            ],


            // Niveau 2: Intermédiaire - Équipes

            [
                'question_id' => 109,
                'answerText' => 'Philadelphia 76ers',
                'isCorrect' => true,
            ],
            [
                'question_id' => 109,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 109,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 109,
                'answerText' => 'Toronto Raptors',
                'isCorrect' => false,
            ],

            [
                'question_id' => 110,
                'answerText' => 'Milwaukee Bucks',
                'isCorrect' => true,
            ],
            [
                'question_id' => 110,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 110,
                'answerText' => 'Golden State Warriors',
                'isCorrect' => false,
            ],
            [
                'question_id' => 110,
                'answerText' => 'Miami Heat',
                'isCorrect' => false,
            ],

            [
                'question_id' => 111,
                'answerText' => 'San Antonio Spurs',
                'isCorrect' => true,
            ],
            [
                'question_id' => 111,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 111,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 111,
                'answerText' => 'Chicago Bulls',
                'isCorrect' => false,
            ],

            [
                'question_id' => 112,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => true,
            ],
            [
                'question_id' => 112,
                'answerText' => 'Golden State Warriors',
                'isCorrect' => false,
            ],
            [
                'question_id' => 112,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 112,
                'answerText' => 'Chicago Bulls',
                'isCorrect' => false,
            ],

            [
                'question_id' => 113,
                'answerText' => 'Minneapolis Lakers',
                'isCorrect' => true,
            ],
            [
                'question_id' => 113,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 113,
                'answerText' => 'Philadelphia Warriors',
                'isCorrect' => false,
            ],
            [
                'question_id' => 113,
                'answerText' => 'St. Louis Hawks',
                'isCorrect' => false,
            ],
            [
                'question_id' => 114,
                'answerText' => 'Phil Jackson',
                'isCorrect' => true,
            ],
            [
                'question_id' => 114,
                'answerText' => 'Red Auerbach',
                'isCorrect' => false,
            ],
            [
                'question_id' => 114,
                'answerText' => 'Gregg Popovich',
                'isCorrect' => false,
            ],
            [
                'question_id' => 114,
                'answerText' => 'Pat Riley',
                'isCorrect' => false,
            ],

            [
                'question_id' => 115,
                'answerText' => 'Los Angeles Lakers (1971-1972)',
                'isCorrect' => true,
            ],
            [
                'question_id' => 115,
                'answerText' => 'Golden State Warriors (2015-2016)',
                'isCorrect' => false,
            ],
            [
                'question_id' => 115,
                'answerText' => 'Chicago Bulls (1995-1996)',
                'isCorrect' => false,
            ],
            [
                'question_id' => 115,
                'answerText' => 'Miami Heat (2012-2013)',
                'isCorrect' => false,
            ],

            [
                'question_id' => 116,
                'answerText' => 'LeBron James',
                'isCorrect' => true,
            ],
            [
                'question_id' => 116,
                'answerText' => 'Kobe Bryant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 116,
                'answerText' => 'Michael Jordan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 116,
                'answerText' => 'Magic Johnson',
                'isCorrect' => false,
            ],

            [
                'question_id' => 117,
                'answerText' => 'Bill Russell',
                'isCorrect' => true,
            ],
            [
                'question_id' => 117,
                'answerText' => 'Kareem Abdul-Jabbar',
                'isCorrect' => false,
            ],
            [
                'question_id' => 117,
                'answerText' => 'Wilt Chamberlain',
                'isCorrect' => false,
            ],
            [
                'question_id' => 117,
                'answerText' => 'Shaquille O\'Neal',
                'isCorrect' => false,
            ],

            [
                'question_id' => 118,
                'answerText' => 'Golden State Warriors (2015-2016)',
                'isCorrect' => true,
            ],
            [
                'question_id' => 118,
                'answerText' => 'Chicago Bulls (1995-1996)',
                'isCorrect' => false,
            ],
            [
                'question_id' => 118,
                'answerText' => 'Los Angeles Lakers (1971-1972)',
                'isCorrect' => false,
            ],
            [
                'question_id' => 118,
                'answerText' => 'Boston Celtics (2007-2008)',
                'isCorrect' => false,
            ],


            // Niveau 3 : Avancé - Joueurs

            [
                'question_id' => 119,
                'answerText' => 'Oscar Robertson',
                'isCorrect' => true,
            ],
            [
                'question_id' => 119,
                'answerText' => 'Magic Johnson',
                'isCorrect' => false,
            ],
            [
                'question_id' => 119,
                'answerText' => 'Russell Westbrook',
                'isCorrect' => false,
            ],
            [
                'question_id' => 119,
                'answerText' => 'LeBron James',
                'isCorrect' => false,
            ],

            [
                'question_id' => 120,
                'answerText' => 'Dwight Howard',
                'isCorrect' => true,
            ],
            [
                'question_id' => 120,
                'answerText' => 'Ben Wallace',
                'isCorrect' => false,
            ],
            [
                'question_id' => 120,
                'answerText' => 'Rudy Gobert',
                'isCorrect' => false,
            ],
            [
                'question_id' => 120,
                'answerText' => 'Hakeem Olajuwon',
                'isCorrect' => false,
            ],

            [
                'question_id' => 121,
                'answerText' => '5 fois',
                'isCorrect' => true,
            ],
            [
                'question_id' => 121,
                'answerText' => '8 fois',
                'isCorrect' => false,
            ],
            [
                'question_id' => 121,
                'answerText' => '3 fois',
                'isCorrect' => false,
            ],
            [
                'question_id' => 121,
                'answerText' => '7 fois',
                'isCorrect' => false,
            ],

            [
                'question_id' => 122,
                'answerText' => 'Jerry West',
                'isCorrect' => true,
            ],
            [
                'question_id' => 122,
                'answerText' => 'Elgin Baylor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 122,
                'answerText' => 'Shaquille O\'Neal',
                'isCorrect' => false,
            ],
            [
                'question_id' => 122,
                'answerText' => 'Tim Duncan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 123,
                'answerText' => 'Detroit Pistons',
                'isCorrect' => true,
            ],
            [
                'question_id' => 123,
                'answerText' => 'Chicago Bulls',
                'isCorrect' => false,
            ],
            [
                'question_id' => 123,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 123,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],

            [
                'question_id' => 124,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => true,
            ],
            [
                'question_id' => 124,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 124,
                'answerText' => 'Detroit Pistons',
                'isCorrect' => false,
            ],
            [
                'question_id' => 124,
                'answerText' => 'Philadelphia 76ers',
                'isCorrect' => false,
            ],

            [
                'question_id' => 125,
                'answerText' => 'Chicago Bulls',
                'isCorrect' => true,
            ],
            [
                'question_id' => 125,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 125,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 125,
                'answerText' => 'Miami Heat',
                'isCorrect' => false,
            ],

            [
                'question_id' => 126,
                'answerText' => 'San Antonio Spurs',
                'isCorrect' => true,
            ],
            [
                'question_id' => 126,
                'answerText' => 'Los Angeles Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 126,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 126,
                'answerText' => 'Miami Heat',
                'isCorrect' => false,
            ],

            [
                'question_id' => 127,
                'answerText' => 'Philadelphia 76ers',
                'isCorrect' => true,
            ],
            [
                'question_id' => 127,
                'answerText' => 'Minneapolis Lakers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 127,
                'answerText' => 'Boston Celtics',
                'isCorrect' => false,
            ],
            [
                'question_id' => 127,
                'answerText' => 'St. Louis Hawks',
                'isCorrect' => false,
            ],



            /// despe




        ];

        // Create answers
        foreach ($answersData as $answer) {
            Answer::create([
                'question_id' => $answer['question_id'],
                'answerText' => $answer['answerText'],
                'isCorrect' => $answer['isCorrect'],
            ]);
        }
    }
}

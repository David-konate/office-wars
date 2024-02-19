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
            // Level 1 Questions
            // Universe (Level 1)
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

            // Character (Level 1)
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

            // Story (Level 1)
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

            [
                'question_id' => 4,
                'answerText' => 'Coruscant',
                'isCorrect' => true,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Kashyyyk',
                'isCorrect' => false,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Alderaan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Mustafar',
                'isCorrect' => false,
            ],

            // Character (Level 1)
            [
                'question_id' => 5,
                'answerText' => 'Besalisk',
                'isCorrect' => true,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Trandoshan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Rodian',
                'isCorrect' => false,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Duros',
                'isCorrect' => false,
            ],
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
            [
                'question_id' => 7,
                'answerText' => 'Alderaan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Tatooine',
                'isCorrect' => false,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Coruscant',
                'isCorrect' => false,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Endor',
                'isCorrect' => false,
            ],

            // Character (Level 1)
            [
                'question_id' => 8,
                'answerText' => 'Galactic Republic',
                'isCorrect' => true,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Jedi Order',
                'isCorrect' => false,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Sith Empire',
                'isCorrect' => false,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Trade Federation',
                'isCorrect' => false,
            ],

            // Story (Level 1)
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
                'answerText' => 'Alderaan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 10,
                'answerText' => 'Mos Eisley',
                'isCorrect' => true,
            ],
            [
                'question_id' => 10,
                'answerText' => 'Mos Espa',
                'isCorrect' => false,
            ],
            [
                'question_id' => 10,
                'answerText' => 'Jabba\'s Palace',
                'isCorrect' => false,
            ],
            [
                'question_id' => 10,
                'answerText' => 'Tatooine Outpost',
                'isCorrect' => false,
            ],
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
                'answerText' => 'Boba Fett',
                'isCorrect' => false,
            ],

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

            [
                'question_id' => 13,
                'answerText' => 'Yoda',
                'isCorrect' => true,
            ],
            [
                'question_id' => 13,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 13,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 13,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],

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
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],

            [
                'question_id' => 15,
                'answerText' => 'Boba Fett',
                'isCorrect' => true,
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
            [
                'question_id' => 15,
                'answerText' => 'IG-88',
                'isCorrect' => false,
            ],

            [
                'question_id' => 16,
                'answerText' => 'Darth Vader',
                'isCorrect' => true,
            ],
            [
                'question_id' => 16,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
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
                'question_id' => 17,
                'answerText' => 'Episode III: La Revanche des Sith',
                'isCorrect' => true,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Episode II: L\'Attaque des Clones',
                'isCorrect' => false,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Episode I: La Menace Fantôme',
                'isCorrect' => false,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Episode IV: Un Nouvel Espoir',
                'isCorrect' => false,
            ],

            [
                'question_id' => 18,
                'answerText' => 'Yoda',
                'isCorrect' => true,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],

            [
                'question_id' => 19,
                'answerText' => 'Supreme Leader Snoke',
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

            [
                'question_id' => 20,
                'answerText' => '11',
                'isCorrect' => true,
            ],
            [
                'question_id' => 20,
                'answerText' => '12',
                'isCorrect' => false,
            ],
            [
                'question_id' => 20,
                'answerText' => '10',
                'isCorrect' => false,
            ],
            [
                'question_id' => 20,
                'answerText' => '9',
                'isCorrect' => false,
            ],
            [
                'question_id' => 21,
                'answerText' => 'Un Nouvel Espoir',
                'isCorrect' => true,
            ],
            [
                'question_id' => 21,
                'answerText' => 'L\'Empire contre-attaque',
                'isCorrect' => false,
            ],
            [
                'question_id' => 21,
                'answerText' => 'Le Retour du Jedi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 21,
                'answerText' => 'La Menace Fantôme',
                'isCorrect' => false,
            ],

            [
                'question_id' => 22,
                'answerText' => 'Kylo Ren',
                'isCorrect' => true,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Snoke',
                'isCorrect' => false,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Hux',
                'isCorrect' => false,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Phasma',
                'isCorrect' => false,
            ],

            [
                'question_id' => 23,
                'answerText' => 'Géonosis',
                'isCorrect' => true,
            ],
            [
                'question_id' => 23,
                'answerText' => 'Endor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 23,
                'answerText' => 'Hoth',
                'isCorrect' => false,
            ],
            [
                'question_id' => 23,
                'answerText' => 'Coruscant',
                'isCorrect' => false,
            ],

            [
                'question_id' => 24,
                'answerText' => 'Yoda',
                'isCorrect' => true,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],

            [
                'question_id' => 25,
                'answerText' => 'Leia Organa',
                'isCorrect' => true,
            ],
            [
                'question_id' => 25,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],
            [
                'question_id' => 25,
                'answerText' => 'Mon Mothma',
                'isCorrect' => false,
            ],
            [
                'question_id' => 25,
                'answerText' => 'Padmé Amidala',
                'isCorrect' => false,
            ],

            [
                'question_id' => 26,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],

            [
                'question_id' => 27,
                'answerText' => 'Starkiller Base',
                'isCorrect' => true,
            ],
            [
                'question_id' => 27,
                'answerText' => 'Death Star',
                'isCorrect' => false,
            ],
            [
                'question_id' => 27,
                'answerText' => 'Hoth Base',
                'isCorrect' => false,
            ],
            [
                'question_id' => 27,
                'answerText' => 'Cloud City',
                'isCorrect' => false,
            ],

            [
                'question_id' => 28,
                'answerText' => 'K-2SO',
                'isCorrect' => true,
            ],
            [
                'question_id' => 28,
                'answerText' => 'BB-8',
                'isCorrect' => false,
            ],
            [
                'question_id' => 28,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],
            [
                'question_id' => 28,
                'answerText' => 'R2-D2',
                'isCorrect' => false,
            ],

            [
                'question_id' => 29,
                'answerText' => 'Din Djarin',
                'isCorrect' => true,
            ],
            [
                'question_id' => 29,
                'answerText' => 'Boba Fett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 29,
                'answerText' => 'Cara Dune',
                'isCorrect' => false,
            ],
            [
                'question_id' => 29,
                'answerText' => 'Greef Karga',
                'isCorrect' => false,
            ],

            [
                'question_id' => 30,
                'answerText' => 'Captain Rex',
                'isCorrect' => true,
            ],
            [
                'question_id' => 30,
                'answerText' => 'Commander Cody',
                'isCorrect' => false,
            ],
            [
                'question_id' => 30,
                'answerText' => 'Echo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 30,
                'answerText' => 'Fives',
                'isCorrect' => false,
            ],
            [
                'question_id' => 31,
                'answerText' => 'Mon Cala',
                'isCorrect' => true,
            ],
            [
                'question_id' => 31,
                'answerText' => 'Kashyyyk',
                'isCorrect' => false,
            ],
            [
                'question_id' => 31,
                'answerText' => 'Naboo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 31,
                'answerText' => 'Tatooine',
                'isCorrect' => false,
            ],

            [
                'question_id' => 32,
                'answerText' => 'Crait',
                'isCorrect' => true,
            ],
            [
                'question_id' => 32,
                'answerText' => 'Endor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 32,
                'answerText' => 'Hoth',
                'isCorrect' => false,
            ],
            [
                'question_id' => 32,
                'answerText' => 'Jakku',
                'isCorrect' => false,
            ],

            [
                'question_id' => 33,
                'answerText' => 'Ewoks',
                'isCorrect' => true,
            ],
            [
                'question_id' => 33,
                'answerText' => 'Wookiees',
                'isCorrect' => false,
            ],
            [
                'question_id' => 33,
                'answerText' => 'Mon Calamari',
                'isCorrect' => false,
            ],
            [
                'question_id' => 33,
                'answerText' => 'Rodians',
                'isCorrect' => false,
            ],

            [
                'question_id' => 34,
                'answerText' => 'Summa-verminoth',
                'isCorrect' => true,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Sando Aqua Monster',
                'isCorrect' => false,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Dianoga',
                'isCorrect' => false,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Exogorth',
                'isCorrect' => false,
            ],

            [
                'question_id' => 35,
                'answerText' => 'Trandoshan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 35,
                'answerText' => 'Rodian',
                'isCorrect' => false,
            ],
            [
                'question_id' => 35,
                'answerText' => 'Weequay',
                'isCorrect' => false,
            ],
            [
                'question_id' => 35,
                'answerText' => 'Twi\'lek',
                'isCorrect' => false,
            ],

            [
                'question_id' => 36,
                'answerText' => 'IG-100 MagnaGuard',
                'isCorrect' => true,
            ],
            [
                'question_id' => 36,
                'answerText' => 'BX-series droid commando',
                'isCorrect' => false,
            ],
            [
                'question_id' => 36,
                'answerText' => 'AAT battle droid',
                'isCorrect' => false,
            ],
            [
                'question_id' => 36,
                'answerText' => 'Droideka',
                'isCorrect' => false,
            ],

            [
                'question_id' => 37,
                'answerText' => 'Darth Plagueis',
                'isCorrect' => true,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Darth Tyranus',
                'isCorrect' => false,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Darth Bane',
                'isCorrect' => false,
            ],

            [
                'question_id' => 38,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 38,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 38,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],
            [
                'question_id' => 38,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],

            [
                'question_id' => 39,
                'answerText' => 'X-wing Starfighter',
                'isCorrect' => true,
            ],
            [
                'question_id' => 39,
                'answerText' => 'Millennium Falcon',
                'isCorrect' => false,
            ],
            [
                'question_id' => 39,
                'answerText' => 'TIE Fighter',
                'isCorrect' => false,
            ],
            [
                'question_id' => 39,
                'answerText' => 'A-wing Starfighter',
                'isCorrect' => false,
            ],

            [
                'question_id' => 40,
                'answerText' => 'Mace Windu',
                'isCorrect' => true,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Kit Fisto',
                'isCorrect' => false,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Plo Koon',
                'isCorrect' => false,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Ki-Adi-Mundi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 41,
                'answerText' => 'Han Solo',
                'isCorrect' => true,
            ],
            [
                'question_id' => 41,
                'answerText' => 'Chewbacca',
                'isCorrect' => false,
            ],
            [
                'question_id' => 41,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 41,
                'answerText' => 'Lando Calrissian',
                'isCorrect' => false,
            ],

            [
                'question_id' => 42,
                'answerText' => 'Chewbacca',
                'isCorrect' => true,
            ],
            [
                'question_id' => 42,
                'answerText' => 'Han Solo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 42,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],
            [
                'question_id' => 42,
                'answerText' => 'R2-D2',
                'isCorrect' => false,
            ],

            [
                'question_id' => 43,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            [
                'question_id' => 44,
                'answerText' => 'Leia Organa',
                'isCorrect' => true,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Padmé Amidala',
                'isCorrect' => false,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => false,
            ],

            [
                'question_id' => 45,
                'answerText' => 'Boba Fett',
                'isCorrect' => true,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Jango Fett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 45,
                'answerText' => 'IG-88',
                'isCorrect' => false,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Dengar',
                'isCorrect' => false,
            ],

            [
                'question_id' => 46,
                'answerText' => 'Asajj Ventress',
                'isCorrect' => true,
            ],
            [
                'question_id' => 46,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 46,
                'answerText' => 'Savage Opress',
                'isCorrect' => false,
            ],
            [
                'question_id' => 46,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],

            [
                'question_id' => 47,
                'answerText' => 'Darth Maul',
                'isCorrect' => true,
            ],
            [
                'question_id' => 47,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 47,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 47,
                'answerText' => 'Darth Vader',
                'isCorrect' => false,
            ],

            [
                'question_id' => 48,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => true,
            ],
            [
                'question_id' => 48,
                'answerText' => 'Barriss Offee',
                'isCorrect' => false,
            ],
            [
                'question_id' => 48,
                'answerText' => 'Shaak Ti',
                'isCorrect' => false,
            ],
            [
                'question_id' => 48,
                'answerText' => 'Luminara Unduli',
                'isCorrect' => false,
            ],

            [
                'question_id' => 49,
                'answerText' => 'Finn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Poe Dameron',
                'isCorrect' => false,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Rose Tico',
                'isCorrect' => false,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],

            [
                'question_id' => 50,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => true,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Kit Fisto',
                'isCorrect' => false,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            // Story (Level 2)
            [
                'question_id' => 51,
                'answerText' => 'Je suis ton père.',
                'isCorrect' => true,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Je suis ton frère.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Je suis ton maître.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Je suis ton ami.',
                'isCorrect' => false,
            ],

            [
                'question_id' => 52,
                'answerText' => 'Ben Solo',
                'isCorrect' => true,
            ],
            [
                'question_id' => 52,
                'answerText' => 'Luke Skywalker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 52,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 52,
                'answerText' => 'Poe Dameron',
                'isCorrect' => false,
            ],

            [
                'question_id' => 53,
                'answerText' => 'Le Premier Ordre',
                'isCorrect' => true,
            ],
            [
                'question_id' => 53,
                'answerText' => 'La Nouvelle République',
                'isCorrect' => false,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Les Chevaliers de Ren',
                'isCorrect' => false,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Les Sith',
                'isCorrect' => false,
            ],

            [
                'question_id' => 54,
                'answerText' => 'Dark Sidious',
                'isCorrect' => true,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            [
                'question_id' => 55,
                'answerText' => 'Mace Windu',
                'isCorrect' => true,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],

            [
                'question_id' => 56,
                'answerText' => 'Savage Opress',
                'isCorrect' => true,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Asajj Ventress',
                'isCorrect' => false,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],

            [
                'question_id' => 57,
                'answerText' => 'Darth Maul',
                'isCorrect' => true,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Darth Vader',
                'isCorrect' => false,
            ],

            [
                'question_id' => 58,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => true,
            ],
            [
                'question_id' => 58,
                'answerText' => 'Barriss Offee',
                'isCorrect' => false,
            ],
            [
                'question_id' => 58,
                'answerText' => 'Shaak Ti',
                'isCorrect' => false,
            ],
            [
                'question_id' => 58,
                'answerText' => 'Luminara Unduli',
                'isCorrect' => false,
            ],

            [
                'question_id' => 59,
                'answerText' => 'Finn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Poe Dameron',
                'isCorrect' => false,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Rose Tico',
                'isCorrect' => false,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],

            [
                'question_id' => 60,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => true,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Kit Fisto',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],

            // Story (Level 2)
            [
                'question_id' => 61,
                'answerText' => 'Il est son père.',
                'isCorrect' => true,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Il est son frère.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Il est son oncle.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Il est son cousin.',
                'isCorrect' => false,
            ],

            [
                'question_id' => 62,
                'answerText' => 'Ben Solo',
                'isCorrect' => true,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Kylo Ren',
                'isCorrect' => false,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Poe Dameron',
                'isCorrect' => false,
            ],

            [
                'question_id' => 63,
                'answerText' => 'La Résistance',
                'isCorrect' => true,
            ],
            [
                'question_id' => 63,
                'answerText' => 'Le Premier Ordre',
                'isCorrect' => false,
            ],
            [
                'question_id' => 63,
                'answerText' => 'Les Sith',
                'isCorrect' => false,
            ],
            [
                'question_id' => 63,
                'answerText' => 'La Nouvelle République',
                'isCorrect' => false,
            ],

            [
                'question_id' => 64,
                'answerText' => 'Dark Sidious',
                'isCorrect' => true,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Darth Vader',
                'isCorrect' => false,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            [
                'question_id' => 66,
                'answerText' => 'Darth Bane',
                'isCorrect' => true,
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
            [
                'question_id' => 66,
                'answerText' => 'Darth Vader',
                'isCorrect' => false,
            ],

            [
                'question_id' => 67,
                'answerText' => 'Darth Zannah',
                'isCorrect' => true,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Asajj Ventress',
                'isCorrect' => false,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Darth Talon',
                'isCorrect' => false,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Darth Plagueis',
                'isCorrect' => false,
            ],

            [
                'question_id' => 68,
                'answerText' => 'Jango Fett',
                'isCorrect' => true,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Boba Fett',
                'isCorrect' => false,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Cad Bane',
                'isCorrect' => false,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Aurra Sing',
                'isCorrect' => false,
            ],

            [
                'question_id' => 69,
                'answerText' => 'Aayla Secura',
                'isCorrect' => true,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Barriss Offee',
                'isCorrect' => false,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Luminara Unduli',
                'isCorrect' => false,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Shaak Ti',
                'isCorrect' => false,
            ],

            [
                'question_id' => 70,
                'answerText' => 'Admiral Ackbar',
                'isCorrect' => true,
            ],
            [
                'question_id' => 70,
                'answerText' => 'Mon Mothma',
                'isCorrect' => false,
            ],
            [
                'question_id' => 70,
                'answerText' => 'Crix Madine',
                'isCorrect' => false,
            ],
            [
                'question_id' => 70,
                'answerText' => 'General Dodonna',
                'isCorrect' => false,
            ],

            [
                'question_id' => 71,
                'answerText' => 'Kyle Katarn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Corran Horn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Kyp Durron',
                'isCorrect' => false,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Mara Jade',
                'isCorrect' => false,
            ],

            [
                'question_id' => 72,
                'answerText' => 'Darth Revan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 72,
                'answerText' => 'Darth Malak',
                'isCorrect' => false,
            ],
            [
                'question_id' => 72,
                'answerText' => 'Darth Sion',
                'isCorrect' => false,
            ],
            [
                'question_id' => 72,
                'answerText' => 'Darth Nihilus',
                'isCorrect' => false,
            ],

            [
                'question_id' => 73,
                'answerText' => 'K-2SO',
                'isCorrect' => true,
            ],
            [
                'question_id' => 73,
                'answerText' => 'C-3PO',
                'isCorrect' => false,
            ],
            [
                'question_id' => 73,
                'answerText' => 'R2-D2',
                'isCorrect' => false,
            ],
            [
                'question_id' => 73,
                'answerText' => 'BB-8',
                'isCorrect' => false,
            ],

            [
                'question_id' => 74,
                'answerText' => 'Jabba le Hutt',
                'isCorrect' => true,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Greedo',
                'isCorrect' => false,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Bib Fortuna',
                'isCorrect' => false,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Sebulba',
                'isCorrect' => false,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            [
                'question_id' => 76,
                'answerText' => 'Boba Fett',
                'isCorrect' => true,
            ],
            [
                'question_id' => 76,
                'answerText' => 'Darth Vader',
                'isCorrect' => false,
            ],
            [
                'question_id' => 76,
                'answerText' => 'Jabba le Hutt',
                'isCorrect' => false,
            ],
            [
                'question_id' => 76,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],

            [
                'question_id' => 77,
                'answerText' => 'Anakin Skywalker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 77,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 77,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],
            [
                'question_id' => 77,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],

            [
                'question_id' => 78,
                'answerText' => 'Luke Skywalker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 78,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],
            [
                'question_id' => 78,
                'answerText' => 'Kylo Ren',
                'isCorrect' => false,
            ],
            [
                'question_id' => 78,
                'answerText' => 'Finn',
                'isCorrect' => false,
            ],

            [
                'question_id' => 79,
                'answerText' => 'Darth Vader',
                'isCorrect' => true,
            ],
            [
                'question_id' => 79,
                'answerText' => 'Darth Sidious',
                'isCorrect' => false,
            ],
            [
                'question_id' => 79,
                'answerText' => 'Darth Maul',
                'isCorrect' => false,
            ],
            [
                'question_id' => 79,
                'answerText' => 'Count Dooku',
                'isCorrect' => false,
            ],

            [
                'question_id' => 80,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => true,
            ],
            [
                'question_id' => 80,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 80,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => false,
            ],
            [
                'question_id' => 80,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],

            [
                'question_id' => 81,
                'answerText' => 'Padmé Amidala',
                'isCorrect' => true,
            ],
            [
                'question_id' => 81,
                'answerText' => 'Leia Organa',
                'isCorrect' => false,
            ],
            [
                'question_id' => 81,
                'answerText' => 'Rey',
                'isCorrect' => false,
            ],
            [
                'question_id' => 81,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => false,
            ],

            [
                'question_id' => 82,
                'answerText' => 'Obi-Wan Kenobi',
                'isCorrect' => true,
            ],
            [
                'question_id' => 82,
                'answerText' => 'Yoda',
                'isCorrect' => false,
            ],
            [
                'question_id' => 82,
                'answerText' => 'Mace Windu',
                'isCorrect' => false,
            ],
            [
                'question_id' => 82,
                'answerText' => 'Qui-Gon Jinn',
                'isCorrect' => false,
            ],

            [
                'question_id' => 83,
                'answerText' => 'Kanan Jarrus',
                'isCorrect' => true,
            ],
            [
                'question_id' => 83,
                'answerText' => 'Ezra Bridger',
                'isCorrect' => false,
            ],
            [
                'question_id' => 83,
                'answerText' => 'Ahsoka Tano',
                'isCorrect' => false,
            ],
            [
                'question_id' => 83,
                'answerText' => 'Quinlan Vos',
                'isCorrect' => false,
            ],

            [
                'question_id' => 84,
                'answerText' => 'Revan',
                'isCorrect' => true,
            ],
            [
                'question_id' => 84,
                'answerText' => 'Malak',
                'isCorrect' => false,
            ],
            [
                'question_id' => 84,
                'answerText' => 'Sion',
                'isCorrect' => false,
            ],
            [
                'question_id' => 84,
                'answerText' => 'Nihilus',
                'isCorrect' => false,
            ],

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

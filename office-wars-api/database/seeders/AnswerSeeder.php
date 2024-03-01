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
                'answerText' => 'Chandler Bing',
                'isCorrect' => true,
            ],
            [
                'question_id' => 1,
                'answerText' => 'Chandler Geller',
                'isCorrect' => false,
            ],
            [
                'question_id' => 1,
                'answerText' => 'Chandler Green',
                'isCorrect' => false,
            ],
            [
                'question_id' => 1,
                'answerText' => 'Chandler Tribbiani',
                'isCorrect' => false,
            ],

            [
                'question_id' => 2,
                'answerText' => 'Chef',
                'isCorrect' => true,
            ],
            [
                'question_id' => 2,
                'answerText' => 'Actrice',
                'isCorrect' => false,
            ],
            [
                'question_id' => 2,
                'answerText' => 'Photographe',
                'isCorrect' => false,
            ],
            [
                'question_id' => 2,
                'answerText' => 'Astronaute',
                'isCorrect' => false,
            ],

            [
                'question_id' => 3,
                'answerText' => 'Statisticien',
                'isCorrect' => true,
            ],
            [
                'question_id' => 3,
                'answerText' => 'Acteur',
                'isCorrect' => false,
            ],
            [
                'question_id' => 3,
                'answerText' => 'Cuisinier',
                'isCorrect' => false,
            ],
            [
                'question_id' => 3,
                'answerText' => 'Pompier',
                'isCorrect' => false,
            ],

            [
                'question_id' => 4,
                'answerText' => 'Géologie',
                'isCorrect' => true,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Astronomie',
                'isCorrect' => false,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Archéologie',
                'isCorrect' => false,
            ],
            [
                'question_id' => 4,
                'answerText' => 'Physique',
                'isCorrect' => false,
            ],
            [
                'question_id' => 5,
                'answerText' => 'I\'ll Be There for You',
                'isCorrect' => true,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Friends Forever',
                'isCorrect' => false,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Central Perk Anthem',
                'isCorrect' => false,
            ],
            [
                'question_id' => 5,
                'answerText' => 'Smelly Cat',
                'isCorrect' => false,
            ],

            [
                'question_id' => 6,
                'answerText' => 'Monica Geller',
                'isCorrect' => true,
            ],
            [
                'question_id' => 6,
                'answerText' => 'Phoebe Buffay',
                'isCorrect' => false,
            ],
            [
                'question_id' => 6,
                'answerText' => 'Joey Tribbiani',
                'isCorrect' => false,
            ],
            [
                'question_id' => 6,
                'answerText' => 'Chandler Bing',
                'isCorrect' => false,
            ],

            [
                'question_id' => 7,
                'answerText' => 'Central Perk',
                'isCorrect' => true,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Java Joe',
                'isCorrect' => false,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Perk Place',
                'isCorrect' => false,
            ],
            [
                'question_id' => 7,
                'answerText' => 'Coffee Central',
                'isCorrect' => false,
            ],

            [
                'question_id' => 8,
                'answerText' => 'Marcel',
                'isCorrect' => true,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Gerald',
                'isCorrect' => false,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Charlie',
                'isCorrect' => false,
            ],
            [
                'question_id' => 8,
                'answerText' => 'Joey Jr.',
                'isCorrect' => false,
            ],

            [
                'question_id' => 9,
                'answerText' => 'Cleaning',
                'isCorrect' => true,
            ],
            [
                'question_id' => 9,
                'answerText' => 'Spiders',
                'isCorrect' => false,
            ],
            [
                'question_id' => 9,
                'answerText' => 'Clowns',
                'isCorrect' => false,
            ],
            [
                'question_id' => 9,
                'answerText' => 'Heights',
                'isCorrect' => false,
            ],

            [
                'question_id' => 10,
                'answerText' => 'David Schwimmer',
                'isCorrect' => true,
            ],
            [
                'question_id' => 138,
                'answerText' => 'Matthew Perry',
                'isCorrect' => false,
            ],
            [
                'question_id' => 138,
                'answerText' => 'Matt LeBlanc',
                'isCorrect' => false,
            ],
            [
                'question_id' => 138,
                'answerText' => 'Courteney Cox',
                'isCorrect' => false,
            ],
            [
                'question_id' => 11,
                'answerText' => 'How you doin\'?',
                'isCorrect' => true,
            ],
            [
                'question_id' => 11,
                'answerText' => 'Hey there, beautiful',
                'isCorrect' => false,
            ],
            [
                'question_id' => 11,
                'answerText' => 'What\'s up, babe?',
                'isCorrect' => false,
            ],
            [
                'question_id' => 11,
                'answerText' => 'Nice to meet you',
                'isCorrect' => false,
            ],

            [
                'question_id' => 12,
                'answerText' => 'Dr. Drake Ramoray',
                'isCorrect' => true,
            ],
            [
                'question_id' => 12,
                'answerText' => 'Hank the Dwarf',
                'isCorrect' => false,
            ],
            [
                'question_id' => 12,
                'answerText' => 'Al the Yeti',
                'isCorrect' => false,
            ],
            [
                'question_id' => 12,
                'answerText' => 'Estelle Leonard',
                'isCorrect' => false,
            ],

            [
                'question_id' => 13,
                'answerText' => 'The One with Ross\'s Wedding',
                'isCorrect' => true,
            ],
            [
                'question_id' => 13,
                'answerText' => 'The Last One',
                'isCorrect' => false,
            ],
            [
                'question_id' => 13,
                'answerText' => 'The One Where Everybody Finds Out',
                'isCorrect' => false,
            ],
            [
                'question_id' => 13,
                'answerText' => 'The One with the Prom Video',
                'isCorrect' => false,
            ],

            [
                'question_id' => 14,
                'answerText' => 'Will Colbert',
                'isCorrect' => true,
            ],
            [
                'question_id' => 14,
                'answerText' => 'Steve Thompson',
                'isCorrect' => false,
            ],
            [
                'question_id' => 14,
                'answerText' => 'Mike Hannigan',
                'isCorrect' => false,
            ],

            [
                'question_id' => 15,
                'answerText' => 'David Crane',
                'isCorrect' => true,
            ],
            [
                'question_id' => 15,
                'answerText' => 'Marta Kauffman',
                'isCorrect' => false,
            ],
            [
                'question_id' => 15,
                'answerText' => 'Kevin S. Bright',
                'isCorrect' => false,
            ],
            [
                'question_id' => 15,
                'answerText' => 'Kevin S. Bright',
                'isCorrect' => false,
            ],

            [
                'question_id' => 16,
                'answerText' => 'Joey doesn\'t share food!',
                'isCorrect' => true,
            ],
            [
                'question_id' => 16,
                'answerText' => 'Sharing is caring!',
                'isCorrect' => false,
            ],
            [
                'question_id' => 16,
                'answerText' => 'Food is for friends!',
                'isCorrect' => false,
            ],
            [
                'question_id' => 16,
                'answerText' => 'Let\'s eat together!',
                'isCorrect' => false,
            ],

            [
                'question_id' => 17,
                'answerText' => 'Central Perk',
                'isCorrect' => true,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Perk Place',
                'isCorrect' => false,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Java Joe',
                'isCorrect' => false,
            ],
            [
                'question_id' => 17,
                'answerText' => 'Coffee Central',
                'isCorrect' => false,
            ],

            [
                'question_id' => 18,
                'answerText' => 'Janice',
                'isCorrect' => true,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Richard',
                'isCorrect' => false,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Fun Bobby',
                'isCorrect' => false,
            ],
            [
                'question_id' => 18,
                'answerText' => 'Ursula',
                'isCorrect' => false,
            ],

            [
                'question_id' => 19,
                'answerText' => 'Lisa Kudrow',
                'isCorrect' => true,
            ],
            [
                'question_id' => 19,
                'answerText' => 'Jennifer Aniston',
                'isCorrect' => false,
            ],
            [
                'question_id' => 19,
                'answerText' => 'Courteney Cox',
                'isCorrect' => false,
            ],
            [
                'question_id' => 19,
                'answerText' => 'Maggie Wheeler',
                'isCorrect' => false,
            ],

            [
                'question_id' => 20,
                'answerText' => '10 seasons',
                'isCorrect' => true,
            ],
            [
                'question_id' => 20,
                'answerText' => '8 seasons',
                'isCorrect' => false,
            ],
            [
                'question_id' => 20,
                'answerText' => '12 seasons',
                'isCorrect' => false,
            ],
            [
                'question_id' => 20,
                'answerText' => '6 seasons',
                'isCorrect' => false,
            ],

            [
                'question_id' => 21,
                'answerText' => 'A blue dot',
                'isCorrect' => true,
            ],
            [
                'question_id' => 21,
                'answerText' => 'Her initials',
                'isCorrect' => false,
            ],
            [
                'question_id' => 21,
                'answerText' => 'A cat',
                'isCorrect' => false,
            ],
            [
                'question_id' => 21,
                'answerText' => 'A smiley face',
                'isCorrect' => false,
            ],

            [
                'question_id' => 22,
                'answerText' => 'Ikea',
                'isCorrect' => true,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Pottery Barn',
                'isCorrect' => false,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Ashley Furniture',
                'isCorrect' => false,
            ],
            [
                'question_id' => 22,
                'answerText' => 'Crate & Barrel',
                'isCorrect' => false,
            ],




            [
                'question_id' => 23,
                'answerText' => 'They can\'t conceive naturally',
                'isCorrect' => true,
            ],
            [
                'question_id' => 23,
                'answerText' => 'They want a big family',
                'isCorrect' => false,
            ],
            [
                'question_id' => 23,
                'answerText' => 'They love children',
                'isCorrect' => false,
            ],
            [
                'question_id' => 23,
                'answerText' => 'They have fertility issues',
                'isCorrect' => false,
            ],

            [
                'question_id' => 24,
                'answerText' => 'Elliott Gould',
                'isCorrect' => true,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Jon Favreau',
                'isCorrect' => false,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Bruce Willis',
                'isCorrect' => false,
            ],
            [
                'question_id' => 24,
                'answerText' => 'Tom Selleck',
                'isCorrect' => false,
            ],

            [
                'question_id' => 25,
                'answerText' => 'The characters from "Friends" exist in the same universe as "Mad About You."',
                'isCorrect' => true,
            ],
            [
                'question_id' => 25,
                'answerText' => 'All "Friends" characters appeared in "Mad About You" as different people.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 25,
                'answerText' => 'There is no connection between "Friends" and "Mad About You."',
                'isCorrect' => false,
            ],
            [
                'question_id' => 25,
                'answerText' => 'The characters from "Mad About You" were mentioned but never seen in "Friends."',
                'isCorrect' => false,
            ],

            [
                'question_id' => 26,
                'answerText' => 'Gunther',
                'isCorrect' => true,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Janice',
                'isCorrect' => false,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Richard',
                'isCorrect' => false,
            ],
            [
                'question_id' => 26,
                'answerText' => 'Estelle Leonard',
                'isCorrect' => false,
            ],


            [
                'question_id' => 27,
                'answerText' => 'Regina Phalange',
                'isCorrect' => true,
            ],
            [
                'question_id' => 27,
                'answerText' => 'Ken Adams',
                'isCorrect' => false,
            ],
            [
                'question_id' => 27,
                'answerText' => 'Dr. Drake Ramoray',
                'isCorrect' => false,
            ],
            [
                'question_id' => 27,
                'answerText' => 'Hothouse Flower',
                'isCorrect' => false,
            ],

            [
                'question_id' => 28,
                'answerText' => 'The Last One',
                'isCorrect' => true,
            ],
            [
                'question_id' => 28,
                'answerText' => 'The One Where They Say Goodbye',
                'isCorrect' => false,
            ],
            [
                'question_id' => 28,
                'answerText' => 'The One with the Final Farewell',
                'isCorrect' => false,
            ],
            [
                'question_id' => 28,
                'answerText' => 'The Farewell Episode',
                'isCorrect' => false,
            ],

            [
                'question_id' => 29,
                'answerText' => 'Little Women',
                'isCorrect' => true,
            ],
            [
                'question_id' => 29,
                'answerText' => 'Pride and Prejudice',
                'isCorrect' => false,
            ],
            [
                'question_id' => 29,
                'answerText' => 'War and Peace',
                'isCorrect' => false,
            ],
            [
                'question_id' => 29,
                'answerText' => 'To Kill a Mockingbird',
                'isCorrect' => false,
            ],

            [
                'question_id' => 30,
                'answerText' => 'New York',
                'isCorrect' => true,
            ],
            [
                'question_id' => 30,
                'answerText' => 'California',
                'isCorrect' => false,
            ],
            [
                'question_id' => 30,
                'answerText' => 'Illinois',
                'isCorrect' => false,
            ],
            [
                'question_id' => 30,
                'answerText' => 'Texas',
                'isCorrect' => false,
            ],




            [
                'question_id' => 31,
                'answerText' => 'The Secret Closet',
                'isCorrect' => true,
            ],
            [
                'question_id' => 31,
                'answerText' => 'The Hidden Room',
                'isCorrect' => false,
            ],
            [
                'question_id' => 31,
                'answerText' => 'The Mystery Chamber',
                'isCorrect' => false,
            ],
            [
                'question_id' => 31,
                'answerText' => 'The Covert Space',
                'isCorrect' => false,
            ],
            [
                'question_id' => 32,
                'answerText' => 'The Rembrandts',
                'isCorrect' => true,
            ],
            [
                'question_id' => 32,
                'answerText' => 'The Beatles',
                'isCorrect' => false,
            ],
            [
                'question_id' => 32,
                'answerText' => 'Queen',
                'isCorrect' => false,
            ],
            [
                'question_id' => 32,
                'answerText' => 'Michael Jackson',
                'isCorrect' => false,
            ],
            [
                'question_id' => 33,
                'answerText' => 'New York',
                'isCorrect' => true,
            ],
            [
                'question_id' => 33,
                'answerText' => 'Los Angeles',
                'isCorrect' => false,
            ],
            [
                'question_id' => 33,
                'answerText' => 'Chicago',
                'isCorrect' => false,
            ],
            [
                'question_id' => 33,
                'answerText' => 'London',
                'isCorrect' => false,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Hi',
                'isCorrect' => true,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Dada',
                'isCorrect' => false,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Mom',
                'isCorrect' => false,
            ],
            [
                'question_id' => 34,
                'answerText' => 'Pizza',
                'isCorrect' => false,
            ],

            [
                'question_id' => 35,
                'answerText' => 'Pizza',
                'isCorrect' => true,
            ],
            [
                'question_id' => 35,
                'answerText' => 'Spaghetti',
                'isCorrect' => false,
            ],
            [
                'question_id' => 35,
                'answerText' => 'Burgers',
                'isCorrect' => false,
            ],
            [
                'question_id' => 35,
                'answerText' => 'Tacos',
                'isCorrect' => false,
            ],
            [
                'question_id' => 36,
                'answerText' => 'The Routine',
                'isCorrect' => true,
            ],
            [
                'question_id' => 36,
                'answerText' => 'The Carlton',
                'isCorrect' => false,
            ],
            [
                'question_id' => 36,
                'answerText' => 'The Moonwalk',
                'isCorrect' => false,
            ],
            [
                'question_id' => 36,
                'answerText' => 'The Floss',
                'isCorrect' => false,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Pete Becker',
                'isCorrect' => true,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Frank Buffay Jr.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Gary',
                'isCorrect' => false,
            ],
            [
                'question_id' => 37,
                'answerText' => 'Mike Hannigan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 38,
                'answerText' => 'Ursula Buffay',
                'isCorrect' => true,
            ],
            [
                'question_id' => 38,
                'answerText' => 'Jill Green',
                'isCorrect' => false,
            ],
            [
                'question_id' => 38,
                'answerText' => 'Amy Green',
                'isCorrect' => false,
            ],
            [
                'question_id' => 38,
                'answerText' => 'Emily Waltham',
                'isCorrect' => false,
            ],
            [
                'question_id' => 39,
                'answerText' => 'New York',
                'isCorrect' => true,
            ],
            [
                'question_id' => 39,
                'answerText' => 'California',
                'isCorrect' => false,
            ],
            [
                'question_id' => 39,
                'answerText' => 'Illinois',
                'isCorrect' => false,
            ],
            [
                'question_id' => 39,
                'answerText' => 'Texas',
                'isCorrect' => false,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Erica',
                'isCorrect' => true,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Erika',
                'isCorrect' => false,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Emma',
                'isCorrect' => false,
            ],
            [
                'question_id' => 40,
                'answerText' => 'Eleanor',
                'isCorrect' => false,
            ],
            [
                'question_id' => 41,
                'answerText' => 'La Chambre de l\'Horreur',
                'isCorrect' => true,
            ],
            [
                'question_id' => 41,
                'answerText' => 'Le Nid d\'Amour',
                'isCorrect' => false,
            ],
            [
                'question_id' => 41,
                'answerText' => 'Le Sanctuaire Secret',
                'isCorrect' => false,
            ],
            [
                'question_id' => 41,
                'answerText' => 'La Pièce Mystère',
                'isCorrect' => false,
            ],
            [
                'question_id' => 42,
                'answerText' => 'Jack Geller',
                'isCorrect' => true,
            ],
            [
                'question_id' => 42,
                'answerText' => 'Charles Bing',
                'isCorrect' => false,
            ],
            [
                'question_id' => 42,
                'answerText' => 'Frank Buffay Sr.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 42,
                'answerText' => 'Joseph Tribbiani Sr.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Serveuse',
                'isCorrect' => true,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Styliste',
                'isCorrect' => false,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Exécutrice de comptes',
                'isCorrect' => false,
            ],
            [
                'question_id' => 43,
                'answerText' => 'Avocate',
                'isCorrect' => false,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Carol Willick',
                'isCorrect' => true,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Emily Waltham',
                'isCorrect' => false,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Janice Litman',
                'isCorrect' => false,
            ],
            [
                'question_id' => 44,
                'answerText' => 'Mona',
                'isCorrect' => false,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Ursula Buffay',
                'isCorrect' => true,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Amy Green',
                'isCorrect' => false,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Jill Green',
                'isCorrect' => false,
            ],
            [
                'question_id' => 45,
                'answerText' => 'Estelle Leonard',
                'isCorrect' => false,
            ],
            [
                'question_id' => 46,
                'answerText' => 'My Love',
                'isCorrect' => true,
            ],
            [
                'question_id' => 46,
                'answerText' => 'Wonderwall',
                'isCorrect' => false,
            ],
            [
                'question_id' => 46,
                'answerText' => 'I Will Always Love You',
                'isCorrect' => false,
            ],
            [
                'question_id' => 46,
                'answerText' => 'Bohemian Rhapsody',
                'isCorrect' => false,
            ],
            [
                'question_id' => 47,
                'answerText' => 'John Underhill',
                'isCorrect' => true,
            ],
            [
                'question_id' => 47,
                'answerText' => 'Peter Becker',
                'isCorrect' => false,
            ],
            [
                'question_id' => 47,
                'answerText' => 'George Costanza',
                'isCorrect' => false,
            ],
            [
                'question_id' => 47,
                'answerText' => 'Mark Robinson',
                'isCorrect' => false,
            ],
            [
                'question_id' => 48,
                'answerText' => 'The Geller Cup',
                'isCorrect' => true,
            ],
            [
                'question_id' => 48,
                'answerText' => 'The Golden Trophy',
                'isCorrect' => false,
            ],
            [
                'question_id' => 48,
                'answerText' => 'The Gladiator Award',
                'isCorrect' => false,
            ],
            [
                'question_id' => 48,
                'answerText' => 'The Champion Plaque',
                'isCorrect' => false,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Miss Chanandler Bong',
                'isCorrect' => true,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Channy Boy',
                'isCorrect' => false,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Chandler Bing-Bong',
                'isCorrect' => false,
            ],
            [
                'question_id' => 49,
                'answerText' => 'Bingster',
                'isCorrect' => false,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Chloe',
                'isCorrect' => true,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Julie',
                'isCorrect' => false,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Janice',
                'isCorrect' => false,
            ],
            [
                'question_id' => 50,
                'answerText' => 'Emily',
                'isCorrect' => false,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Roger',
                'isCorrect' => true,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Dr. Richard Burke',
                'isCorrect' => false,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Dr. Sidney Freedman',
                'isCorrect' => false,
            ],
            [
                'question_id' => 51,
                'answerText' => 'Dr. Marshall Goran',
                'isCorrect' => false,
            ],
            [
                'question_id' => 52,
                'answerText' => 'Paul Stevens',
                'isCorrect' => true,
            ],
            [
                'question_id' => 52,
                'answerText' => 'Bruce Willis',
                'isCorrect' => false,
            ],
            [
                'question_id' => 52,
                'answerText' => 'David the Scientist Guy',
                'isCorrect' => false,
            ],
            [
                'question_id' => 52,
                'answerText' => 'Mike Hannigan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Scientifique',
                'isCorrect' => true,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Pilote',
                'isCorrect' => false,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Médecin',
                'isCorrect' => false,
            ],
            [
                'question_id' => 53,
                'answerText' => 'Artiste',
                'isCorrect' => false,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Leonard Hayes',
                'isCorrect' => true,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Warren Beatty',
                'isCorrect' => false,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Harvey Specter',
                'isCorrect' => false,
            ],
            [
                'question_id' => 54,
                'answerText' => 'Jerry Seinfeld',
                'isCorrect' => false,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Mac and Cheese',
                'isCorrect' => true,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Spaghetti Bolognese',
                'isCorrect' => false,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Thanksgiving Turkey',
                'isCorrect' => false,
            ],
            [
                'question_id' => 55,
                'answerText' => 'Chicken Parmesan',
                'isCorrect' => false,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Janice Litman-Goralnik',
                'isCorrect' => true,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Mrs. Heckles',
                'isCorrect' => false,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Carol Willick',
                'isCorrect' => false,
            ],
            [
                'question_id' => 56,
                'answerText' => 'Gunther',
                'isCorrect' => false,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Doctor Monkey',
                'isCorrect' => true,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Captain Bubblegum',
                'isCorrect' => false,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Sir Floss-A-Lot',
                'isCorrect' => false,
            ],
            [
                'question_id' => 57,
                'answerText' => 'Major Toothpaste',
                'isCorrect' => false,
            ],
            [
                'question_id' => 58,
                'answerText' => 'The One with All the Resolutions',
                'isCorrect' => true,
            ],
            [
                'question_id' => 58,
                'answerText' => 'The Last One',
                'isCorrect' => false,
            ],
            [
                'question_id' => 58,
                'answerText' => 'The One Where Everybody Finds Out',
                'isCorrect' => false,
            ],
            [
                'question_id' => 58,
                'answerText' => 'The One Where No One\'s Ready',
                'isCorrect' => false,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Reserved for the Dead',
                'isCorrect' => true,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Monica\'s Obsession',
                'isCorrect' => false,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Chandler\'s Mystery',
                'isCorrect' => false,
            ],
            [
                'question_id' => 59,
                'answerText' => 'Purple Haze',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Phoebe\'s Band',
                'isCorrect' => true,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Central Perk Jam',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Gladys and the Cracked Pots',
                'isCorrect' => false,
            ],
            [
                'question_id' => 60,
                'answerText' => 'Smelly Cat Experience',
                'isCorrect' => false,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Erica',
                'isCorrect' => true,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Emily',
                'isCorrect' => false,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Leslie',
                'isCorrect' => false,
            ],
            [
                'question_id' => 61,
                'answerText' => 'Alice',
                'isCorrect' => false,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Oh. My. God.',
                'isCorrect' => true,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Hey Chandler!',
                'isCorrect' => false,
            ],
            [
                'question_id' => 62,
                'answerText' => 'I\'m back, baby!',
                'isCorrect' => false,
            ],
            [
                'question_id' => 62,
                'answerText' => 'Could I BE wearing any more clothes?',
                'isCorrect' => false,
            ],
            [
                'question_id' => 63,
                'answerText' => 'The One with All the Thanksgivings',
                'isCorrect' => true,
            ],
            [
                'question_id' => 63,
                'answerText' => 'The One Where No One\'s Ready',
                'isCorrect' => false,
            ],
            [
                'question_id' => 63,
                'answerText' => 'The Last One',
                'isCorrect' => false,
            ],
            [
                'question_id' => 63,
                'answerText' => 'The One with the Prom Video',
                'isCorrect' => false,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Dick Clark',
                'isCorrect' => true,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Guy Incognito',
                'isCorrect' => false,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Mr. Celebration',
                'isCorrect' => false,
            ],
            [
                'question_id' => 64,
                'answerText' => 'Party Pete',
                'isCorrect' => false,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Tom Selleck',
                'isCorrect' => true,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Bruce Willis',
                'isCorrect' => false,
            ],
            [
                'question_id' => 65,
                'answerText' => 'John Stamos',
                'isCorrect' => false,
            ],
            [
                'question_id' => 65,
                'answerText' => 'Dermot Mulroney',
                'isCorrect' => false,
            ],
            [
                'question_id' => 66,
                'answerText' => 'All-Wasters International',
                'isCorrect' => true,
            ],
            [
                'question_id' => 66,
                'answerText' => 'Statistical Digest Corporation',
                'isCorrect' => false,
            ],
            [
                'question_id' => 66,
                'answerText' => 'Transponster Industries',
                'isCorrect' => false,
            ],
            [
                'question_id' => 66,
                'answerText' => 'Numbers R Us',
                'isCorrect' => false,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Jill',
                'isCorrect' => true,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Amy',
                'isCorrect' => false,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Emily',
                'isCorrect' => false,
            ],
            [
                'question_id' => 67,
                'answerText' => 'Christina',
                'isCorrect' => false,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Smelly Cat',
                'isCorrect' => true,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Sticky Shoes',
                'isCorrect' => false,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Pervert Pete',
                'isCorrect' => false,
            ],
            [
                'question_id' => 68,
                'answerText' => 'Coffee House Blues',
                'isCorrect' => false,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Phoebe Buffay',
                'isCorrect' => true,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Rachel Green',
                'isCorrect' => false,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Monica Geller',
                'isCorrect' => false,
            ],
            [
                'question_id' => 69,
                'answerText' => 'Joey Tribbiani',
                'isCorrect' => false,
            ],

            [
                'question_id' => 70,
                'answerText' => 'Claustrophobia',
                'isCorrect' => true,
            ],
            [
                'question_id' => 70,
                'answerText' => 'Arachnophobia',
                'isCorrect' => false,
            ],
            [
                'question_id' => 70,
                'answerText' => 'Acrophobia',
                'isCorrect' => false,
            ],
            [
                'question_id' => 70,
                'answerText' => 'Agoraphobia',
                'isCorrect' => false,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Jon Favreau',
                'isCorrect' => true,
            ],
            [
                'question_id' => 71,
                'answerText' => 'George Clooney',
                'isCorrect' => false,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Brad Pitt',
                'isCorrect' => false,
            ],
            [
                'question_id' => 71,
                'answerText' => 'Tom Hanks',
                'isCorrect' => false,
            ],
            [
                'question_id' => 72,
                'answerText' => 'Amanda Buffamonteezi',
                'isCorrect' => true,
            ],
            [
                'question_id' => 72,
                'answerText' => 'Janice Litman-Goralnik',
                'isCorrect' => false,
            ],
            [
                'question_id' => 72,
                'answerText' => 'Mona',
                'isCorrect' => false,
            ],
            [
                'question_id' => 72,
                'answerText' => 'Charlie Wheeler',
                'isCorrect' => false,
            ],
            [
                'question_id' => 73,
                'answerText' => 'Eric',
                'isCorrect' => true,
            ],
            [
                'question_id' => 73,
                'answerText' => 'Jack',
                'isCorrect' => false,
            ],
            [
                'question_id' => 73,
                'answerText' => 'John',
                'isCorrect' => false,
            ],
            [
                'question_id' => 73,
                'answerText' => 'James',
                'isCorrect' => false,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Café Nervosa',
                'isCorrect' => true,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Central Perk',
                'isCorrect' => false,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Gunther\'s Brew',
                'isCorrect' => false,
            ],
            [
                'question_id' => 74,
                'answerText' => 'Joey\'s Java Joint',
                'isCorrect' => false,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Jack Bing',
                'isCorrect' => true,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Eric Bing',
                'isCorrect' => false,
            ],
            [
                'question_id' => 75,
                'answerText' => 'Joey Bing',
                'isCorrect' => false,
            ],
            [
                'question_id' => 75,
                'answerText' => 'James Bing',
                'isCorrect' => false,
            ],

            [
                'question_id' => 207,
                'answerText' => 'So no one told you life was gonna be this way',
                'isCorrect' => true,
            ],
            [
                'question_id' => 207,
                'answerText' => 'I\'ll be there for you',
                'isCorrect' => false,
            ],
            [
                'question_id' => 207,
                'answerText' => 'Your job\'s a joke, you\'re broke, your love life\'s DOA',
                'isCorrect' => false,
            ],
            [
                'question_id' => 207,
                'answerText' => 'It\'s like you\'re always stuck in second gear',
                'isCorrect' => false,
            ],

            [
                'question_id' => 208,
                'answerText' => 'Kevin S. Bright',
                'isCorrect' => true,
            ],
            [
                'question_id' => 208,
                'answerText' => 'David Crane',
                'isCorrect' => false,
            ],
            [
                'question_id' => 208,
                'answerText' => 'Marta Kauffman',
                'isCorrect' => false,
            ],
            [
                'question_id' => 208,
                'answerText' => 'James Burrows',
                'isCorrect' => false,
            ],
            [
                'question_id' => 76,
                'answerText' => 'So no one told you life was gonna be this way',
                'isCorrect' => true,
            ],
            [
                'question_id' => 76,
                'answerText' => 'I\'ll be there for you',
                'isCorrect' => false,
            ],
            [
                'question_id' => 76,
                'answerText' => 'Your job\'s a joke, you\'re broke, your love life\'s DOA',
                'isCorrect' => false,
            ],
            [
                'question_id' => 76,
                'answerText' => 'It\'s like you\'re always stuck in second gear',
                'isCorrect' => false,
            ],
            [
                'question_id' => 77,
                'answerText' => 'Kevin S. Bright',
                'isCorrect' => true,
            ],
            [
                'question_id' => 77,
                'answerText' => 'David Crane',
                'isCorrect' => false,
            ],
            [
                'question_id' => 77,
                'answerText' => 'Marta Kauffman',
                'isCorrect' => false,
            ],
            [
                'question_id' => 77,
                'answerText' => 'James Burrows',
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

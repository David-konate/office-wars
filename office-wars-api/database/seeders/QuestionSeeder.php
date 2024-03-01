<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Level;
use App\Models\Univer;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample questions data, adjust accordingly
        $questionsData = [
            [
                'title' => "Quel est le nom complet de Ross?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 2,
                'answers' => [
                    ['answerText' => 'Ross Geller', 'isCorrect' => true],
                    ['answerText' => 'Ross Bing', 'isCorrect' => false],
                    ['answerText' => 'Ross Green', 'isCorrect' => false],
                    ['answerText' => 'Ross Tribbiani', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui est le colocataire de Joey?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 2,
                'answers' => [
                    ['answerText' => 'Chandler Bing', 'isCorrect' => false],
                    ['answerText' => 'Monica Geller', 'isCorrect' => false],
                    ['answerText' => 'Rachel Green', 'isCorrect' => false],
                    ['answerText' => 'Ross Geller', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Quelle est la profession de Monica?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 2,
                'answers' => [
                    ['answerText' => 'Chef', 'isCorrect' => true],
                    ['answerText' => 'Actrice', 'isCorrect' => false],
                    ['answerText' => 'Journaliste', 'isCorrect' => false],
                    ['answerText' => 'Infirmière', 'isCorrect' => false],
                ],
                [
                    'title' => "Quel est le métier de Chandler?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Ingénieur', 'isCorrect' => false],
                        ['answerText' => 'Avocat', 'isCorrect' => true],
                        ['answerText' => 'Médecin', 'isCorrect' => false],
                        ['answerText' => 'Acteur', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la passion de Ross pour la paléontologie?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Astronomie', 'isCorrect' => false],
                        ['answerText' => 'Archéologie', 'isCorrect' => false],
                        ['answerText' => 'Géologie', 'isCorrect' => true],
                        ['answerText' => 'Botanique', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la chanson emblématique de la série?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'I\'ll Be There for You', 'isCorrect' => true],
                        ['answerText' => 'Friends Forever', 'isCorrect' => false],
                        ['answerText' => 'Central Perk Anthem', 'isCorrect' => false],
                        ['answerText' => 'Smelly Cat', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Qui est la meilleure amie de Rachel?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Phoebe', 'isCorrect' => false],
                        ['answerText' => 'Monica', 'isCorrect' => false],
                        ['answerText' => 'Joey', 'isCorrect' => false],
                        ['answerText' => 'Ross', 'isCorrect' => true],
                    ],
                ],

                [
                    'title' => "Comment s'appelle le café où ils se retrouvent souvent?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Central Perk', 'isCorrect' => true],
                        ['answerText' => 'Coffee Central', 'isCorrect' => false],
                        ['answerText' => 'Perk Place', 'isCorrect' => false],
                        ['answerText' => 'Friends Café', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom du singe de Ross?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'George', 'isCorrect' => false],
                        ['answerText' => 'Joey', 'isCorrect' => false],
                        ['answerText' => 'Marcel', 'isCorrect' => true],
                        ['answerText' => 'Bob', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la peur irrationnelle de Monica?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Peur des clowns', 'isCorrect' => false],
                        ['answerText' => 'Peur des hauteurs', 'isCorrect' => false],
                        ['answerText' => 'Peur du noir', 'isCorrect' => false],
                        ['answerText' => 'Peur des oiseaux', 'isCorrect' => true],
                    ],
                    // ... Ajoutez d'autres questions avec leurs réponses
                ],
                [
                    'title' => "Quel acteur joue le rôle de Ross dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Matt LeBlanc', 'isCorrect' => false],
                        ['answerText' => 'David Schwimmer', 'isCorrect' => true],
                        ['answerText' => 'Matthew Perry', 'isCorrect' => false],
                        ['answerText' => 'Courteney Cox', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la célèbre réplique de Joey pour draguer les femmes?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'How you doin\'?', 'isCorrect' => true],
                        ['answerText' => 'Hey, baby!', 'isCorrect' => false],
                        ['answerText' => 'What\'s up, girl?', 'isCorrect' => false],
                        ['answerText' => 'Nice to meet you.', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom du personnage fictif de la série préféré de Joey?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Chandler Bing', 'isCorrect' => false],
                        ['answerText' => 'Hugsy', 'isCorrect' => true],
                        ['answerText' => 'Marcel', 'isCorrect' => false],
                        ['answerText' => 'Geller the Gelinator', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Dans quel épisode Ross prononce-t-il accidentellement le nom de Rachel pendant son mariage?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'The One with the Prom Video', 'isCorrect' => false],
                        ['answerText' => 'The One Where No One\'s Ready', 'isCorrect' => false],
                        ['answerText' => 'The One with Ross\'s Wedding', 'isCorrect' => true],
                        ['answerText' => 'The Last One', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom du personnage de Brad Pitt dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Doug', 'isCorrect' => false],
                        ['answerText' => 'Will', 'isCorrect' => true],
                        ['answerText' => 'Mark', 'isCorrect' => false],
                        ['answerText' => 'Steve', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Qui est le créateur de la série \"Friends\"?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'David Crane', 'isCorrect' => true],
                        ['answerText' => 'Kevin S. Bright', 'isCorrect' => false],
                        ['answerText' => 'Marta Kauffman', 'isCorrect' => true],
                        ['answerText' => 'Paulo Horto', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle est la devise de Joey pour partager de la nourriture?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Sharing is caring!', 'isCorrect' => false],
                        ['answerText' => 'Food is love.', 'isCorrect' => false],
                        ['answerText' => 'Joey doesn\'t share food!', 'isCorrect' => true],
                        ['answerText' => 'Let\'s all have a bite.', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom du café où Rachel travaille au début de la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Central Perk', 'isCorrect' => false],
                        ['answerText' => 'Starbucks', 'isCorrect' => false],
                        ['answerText' => 'Central Coffee House', 'isCorrect' => false],
                        ['answerText' => 'Java Joes', 'isCorrect' => true],
                    ],
                ],

                [
                    'title' => "Qui est le pire cauchemar de Chandler lorsqu'il s'agit de mariage?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Janice', 'isCorrect' => false],
                        ['answerText' => 'Monica', 'isCorrect' => false],
                        ['answerText' => 'Commitment', 'isCorrect' => true],
                        ['answerText' => 'Wedding vows', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel est le nom de l'actrice qui joue le rôle de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Jennifer Aniston', 'isCorrect' => false],
                        ['answerText' => 'Courteney Cox', 'isCorrect' => false],
                        ['answerText' => 'Lisa Kudrow', 'isCorrect' => true],
                        ['answerText' => 'Maggie Wheeler', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel acteur joue le rôle de Ross dans la série?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Matt LeBlanc', 'isCorrect' => false],
                        ['answerText' => 'David Schwimmer', 'isCorrect' => true],
                        ['answerText' => 'Matthew Perry', 'isCorrect' => false],
                        ['answerText' => 'Courteney Cox', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la célèbre réplique de Joey pour draguer les femmes?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => "How you doin'?", 'isCorrect' => true],
                        ['answerText' => 'Hey, baby!', 'isCorrect' => false],
                        ['answerText' => "What's up, girl?", 'isCorrect' => false],
                        ['answerText' => 'Nice to meet you.', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage fictif de la série préféré de Joey?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Chandler Bing', 'isCorrect' => false],
                        ['answerText' => 'Hugsy', 'isCorrect' => true],
                        ['answerText' => 'Marcel', 'isCorrect' => false],
                        ['answerText' => 'Geller the Gelinator', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Dans quel épisode Ross prononce-t-il accidentellement le nom de Rachel pendant son mariage?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'The One with All the Thanksgivings', 'isCorrect' => false],
                        ['answerText' => 'The One with Ross\'s Wedding', 'isCorrect' => false],
                        ['answerText' => 'The One with the Prom Video', 'isCorrect' => false],
                        ['answerText' => 'The One with Ross\'s Wedding: Part 2', 'isCorrect' => true],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage de Brad Pitt dans la série?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Tom', 'isCorrect' => false],
                        ['answerText' => 'Will', 'isCorrect' => false],
                        ['answerText' => 'Mike', 'isCorrect' => false],
                        ['answerText' => 'Will Colbert', 'isCorrect' => true],
                    ],
                ],
                [
                    'title' => "Qui est le créateur de la série 'Friends'?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'David Crane', 'isCorrect' => false],
                        ['answerText' => 'Marta Kauffman', 'isCorrect' => false],
                        ['answerText' => 'David Schwimmer', 'isCorrect' => false],
                        ['answerText' => 'David Crane et Marta Kauffman', 'isCorrect' => true],
                    ],
                ],
                [
                    'title' => "Quelle est la devise de Joey pour partager de la nourriture?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Tous pour un, un pour tous', 'isCorrect' => false],
                        ['answerText' => 'Pas de partage, pas de souci', 'isCorrect' => false],
                        ['answerText' => 'Si tu manges, je mange', 'isCorrect' => false],
                        ['answerText' => 'Joey ne partage pas la nourriture!', 'isCorrect' => true],
                    ],
                ],
                [
                    'title' => "Quel est le nom du café où Rachel travaille au début de la série?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Central Perk', 'isCorrect' => true],
                        ['answerText' => 'Starbucks', 'isCorrect' => false],
                        ['answerText' => 'Central Cafe', 'isCorrect' => false],
                        ['answerText' => 'Perk Place', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Qui est le pire cauchemar de Chandler lorsqu'il s'agit de mariage?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Les animaux', 'isCorrect' => false],
                        ['answerText' => 'La danse', 'isCorrect' => false],
                        ['answerText' => 'Les photos', 'isCorrect' => false],
                        ['answerText' => 'Michael Flatley, Lord of the Dance', 'isCorrect' => true],
                    ],
                ],
                [
                    'title' => "Quel est le nom de l'actrice qui joue le rôle de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Jennifer Aniston', 'isCorrect' => false],
                        ['answerText' => 'Courteney Cox', 'isCorrect' => false],
                        ['answerText' => 'Lisa Kudrow', 'isCorrect' => true],
                        ['answerText' => 'Maggie Wheeler', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Dans combien de saisons 'Friends' a-t-elle été diffusée?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => '8', 'isCorrect' => false],
                        ['answerText' => '9', 'isCorrect' => false],
                        ['answerText' => '10', 'isCorrect' => true],
                        ['answerText' => '12', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la signification du tatouage de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Un symbole de paix', 'isCorrect' => false],
                        ['answerText' => 'Un logo d\'entreprise', 'isCorrect' => true],
                        ['answerText' => 'Un hommage à sa grand-mère', 'isCorrect' => false],
                        ['answerText' => 'Un dessin aléatoire', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la marque du canapé que Ross et Chandler portent jusqu'à l'appartement?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Ikea', 'isCorrect' => false],
                        ['answerText' => 'La-Z-Boy', 'isCorrect' => false],
                        ['answerText' => 'Pottery Barn', 'isCorrect' => true],
                        ['answerText' => 'Ashley Furniture', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la véritable raison pour laquelle Monica et Chandler décident d'adopter un enfant?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Problèmes de fertilité de Monica', 'isCorrect' => false],
                        ['answerText' => 'Refus d\'adopter un chien', 'isCorrect' => true],
                        ['answerText' => 'Pression de la famille', 'isCorrect' => false],
                        ['answerText' => 'Décision spontanée', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de l'acteur invité qui joue le père de Ross et Monica?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Bruce Willis', 'isCorrect' => false],
                        ['answerText' => 'Tom Selleck', 'isCorrect' => false],
                        ['answerText' => 'John Stamos', 'isCorrect' => false],
                        ['answerText' => 'Elliott Gould', 'isCorrect' => true],
                    ],
                ],
                [
                    'title' => "Quelle est la théorie populaire sur les personnages de 'Friends' concernant la série 'Mad About You'?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Les personnages de \'Friends\' sont inspirés par ceux de \'Mad About You\'', 'isCorrect' => true],
                        ['answerText' => 'Les personnages de \'Mad About You\' sont inspirés par ceux de \'Friends\'', 'isCorrect' => false],
                        ['answerText' => 'Les deux séries partagent le même univers fictionnel', 'isCorrect' => false],
                        ['answerText' => 'Il n\'y a aucune connexion entre les deux séries', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Qui est la personne qui fait le plus de caméos dans la série?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Brad Pitt', 'isCorrect' => false],
                        ['answerText' => 'Tom Selleck', 'isCorrect' => true],
                        ['answerText' => 'Bruce Willis', 'isCorrect' => false],
                        ['answerText' => 'Jon Favreau', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage que Phoebe prétend être pour aider Joey à surmonter ses peurs?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Regina Phalange', 'isCorrect' => true],
                        ['answerText' => 'Princesse Consuela Banana-Hammock', 'isCorrect' => false],
                        ['answerText' => 'Anita Mentions Légales', 'isCorrect' => false],
                        ['answerText' => 'Crap Bag', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le titre du dernier épisode de la série?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'The Last One', 'isCorrect' => true],
                        ['answerText' => 'The End of an Era', 'isCorrect' => false],
                        ['answerText' => 'Goodbye, Friends', 'isCorrect' => false],
                        ['answerText' => 'Farewell, Central Perk', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du livre que Joey a mis dans le congélateur?",
                    'category_id' => 1,
                    'level_id' => 4,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Little Women', 'isCorrect' => false],
                        ['answerText' => 'The Shining', 'isCorrect' => true],
                        ['answerText' => 'Pride and Prejudice', 'isCorrect' => false],
                        ['answerText' => 'Moby-Dick', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Qui a chanté la chanson du générique de 'Friends'?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'The Rembrandts', 'isCorrect' => true],
                        ['answerText' => 'The Beatles', 'isCorrect' => false],
                        ['answerText' => 'Coldplay', 'isCorrect' => false],
                        ['answerText' => 'U2', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Où se déroule principalement l'action de la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'New York', 'isCorrect' => true],
                        ['answerText' => 'Los Angeles', 'isCorrect' => false],
                        ['answerText' => 'Chicago', 'isCorrect' => false],
                        ['answerText' => 'London', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le premier mot de Ben, le fils de Ross?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Hi', 'isCorrect' => true],
                        ['answerText' => 'Dada', 'isCorrect' => false],
                        ['answerText' => 'Bye', 'isCorrect' => false],
                        ['answerText' => 'Mama', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le plat préféré de Joey?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Pizza', 'isCorrect' => true],
                        ['answerText' => 'Burger', 'isCorrect' => false],
                        ['answerText' => 'Pasta', 'isCorrect' => false],
                        ['answerText' => 'Ice Cream', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la danse de Ross qui est devenue célèbre?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'The Routine', 'isCorrect' => true],
                        ['answerText' => 'The Cha-Cha Slide', 'isCorrect' => false],
                        ['answerText' => 'The Macarena', 'isCorrect' => false],
                        ['answerText' => 'The Moonwalk', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage joué par Jon Favreau dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Pete Becker', 'isCorrect' => true],
                        ['answerText' => 'Richard Burke', 'isCorrect' => false],
                        ['answerText' => 'Barry Farber', 'isCorrect' => false],
                        ['answerText' => 'David the Scientist Guy', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la sœur de Phoebe qui apparaît occasionnellement dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Ursula Buffay', 'isCorrect' => true],
                        ['answerText' => 'Amy Green', 'isCorrect' => false],
                        ['answerText' => 'Jill Green', 'isCorrect' => false],
                        ['answerText' => 'Janice Litman', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Dans quel État américain Monica, Ross, Rachel, Chandler, Joey, et Phoebe ont-ils grandi?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'New York', 'isCorrect' => true],
                        ['answerText' => 'California', 'isCorrect' => false],
                        ['answerText' => 'Texas', 'isCorrect' => false],
                        ['answerText' => 'Florida', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la femme qui donne naissance au fils de Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Erica', 'isCorrect' => true],
                        ['answerText' => 'Emily', 'isCorrect' => false],
                        ['answerText' => 'Estelle', 'isCorrect' => false],
                        ['answerText' => 'Evelyn', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la pièce secrète de Monica et Chandler dans leur nouvel appartement?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'La Chambre de l\'Hilarité', 'isCorrect' => true],
                        ['answerText' => 'Le Refuge des Amoureux', 'isCorrect' => false],
                        ['answerText' => 'Le Sanctuaire du Rire', 'isCorrect' => false],
                        ['answerText' => 'Le Coin Câlin', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du père de Ross et Monica?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Jack Geller', 'isCorrect' => true],
                        ['answerText' => 'Richard Geller', 'isCorrect' => false],
                        ['answerText' => 'Charles Bing', 'isCorrect' => false],
                        ['answerText' => 'Frank Buffay Sr.', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la profession de Rachel au début de la série?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Serveuse', 'isCorrect' => true],
                        ['answerText' => 'Styliste', 'isCorrect' => false],
                        ['answerText' => 'Avocate', 'isCorrect' => false],
                        ['answerText' => 'Journaliste', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de l'ex-femme de Ross?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Carol Willick', 'isCorrect' => true],
                        ['answerText' => 'Janice Litman', 'isCorrect' => false],
                        ['answerText' => 'Emily Waltham', 'isCorrect' => false],
                        ['answerText' => 'Mona', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Comment s'appelle la sœur jumelle de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Ursula Buffay', 'isCorrect' => true],
                        ['answerText' => 'Lily Buffay', 'isCorrect' => false],
                        ['answerText' => 'Dana Buffay', 'isCorrect' => false],
                        ['answerText' => 'Cathy Buffay', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage joué par Jon Favreau dans la série?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Pete Becker', 'isCorrect' => true],
                        ['answerText' => 'Richard Burke', 'isCorrect' => false],
                        ['answerText' => 'Barry Farber', 'isCorrect' => false],
                        ['answerText' => 'David the Scientist Guy', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Qui est la première personne à découvrir la relation secrète entre Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Joey Tribbiani', 'isCorrect' => true],
                        ['answerText' => 'Phoebe Buffay', 'isCorrect' => false],
                        ['answerText' => 'Rachel Green', 'isCorrect' => false],
                        ['answerText' => 'Ross Geller', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le prénom de la petite amie de Ross qui a une voix particulièrement aiguë?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Bonnie', 'isCorrect' => true],
                        ['answerText' => 'Emily', 'isCorrect' => false],
                        ['answerText' => 'Janice', 'isCorrect' => false],
                        ['answerText' => 'Chloe', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la chanson que Ross déteste mais que les autres adorent?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Baby Got Back', 'isCorrect' => true],
                        ['answerText' => 'I Will Always Love You', 'isCorrect' => false],
                        ['answerText' => 'Wannabe', 'isCorrect' => false],
                        ['answerText' => 'Wonderwall', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Qui est l'architecte de la maison où Monica et Chandler veulent emménager?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Gary', 'isCorrect' => true],
                        ['answerText' => 'Frank Jr.', 'isCorrect' => false],
                        ['answerText' => 'Richard', 'isCorrect' => false],
                        ['answerText' => 'Tag', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage qui gagne une médaille d'or dans la compétition de gladiateurs?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Joey Tribbiani', 'isCorrect' => true],
                        ['answerText' => 'Chandler Bing', 'isCorrect' => false],
                        ['answerText' => 'Monica Geller', 'isCorrect' => false],
                        ['answerText' => 'Rachel Green', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le surnom de Chandler dans la saison 4?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'M. Toad', 'isCorrect' => true],
                        ['answerText' => 'Big Daddy', 'isCorrect' => false],
                        ['answerText' => 'Chan-Chan Man', 'isCorrect' => false],
                        ['answerText' => 'Bingster', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Comment s'appelle la fille que Ross embrasse pendant un blackout?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Chloe', 'isCorrect' => true],
                        ['answerText' => 'Emily', 'isCorrect' => false],
                        ['answerText' => 'Janice', 'isCorrect' => false],
                        ['answerText' => 'Bonnie', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du psychologue que Phoebe rencontre pour aider ses amis?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Roger', 'isCorrect' => true],
                        ['answerText' => 'Duncan', 'isCorrect' => false],
                        ['answerText' => 'Stan', 'isCorrect' => false],
                        ['answerText' => 'Malcolm', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage joué par Bruce Willis dans la série?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Paul Stevens', 'isCorrect' => true],
                        ['answerText' => 'Tommy', 'isCorrect' => false],
                        ['answerText' => 'Ross Geller', 'isCorrect' => false],
                        ['answerText' => 'Pete Becker', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la profession du petit ami de Phoebe, David?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Scientifique', 'isCorrect' => true],
                        ['answerText' => 'Acteur', 'isCorrect' => false],
                        ['answerText' => 'Médecin', 'isCorrect' => false],
                        ['answerText' => 'Avocat', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du producteur de télévision qui engage Joey pour son propre show?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Leonard Hayes', 'isCorrect' => true],
                        ['answerText' => 'Warren Beatty', 'isCorrect' => false],
                        ['answerText' => 'Roger Thompson', 'isCorrect' => false],
                        ['answerText' => 'Ryan Ridley', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le plat spécial de Monica?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Macaroni au fromage', 'isCorrect' => true],
                        ['answerText' => 'Tarte aux pommes', 'isCorrect' => false],
                        ['answerText' => 'Poulet rôti', 'isCorrect' => false],
                        ['answerText' => 'Lasagnes', 'isCorrect' => false],
                    ],
                ],


                [
                    'title' => "Dans quel épisode Ross et Rachel rompent-ils officiellement?",
                    'category_id' => 1,
                    'level_id' => 2,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'The One with the Morning After', 'isCorrect' => true],
                        ['answerText' => 'The One Where Old Yeller Dies', 'isCorrect' => false],
                        ['answerText' => 'The Last One', 'isCorrect' => false],
                        ['answerText' => 'The One with All the Thanksgivings', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la signification du cadre violet sur la porte de Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Cadeau de mariage', 'isCorrect' => true],
                        ['answerText' => 'Porte bonheur', 'isCorrect' => false],
                        ['answerText' => 'Décoration aléatoire', 'isCorrect' => false],
                        ['answerText' => 'Erreur de peinture', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du groupe de rock dans lequel jouait Phoebe?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Smelly Cat', 'isCorrect' => true],
                        ['answerText' => 'The Rembrandts', 'isCorrect' => false],
                        ['answerText' => 'No Way Jose', 'isCorrect' => false],
                        ['answerText' => 'Central Perk Trio', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la mère porteuse de l'enfant de Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Erica', 'isCorrect' => true],
                        ['answerText' => 'Claudia', 'isCorrect' => false],
                        ['answerText' => 'Alice', 'isCorrect' => false],
                        ['answerText' => 'Joanna', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la première phrase complète de Janice, la petite amie de Chandler?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Oh... mon... Dieu!', 'isCorrect' => true],
                        ['answerText' => 'Tu es tellement drôle, Chandler!', 'isCorrect' => false],
                        ['answerText' => 'Je t\'aime, Chandler Bing!', 'isCorrect' => false],
                        ['answerText' => 'Salut, Chandler, ça va?', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Dans quel épisode Chandler et Monica se rendent-ils compte qu'ils ne peuvent pas concevoir d'enfants naturellement?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'The One with the Fertility Test', 'isCorrect' => true],
                        ['answerText' => 'The Last One', 'isCorrect' => false],
                        ['answerText' => 'The One with Monica and Chandler\'s Wedding', 'isCorrect' => false],
                        ['answerText' => 'The One with All the Thanksgivings', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage que Ross joue au réveillon du Nouvel An?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Armstrong', 'isCorrect' => true],
                        ['answerText' => 'The Holiday Armadillo', 'isCorrect' => false],
                        ['answerText' => 'Santa Claus', 'isCorrect' => false],
                        ['answerText' => 'Superman', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de l'acteur qui joue Richard, l'ex-petit ami de Monica?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Tom Selleck', 'isCorrect' => true],
                        ['answerText' => 'Bruce Willis', 'isCorrect' => false],
                        ['answerText' => 'George Clooney', 'isCorrect' => false],
                        ['answerText' => 'Jon Favreau', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom de la société pour laquelle Chandler travaille?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Morgan Stanley', 'isCorrect' => true],
                        ['answerText' => 'IBM', 'isCorrect' => false],
                        ['answerText' => 'Microsoft', 'isCorrect' => false],
                        ['answerText' => 'Wentworth', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le prénom de la sœur de Rachel?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Jill', 'isCorrect' => true],
                        ['answerText' => 'Amy', 'isCorrect' => false],
                        ['answerText' => 'Emily', 'isCorrect' => false],
                        ['answerText' => 'Janice', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le titre de la chanson interprétée par Phoebe dans le Central Perk?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Smelly Cat', 'isCorrect' => true],
                        ['answerText' => 'I\'ll Be There for You', 'isCorrect' => false],
                        ['answerText' => 'Wonderful Tonight', 'isCorrect' => false],
                        ['answerText' => 'Creep', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Qui est l'auteur de la chanson 'Smelly Cat'?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Phoebe Buffay', 'isCorrect' => true],
                        ['answerText' => 'Paul Rudd', 'isCorrect' => false],
                        ['answerText' => 'Ross Geller', 'isCorrect' => false],
                        ['answerText' => 'Monica Geller', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la phobie de Rachel?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Peur des animaux', 'isCorrect' => true],
                        ['answerText' => 'Peur des hauteurs', 'isCorrect' => false],
                        ['answerText' => 'Peur des araignées', 'isCorrect' => false],
                        ['answerText' => 'Peur du noir', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel acteur célèbre joue le rôle du 'mariage' de Phoebe dans un épisode?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Sean Penn', 'isCorrect' => true],
                        ['answerText' => 'Brad Pitt', 'isCorrect' => false],
                        ['answerText' => 'Tom Hanks', 'isCorrect' => false],
                        ['answerText' => 'George Clooney', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage joué par Jennifer Coolidge, la colocataire de Phoebe?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Amanda', 'isCorrect' => true],
                        ['answerText' => 'Janice', 'isCorrect' => false],
                        ['answerText' => 'Emily', 'isCorrect' => false],
                        ['answerText' => 'Estelle', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du personnage interprété par Sean Penn dans la série?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Eric', 'isCorrect' => true],
                        ['answerText' => 'Gary', 'isCorrect' => false],
                        ['answerText' => 'Charlie', 'isCorrect' => false],
                        ['answerText' => 'Frank', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la marque de la machine à café dans le bureau de Chandler et Rachel?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Moccamaster', 'isCorrect' => true],
                        ['answerText' => 'Keurig', 'isCorrect' => false],
                        ['answerText' => 'Nespresso', 'isCorrect' => false],
                        ['answerText' => 'Breville', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du restaurant où Monica travaille comme chef?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Javu', 'isCorrect' => true],
                        ['answerText' => 'Central Perk', 'isCorrect' => false],
                        ['answerText' => 'Allesandro\'s', 'isCorrect' => false],
                        ['answerText' => 'Mama\'s Little Bakery', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le prénom du fils adoptif de Monica et Chandler?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Jack', 'isCorrect' => true],
                        ['answerText' => 'Ben', 'isCorrect' => false],
                        ['answerText' => 'James', 'isCorrect' => false],
                        ['answerText' => 'David', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quelle est la première ligne de la chanson du générique de 'Friends'?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'I\'ll be there for you', 'isCorrect' => true],
                        ['answerText' => 'So no one told you life was gonna be this way', 'isCorrect' => false],
                        ['answerText' => 'Your job\'s a joke, you\'re broke, your love life\'s D.O.A.', 'isCorrect' => false],
                        ['answerText' => 'It\'s like you\'re always stuck in second gear', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Quel est le nom du réalisateur de la série 'Friends'?",
                    'category_id' => 1,
                    'level_id' => 3,
                    'univer_id' => 2,
                    'answers' => [
                        ['answerText' => 'Kevin S. Bright', 'isCorrect' => true],
                        ['answerText' => 'David Crane', 'isCorrect' => false],
                        ['answerText' => 'Marta Kauffman', 'isCorrect' => false],
                        ['answerText' => 'James Burrows', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Qui a remporté le titre de Rookie de l'Année en 2020?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Zion Williamson', 'isCorrect' => false],
                        ['answerText' => 'Ja Morant', 'isCorrect' => true],
                        ['answerText' => 'Rui Hachimura', 'isCorrect' => false],
                        ['answerText' => 'Tyler Herro', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur de la NBA est également connu sous le surnom 'The Unicorn'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'LeBron James', 'isCorrect' => false],
                        ['answerText' => 'Kevin Durant', 'isCorrect' => true],
                        ['answerText' => 'Kawhi Leonard', 'isCorrect' => false],
                        ['answerText' => 'Giannis Antetokounmpo', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Combien d'équipes participent aux séries éliminatoires de la NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => '16', 'isCorrect' => true],
                        ['answerText' => '12', 'isCorrect' => false],
                        ['answerText' => '20', 'isCorrect' => false],
                        ['answerText' => '24', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur est souvent appelé 'The King'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'LeBron James', 'isCorrect' => true],
                        ['answerText' => 'Kevin Durant', 'isCorrect' => false],
                        ['answerText' => 'Kawhi Leonard', 'isCorrect' => false],
                        ['answerText' => 'Stephen Curry', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe de la NBA est basée à Philadelphie?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Miami Heat', 'isCorrect' => false],
                        ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                        ['answerText' => 'Philadelphia 76ers', 'isCorrect' => true],
                        ['answerText' => 'Boston Celtics', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Qui détient le record du plus grand nombre de tirs à trois points réussis en une seule saison régulière?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Stephen Curry', 'isCorrect' => true],
                        ['answerText' => 'Klay Thompson', 'isCorrect' => false],
                        ['answerText' => 'Ray Allen', 'isCorrect' => false],
                        ['answerText' => 'James Harden', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Combien de fois Stephen Curry a-t-il remporté le titre de MVP de la saison régulière?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => '1', 'isCorrect' => false],
                        ['answerText' => '2', 'isCorrect' => true],
                        ['answerText' => '3', 'isCorrect' => false],
                        ['answerText' => '0', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur a été choisi en deuxième position lors de la draft NBA en 2017?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Lonzo Ball', 'isCorrect' => false],
                        ['answerText' => 'Markelle Fultz', 'isCorrect' => true],
                        ['answerText' => 'De\'Aaron Fox', 'isCorrect' => false],
                        ['answerText' => 'Josh Jackson', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe a remporté le premier match de la NBA en 1946?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'New York Knicks', 'isCorrect' => false],
                        ['answerText' => 'Chicago Stags', 'isCorrect' => false],
                        ['answerText' => 'Boston Celtics', 'isCorrect' => false],
                        ['answerText' => 'Toronto Huskies', 'isCorrect' => true],
                    ],
                ],

                [
                    'title' => "Combien de fois les Bulls de Chicago ont-ils remporté le championnat dans les années 1990?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => '3', 'isCorrect' => false],
                        ['answerText' => '5', 'isCorrect' => false],
                        ['answerText' => '6', 'isCorrect' => true],
                        ['answerText' => '2', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe a remporté le plus de championnats NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Los Angeles Lakers', 'isCorrect' => true],
                        ['answerText' => 'Chicago Bulls', 'isCorrect' => false],
                        ['answerText' => 'Boston Celtics', 'isCorrect' => false],
                        ['answerText' => 'Golden State Warriors', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Qui est le meilleur marqueur de tous les temps en NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'LeBron James', 'isCorrect' => false],
                        ['answerText' => 'Kareem Abdul-Jabbar', 'isCorrect' => true],
                        ['answerText' => 'Kobe Bryant', 'isCorrect' => false],
                        ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur est surnommé 'The Greek Freak'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Joel Embiid', 'isCorrect' => false],
                        ['answerText' => 'Giannis Antetokounmpo', 'isCorrect' => true],
                        ['answerText' => 'Luka Dončić', 'isCorrect' => false],
                        ['answerText' => 'Nikola Jokić', 'isCorrect' => false],
                    ],
                ],
                [
                    'title' => "Combien de temps dure un quart-temps dans un match de la NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => '8 minutes', 'isCorrect' => false],
                        ['answerText' => '10 minutes', 'isCorrect' => false],
                        ['answerText' => '12 minutes', 'isCorrect' => true],
                        ['answerText' => '15 minutes', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Qui a remporté le MVP de la saison régulière en 2021?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'LeBron James', 'isCorrect' => false],
                        ['answerText' => 'Kevin Durant', 'isCorrect' => false],
                        ['answerText' => 'Giannis Antetokounmpo', 'isCorrect' => true],
                        ['answerText' => 'Stephen Curry', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe de la NBA est basée à Boston?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                        ['answerText' => 'Chicago Bulls', 'isCorrect' => false],
                        ['answerText' => 'Boston Celtics', 'isCorrect' => true],
                        ['answerText' => 'Miami Heat', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur est souvent associé au terme 'The Process'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Joel Embiid', 'isCorrect' => true],
                        ['answerText' => 'Ben Simmons', 'isCorrect' => false],
                        ['answerText' => 'Jimmy Butler', 'isCorrect' => false],
                        ['answerText' => 'Tobias Harris', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Combien de joueurs composent une équipe de la NBA sur le terrain à un moment donné?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => '5', 'isCorrect' => true],
                        ['answerText' => '6', 'isCorrect' => false],
                        ['answerText' => '7', 'isCorrect' => false],
                        ['answerText' => '8', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Qui détient le record du plus grand nombre de points marqués en un seul match de la NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Kobe Bryant', 'isCorrect' => false],
                        ['answerText' => 'Wilt Chamberlain', 'isCorrect' => true],
                        ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                        ['answerText' => 'James Harden', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur est surnommé 'The Brow'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Anthony Davis', 'isCorrect' => true],
                        ['answerText' => 'DeMarcus Cousins', 'isCorrect' => false],
                        ['answerText' => 'Kawhi Leonard', 'isCorrect' => false],
                        ['answerText' => 'Chris Paul', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe a remporté le championnat NBA le plus récemment avant la rédaction de cette question?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                        ['answerText' => 'Miami Heat', 'isCorrect' => false],
                        ['answerText' => 'Toronto Raptors', 'isCorrect' => true],
                        ['answerText' => 'Golden State Warriors', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quel joueur a été surnommé 'The Answer'?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Allen Iverson', 'isCorrect' => true],
                        ['answerText' => 'Dwyane Wade', 'isCorrect' => false],
                        ['answerText' => 'Ray Allen', 'isCorrect' => false],
                        ['answerText' => 'Steve Nash', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Combien de franchises de la NBA sont basées en Floride?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => '1', 'isCorrect' => false],
                        ['answerText' => '2', 'isCorrect' => true],
                        ['answerText' => '3', 'isCorrect' => false],
                        ['answerText' => '0', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Qui détient le record du plus grand nombre de paniers à trois points en carrière?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Klay Thompson', 'isCorrect' => false],
                        ['answerText' => 'Ray Allen', 'isCorrect' => true],
                        ['answerText' => 'Stephen Curry', 'isCorrect' => false],
                        ['answerText' => 'Reggie Miller', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Quelle équipe a remporté le plus grand nombre de titres de la NBA dans les années 1980?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Los Angeles Lakers', 'isCorrect' => true],
                        ['answerText' => 'Boston Celtics', 'isCorrect' => false],
                        ['answerText' => 'Detroit Pistons', 'isCorrect' => false],
                        ['answerText' => 'Chicago Bulls', 'isCorrect' => false],
                    ],
                ],

                [
                    'title' => "Qui est le seul joueur à avoir marqué 100 points dans un match de la NBA?",
                    'category_id' => 1,
                    'level_id' => 1,
                    'univer_id' => 3,
                    'answers' => [
                        ['answerText' => 'Wilt Chamberlain', 'isCorrect' => true],
                        ['answerText' => 'Kobe Bryant', 'isCorrect' => false],
                        ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                        ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ],
                ],
            ],
            [
                'title' => "Quel joueur a été le premier choix de la draft NBA en 2020?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LaMelo Ball', 'isCorrect' => false],
                    ['answerText' => 'Anthony Edwards', 'isCorrect' => true],
                    ['answerText' => 'James Wiseman', 'isCorrect' => false],
                    ['answerText' => 'Obi Toppin', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois LeBron James a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '4', 'isCorrect' => true],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '1', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur est souvent associé au terme 'Splash Brothers'?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Kevin Durant', 'isCorrect' => false],
                    ['answerText' => 'Stephen Curry', 'isCorrect' => true],
                    ['answerText' => 'James Harden', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quelle équipe de la NBA est basée à Toronto?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                    ['answerText' => 'Boston Celtics', 'isCorrect' => false],
                    ['answerText' => 'Toronto Raptors', 'isCorrect' => true],
                    ['answerText' => 'Golden State Warriors', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de rebonds en carrière en saison régulière?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Dennis Rodman', 'isCorrect' => false],
                    ['answerText' => 'Shaquille O\'Neal', 'isCorrect' => false],
                    ['answerText' => 'Hakeem Olajuwon', 'isCorrect' => false],
                    ['answerText' => 'Kareem Abdul-Jabbar', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Quel entraîneur de la NBA est également surnommé 'Pop'?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Erik Spoelstra', 'isCorrect' => false],
                    ['answerText' => 'Steve Kerr', 'isCorrect' => false],
                    ['answerText' => 'Doc Rivers', 'isCorrect' => false],
                    ['answerText' => 'Gregg Popovich', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de fois Shaquille O'Neal a-t-il remporté le titre de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => 'Aucun', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Qui est le seul joueur à avoir remporté le titre de MVP de la saison régulière avec les Bulls de Chicago autre que Michael Jordan?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Scottie Pippen', 'isCorrect' => true],
                    ['answerText' => 'Dennis Rodman', 'isCorrect' => false],
                    ['answerText' => 'Horace Grant', 'isCorrect' => false],
                    ['answerText' => 'Steve Kerr', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de trophées de Défenseur de l'année?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Dwight Howard', 'isCorrect' => false],
                    ['answerText' => 'Rudy Gobert', 'isCorrect' => true],
                    ['answerText' => 'Kawhi Leonard', 'isCorrect' => false],
                    ['answerText' => 'Ben Wallace', 'isCorrect' => false],
                ],
            ],
            [
                'title' => "Qui est le joueur actuel avec le plus grand nombre de triple-doubles en carrière?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Russell Westbrook', 'isCorrect' => true],
                    ['answerText' => 'James Harden', 'isCorrect' => false],
                    ['answerText' => 'Luka Dončić', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a connu la plus longue série de victoires consécutives en NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Golden State Warriors', 'isCorrect' => false],
                    ['answerText' => 'Chicago Bulls', 'isCorrect' => false],
                    ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                    ['answerText' => 'Los Angeles Lakers de 1971-1972', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de NBA Finals MVP avec les Lakers de Los Angeles?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Magic Johnson', 'isCorrect' => false],
                    ['answerText' => 'Kareem Abdul-Jabbar', 'isCorrect' => false],
                    ['answerText' => 'Kobe Bryant', 'isCorrect' => true],
                    ['answerText' => 'Shaquille O\'Neal', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de points Michael Jordan a-t-il marqués dans son dernier match en NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '45', 'isCorrect' => false],
                    ['answerText' => '51', 'isCorrect' => false],
                    ['answerText' => '55', 'isCorrect' => false],
                    ['answerText' => '60', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Qui a remporté le trophée de Joueur le Plus Amélioré (MIP) en 2021?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Zach LaVine', 'isCorrect' => false],
                    ['answerText' => 'Bam Adebayo', 'isCorrect' => false],
                    ['answerText' => 'Jerami Grant', 'isCorrect' => true],
                    ['answerText' => 'Christian Wood', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur est surnommé 'The Joker'?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Nikola Jokic', 'isCorrect' => true],
                    ['answerText' => 'Joel Embiid', 'isCorrect' => false],
                    ['answerText' => 'Kristaps Porziņģis', 'isCorrect' => false],
                    ['answerText' => 'Giannis Antetokounmpo', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois les Spurs de San Antonio ont-ils remporté le championnat NBA sous l'entraîneur Gregg Popovich?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '4', 'isCorrect' => true],
                    ['answerText' => '5', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '6', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de contres en une seule saison?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Rudy Gobert', 'isCorrect' => false],
                    ['answerText' => 'Hakeem Olajuwon', 'isCorrect' => true],
                    ['answerText' => 'Dikembe Mutombo', 'isCorrect' => false],
                    ['answerText' => 'Shaquille O\'Neal', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le premier Slam Dunk Contest de la NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Dominique Wilkins', 'isCorrect' => false],
                    ['answerText' => 'Spud Webb', 'isCorrect' => false],
                    ['answerText' => 'Michael Jordan', 'isCorrect' => true],
                    ['answerText' => 'Clyde Drexler', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois les Miami Heat ont-ils remporté le championnat NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => true],
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '0', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de titres NBA les Houston Rockets ont-ils remportés?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Qui est le seul joueur à avoir remporté le titre de Rookie de l'Année et le MVP de la saison régulière la même année?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Tim Duncan', 'isCorrect' => false],
                    ['answerText' => 'Wilt Chamberlain', 'isCorrect' => false],
                    ['answerText' => 'Derrick Rose', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Quel joueur a été sélectionné en première position lors de la draft de la NBA en 2009?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Stephen Curry', 'isCorrect' => false],
                    ['answerText' => 'Blake Griffin', 'isCorrect' => true],
                    ['answerText' => 'James Harden', 'isCorrect' => false],
                    ['answerText' => 'John Wall', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois Kobe Bryant a-t-il été sélectionné dans l'équipe All-NBA au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '15', 'isCorrect' => true],
                    ['answerText' => '10', 'isCorrect' => false],
                    ['answerText' => '12', 'isCorrect' => false],
                    ['answerText' => '18', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le plus grand nombre de titres de division dans l'histoire de la NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Boston Celtics', 'isCorrect' => false],
                    ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                    ['answerText' => 'Chicago Bulls', 'isCorrect' => false],
                    ['answerText' => 'San Antonio Spurs', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de triple-doubles en une seule saison?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Magic Johnson', 'isCorrect' => false],
                    ['answerText' => 'Russell Westbrook', 'isCorrect' => false],
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Oscar Robertson', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de points Michael Jordan a-t-il marqués en moyenne par match au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '30.1', 'isCorrect' => true],
                    ['answerText' => '28.2', 'isCorrect' => false],
                    ['answerText' => '32.5', 'isCorrect' => false],
                    ['answerText' => '27.0', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le plus grand nombre de championnats NBA dans les années 1960?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Boston Celtics', 'isCorrect' => true],
                    ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                    ['answerText' => 'Chicago Bulls', 'isCorrect' => false],
                    ['answerText' => 'Philadelphia 76ers', 'isCorrect' => false],
                ],
            ],
            [
                'title' => "Qui est le seul joueur à avoir remporté le MVP des Finales NBA avec trois équipes différentes?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Magic Johnson', 'isCorrect' => false],
                    ['answerText' => 'Kareem Abdul-Jabbar', 'isCorrect' => true],
                    ['answerText' => 'Larry Bird', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de points a marqué Kobe Bryant dans son dernier match en carrière?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '50', 'isCorrect' => false],
                    ['answerText' => '61', 'isCorrect' => false],
                    ['answerText' => '81', 'isCorrect' => true],
                    ['answerText' => '101', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a détenu le record du plus grand nombre de points marqués en une seule saison avant Wilt Chamberlain?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ['answerText' => 'Kobe Bryant', 'isCorrect' => false],
                    ['answerText' => 'Elgin Baylor', 'isCorrect' => true],
                    ['answerText' => 'Karl Malone', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui est le seul joueur à avoir remporté le titre de MVP de la saison régulière avec les Warriors de Golden State?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Stephen Curry', 'isCorrect' => true],
                    ['answerText' => 'Kevin Durant', 'isCorrect' => false],
                    ['answerText' => 'Klay Thompson', 'isCorrect' => false],
                    ['answerText' => 'Draymond Green', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois Larry Bird a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => true],
                    ['answerText' => '4', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui a remporté le NBA Finals MVP en 2019?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Kevin Durant', 'isCorrect' => false],
                    ['answerText' => 'Kawhi Leonard', 'isCorrect' => true],
                    ['answerText' => 'Stephen Curry', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quelle équipe détient le record du plus grand nombre de victoires en une saison régulière?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Chicago Bulls', 'isCorrect' => false],
                    ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                    ['answerText' => 'Golden State Warriors', 'isCorrect' => true],
                    ['answerText' => 'Boston Celtics', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de NBA Finals MVP?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ['answerText' => 'Kobe Bryant', 'isCorrect' => false],
                    ['answerText' => 'LeBron James', 'isCorrect' => true],
                    ['answerText' => 'Magic Johnson', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de points a marqué Wilt Chamberlain lors de son célèbre match où il a marqué 100 points?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '81', 'isCorrect' => false],
                    ['answerText' => '90', 'isCorrect' => false],
                    ['answerText' => '100', 'isCorrect' => true],
                    ['answerText' => '110', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a été choisi en première position lors de la draft de la NBA en 2003?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Chris Bosh', 'isCorrect' => false],
                    ['answerText' => 'Dwyane Wade', 'isCorrect' => false],
                    ['answerText' => 'Carmelo Anthony', 'isCorrect' => false],
                    ['answerText' => 'LeBron James', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de franchises NBA ont remporté au moins un championnat?",
                'category_id' => 1,
                'level_id' => 2,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '28', 'isCorrect' => false],
                    ['answerText' => '30', 'isCorrect' => true],
                    ['answerText' => '32', 'isCorrect' => false],
                    ['answerText' => '26', 'isCorrect' => false],
                ],
            ],
            [
                'title' => "Qui détient le record du plus grand nombre de rebonds en carrière en saison régulière?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Dwight Howard', 'isCorrect' => false],
                    ['answerText' => 'Wilt Chamberlain', 'isCorrect' => true],
                    ['answerText' => 'Kareem Abdul-Jabbar', 'isCorrect' => false],
                    ['answerText' => 'Bill Russell', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a été surnommé 'The Dream' et a remporté deux championnats NBA avec les Rockets de Houston?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Shaquille O\'Neal', 'isCorrect' => false],
                    ['answerText' => 'Hakeem Olajuwon', 'isCorrect' => true],
                    ['answerText' => 'David Robinson', 'isCorrect' => false],
                    ['answerText' => 'Tim Duncan', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "En quelle année Michael Jordan a-t-il pris sa retraite pour la première fois?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1996', 'isCorrect' => false],
                    ['answerText' => '1999', 'isCorrect' => false],
                    ['answerText' => '2003', 'isCorrect' => false],
                    ['answerText' => '1993', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le premier championnat de la NBA?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Boston Celtics', 'isCorrect' => false],
                    ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                    ['answerText' => 'Chicago Bulls', 'isCorrect' => false],
                    ['answerText' => 'Philadelphia Warriors', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Qui a remporté le trophée de Joueur le Plus Amélioré (MIP) en 2020?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Bam Adebayo', 'isCorrect' => true],
                    ['answerText' => 'Brandon Ingram', 'isCorrect' => false],
                    ['answerText' => 'Luka Dončić', 'isCorrect' => false],
                    ['answerText' => 'Pascal Siakam', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois LeBron James a-t-il remporté le titre de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 1,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '4', 'isCorrect' => false],
                    ['answerText' => '5', 'isCorrect' => true],
                    ['answerText' => '6', 'isCorrect' => false],
                ],
            ],
            [
                'title' => "Quel joueur a remporté le plus grand nombre de trophées de Défenseur de l'année?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Dwight Howard', 'isCorrect' => false],
                    ['answerText' => 'Kawhi Leonard', 'isCorrect' => true],
                    ['answerText' => 'Rudy Gobert', 'isCorrect' => false],
                    ['answerText' => 'Ben Wallace', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur de la NBA détient le record du plus grand nombre de triple-doubles en carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Magic Johnson', 'isCorrect' => false],
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Russell Westbrook', 'isCorrect' => true],
                    ['answerText' => 'Oscar Robertson', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de titres NBA Michael Jordan a-t-il remportés avec les Chicago Bulls?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '4', 'isCorrect' => false],
                    ['answerText' => '5', 'isCorrect' => false],
                    ['answerText' => '6', 'isCorrect' => true],
                    ['answerText' => '7', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de paniers à trois points marqués en une seule saison?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Stephen Curry', 'isCorrect' => true],
                    ['answerText' => 'Ray Allen', 'isCorrect' => false],
                    ['answerText' => 'Klay Thompson', 'isCorrect' => false],
                    ['answerText' => 'Reggie Miller', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le premier championnat NBA après le changement de nom de la ligue?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Los Angeles Lakers', 'isCorrect' => false],
                    ['answerText' => 'Golden State Warriors', 'isCorrect' => false],
                    ['answerText' => 'San Antonio Spurs', 'isCorrect' => false],
                    ['answerText' => 'Miami Heat', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de fois Kobe Bryant a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '4', 'isCorrect' => true],
                    ['answerText' => '5', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de meilleur marqueur de la saison?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Kareem Abdul-Jabbar', 'isCorrect' => true],
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Kevin Durant', 'isCorrect' => false],
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "En quelle année la NBA a-t-elle introduit la règle des 24 secondes pour les possessions offensives?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1954', 'isCorrect' => true],
                    ['answerText' => '1962', 'isCorrect' => false],
                    ['answerText' => '1978', 'isCorrect' => false],
                    ['answerText' => '1986', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de passes décisives en une seule saison?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Magic Johnson', 'isCorrect' => false],
                    ['answerText' => 'John Stockton', 'isCorrect' => true],
                    ['answerText' => 'Chris Paul', 'isCorrect' => false],
                    ['answerText' => 'Steve Nash', 'isCorrect' => false],
                ],
            ],
            [
                'title' => "Quel joueur a été surnommé 'The Mailman' et a joué la majeure partie de sa carrière avec le Jazz de l'Utah?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Shaquille O\'Neal', 'isCorrect' => false],
                    ['answerText' => 'Karl Malone', 'isCorrect' => true],
                    ['answerText' => 'Tim Duncan', 'isCorrect' => false],
                    ['answerText' => 'Hakeem Olajuwon', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois Bill Russell a-t-il remporté le MVP des Finales NBA au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '7', 'isCorrect' => false],
                    ['answerText' => '9', 'isCorrect' => false],
                    ['answerText' => '11', 'isCorrect' => true],
                    ['answerText' => '13', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ['answerText' => 'Bill Russell', 'isCorrect' => false],
                    ['answerText' => 'Kareem Abdul-Jabbar', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en une seule saison en moyenne par match?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Wilt Chamberlain', 'isCorrect' => false],
                    ['answerText' => 'Elgin Baylor', 'isCorrect' => false],
                    ['answerText' => 'Kobe Bryant', 'isCorrect' => false],
                    ['answerText' => 'James Harden', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de fois Michael Jordan a-t-il été sélectionné dans l'équipe All-NBA au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '10', 'isCorrect' => false],
                    ['answerText' => '11', 'isCorrect' => false],
                    ['answerText' => '12', 'isCorrect' => true],
                    ['answerText' => '13', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de MVP de la saison régulière consécutifs?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Magic Johnson', 'isCorrect' => false],
                    ['answerText' => 'Larry Bird', 'isCorrect' => false],
                    ['answerText' => 'Karl Malone', 'isCorrect' => false],
                    ['answerText' => 'Bill Russell', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de tirs à trois points réussis en une seule saison?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Stephen Curry', 'isCorrect' => false],
                    ['answerText' => 'Ray Allen', 'isCorrect' => false],
                    ['answerText' => 'Klay Thompson', 'isCorrect' => true],
                    ['answerText' => 'Reggie Miller', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois Karl Malone a-t-il mené la NBA en points par match au cours de sa carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => true],
                    ['answerText' => '4', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le plus grand nombre de titres de la division Nord-Ouest?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Denver Nuggets', 'isCorrect' => false],
                    ['answerText' => 'Utah Jazz', 'isCorrect' => false],
                    ['answerText' => 'Portland Trail Blazers', 'isCorrect' => true],
                    ['answerText' => 'Minnesota Timberwolves', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en une seule mi-temps de playoffs?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ['answerText' => 'Kobe Bryant', 'isCorrect' => true],
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Wilt Chamberlain', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois Shaquille O'Neal a-t-il remporté le titre de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '0', 'isCorrect' => true],
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de MVP des Finales NBA consécutifs?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Magic Johnson', 'isCorrect' => false],
                    ['answerText' => 'Larry Bird', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de fois Russell Westbrook a-t-il mené la NBA en triple-doubles en une saison?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '4', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en un seul quart-temps?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Klay Thompson', 'isCorrect' => false],
                    ['answerText' => 'Kobe Bryant', 'isCorrect' => false],
                    ['answerText' => 'Wilt Chamberlain', 'isCorrect' => false],
                    ['answerText' => 'George Gervin', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de fois Michael Jordan a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '4', 'isCorrect' => false],
                    ['answerText' => '5', 'isCorrect' => false],
                    ['answerText' => '6', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de MVP de la saison régulière en carrière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Kareem Abdul-Jabbar', 'isCorrect' => false],
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ['answerText' => 'Bill Russell', 'isCorrect' => true],
                ],
            ],
            [
                'title' => "Combien de fois LeBron James a-t-il mené la NBA en points par match en saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => true],
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '4', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de rebonds en carrière en playoffs NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Tim Duncan', 'isCorrect' => false],
                    ['answerText' => 'Wilt Chamberlain', 'isCorrect' => false],
                    ['answerText' => 'Shaquille O\'Neal', 'isCorrect' => false],
                    ['answerText' => 'Bill Russell', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de fois Larry Bird a-t-il remporté le titre de MVP des Finales NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => true],
                    ['answerText' => '4', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quelle équipe a remporté le plus grand nombre de titres de la division Atlantique?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Boston Celtics', 'isCorrect' => true],
                    ['answerText' => 'Toronto Raptors', 'isCorrect' => false],
                    ['answerText' => 'Philadelphia 76ers', 'isCorrect' => false],
                    ['answerText' => 'New York Knicks', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en un seul quart-temps de playoffs?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ['answerText' => 'Kobe Bryant', 'isCorrect' => true],
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Wilt Chamberlain', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois Kareem Abdul-Jabbar a-t-il remporté le titre de MVP de la saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '5', 'isCorrect' => false],
                    ['answerText' => '6', 'isCorrect' => false],
                    ['answerText' => '7', 'isCorrect' => true],
                    ['answerText' => '8', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Quel joueur a remporté le plus grand nombre de titres de Défenseur de l'année en NBA?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'Dwight Howard', 'isCorrect' => false],
                    ['answerText' => 'Rudy Gobert', 'isCorrect' => false],
                    ['answerText' => 'Ben Wallace', 'isCorrect' => true],
                    ['answerText' => 'Kawhi Leonard', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Combien de fois Kevin Durant a-t-il remporté le titre de meilleur marqueur de la saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '3', 'isCorrect' => false],
                    ['answerText' => '4', 'isCorrect' => true],
                    ['answerText' => '5', 'isCorrect' => false],
                    ['answerText' => '6', 'isCorrect' => false],
                ],
            ],

            [
                'title' => "Qui détient le record du plus grand nombre de points marqués en un seul match de playoffs?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => 'LeBron James', 'isCorrect' => false],
                    ['answerText' => 'Michael Jordan', 'isCorrect' => false],
                    ['answerText' => 'Kobe Bryant', 'isCorrect' => false],
                    ['answerText' => 'Allen Iverson', 'isCorrect' => true],
                ],
            ],

            [
                'title' => "Combien de fois Kobe Bryant a-t-il mené la NBA en points par match en saison régulière?",
                'category_id' => 1,
                'level_id' => 3,
                'univer_id' => 3,
                'answers' => [
                    ['answerText' => '1', 'isCorrect' => false],
                    ['answerText' => '2', 'isCorrect' => false],
                    ['answerText' => '3', 'isCorrect' => true],
                    ['answerText' => '4', 'isCorrect' => false],
                ],
            ],

        ];

        foreach ($questionsData as $questionData) {
            $category = Category::where('id', $questionData['category_id'])->firstOrFail();
            $level = Level::find($questionData['level_id']);
            $univer = Univer::where('id', $questionData['univer_id'])->firstOrFail();

            $createdQuestion = Question::create([
                'questionTitle' => $questionData['title'],
                'level_id' => $level->id,
                'category_id' => $category->id,
                'univer_id' => $univer->id,
            ]);

            // Ajout manuel des réponses à la question
            foreach ($questionData['answers'] as $answer) {
                Answer::create([
                    'question_id' => $createdQuestion->id,
                    'answerText' => $answer['answerText'],
                    'isCorrect' => $answer['isCorrect'],
                ]);
            }
        }
    }
}

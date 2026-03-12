<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');

    $correctAnswersCount = 0;
    $roundsToWin = 3;

    for ($i = 0; $i < $roundsToWin; $i++) {
        $question = rand(1, 100);
        $correctAnswer = ($question % 2 === 0) ? 'yes' : 'no';

        line("Question: {$question}");
        $userAnswer = prompt("Your answer");

        if ($userAnswer === $correctAnswer) {
            line("Correct!");
            $correctAnswersCount++;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return; // Завершаем игру при ошибке
        }
    }

    line("Congratulations, {$name}!");
}

<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function run(string $description, array $rounds)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($description);

    foreach ($rounds as [$question, $correctAnswer]) {
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");

        if ($userAnswer === (string) $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }

    line("Congratulations, {$name}!");
}

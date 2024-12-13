<?php

$questions = [
    ['question' => 'What is 50 + 50?', 'correct' => '100'],
    ['question' => 'What is the capital of Bangladesh?', 'correct' => 'Dhaka'],
    ['question' => 'What is your best friend\'s name?', 'correct' => 'Miraz'],
];

// Collect answers
$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}

// Function to evaluate
function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}

// Calculate score
$score = evaluateQuiz($questions, $answers);

echo "\nYou scored $score out of " . count($questions) . "\n";

if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > 1) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}

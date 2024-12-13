<?php
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'shakespeare'],
];

$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}

// Evaluate Function---------------------
function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;

    foreach ($questions as $index => $question) {
        if (strtolower($answers[$index]) === strtolower($question['correct'])) {
            $score++;
        }
    }
    return $score;
}

// Calculate score -------------
$score = evaluateQuiz($questions, $answers);

echo "\nYou scored $score out of " . count($questions) . "\n";

if ($score === count($questions)) {
    echo "Excellent Job\n";
} elseif ($score > 1) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}
?>

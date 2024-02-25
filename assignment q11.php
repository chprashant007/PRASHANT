<?php
$userAnswers = array("A", "B", "C", "D", "A"); 
$correctAnswers = array("A", "B", "C", "D", "A"); 
$score = 0;
for ($i = 0; $i < count($userAnswers); $i++) {
    if ($userAnswers[$i] === $correctAnswers[$i]) {
        $score++;
    }
}
echo "User's Score: " . $score . "/" . count($userAnswers);
?>
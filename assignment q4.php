<?php
$score = 85;
if ($score < 60) {
    echo "Grade: F";
} elseif ($score >= 60 && $score <= 70) {
    echo "Grade: D";
} elseif ($score >= 71 && $score <= 80) {
    echo "Grade: C";
} elseif ($score >= 81 && $score <= 90) {
    echo "Grade: B";
} elseif ($score > 90) {
    echo "Grade: A";
} else {
    echo "Invalid score";
}
?>
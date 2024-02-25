<?php
$stepsWalked = 7500;
if ($stepsWalked < 5000) {
    echo "Fitness level: Beginner";
} elseif ($stepsWalked >= 5000 && $stepsWalked <= 10000) {
    echo "Fitness level: Intermediate";
} elseif ($stepsWalked > 12000) {
    echo "Fitness level: Advanced";
} else {
    echo "Invalid input";
}
?>
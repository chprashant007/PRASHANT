<?php
$userAccountType = "premium"; 
if ($userAccountType === "premium") {
    echo "Welcome Premium User!";
} elseif ($userAccountType === "basic") {
    echo "Welcome Basic User!";
} else {
    echo "Invalid account type";
}
?>
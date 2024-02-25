<?php
$storedUsername = "user123";
$storedPassword = "password123";
$providedUsername = "user123";
$providedPassword = "password123";
if ($providedUsername === $storedUsername && $providedPassword === $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid credentials";
}
?>
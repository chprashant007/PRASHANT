<?php
$articleTitle = "This is a very long article title that exceeds the 50 characters limit"; 
if (strlen($articleTitle) > 50) {
    $truncatedTitle = substr($articleTitle, 0, 50) . "...";
    echo "Truncated Article Title: " . $truncatedTitle;
} else {
    echo "Article Title: " . $articleTitle;
}
?>
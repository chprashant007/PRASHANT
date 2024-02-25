<?php
$cartItems = array(
    'item1' => 1500,
    'item2' => 2000,
    'item3' => 3500
);
$totalPrice = array_sum($cartItems);
if ($totalPrice > 5000) {
    $discountedPrice = $totalPrice * 0.9;
    echo "Total Price: Rs. $totalPrice\n";
    echo "Discounted Price (10% off): Rs. $discountedPrice\n";
} else {
    echo "Original Price: Rs. $totalPrice\n";
}
?>

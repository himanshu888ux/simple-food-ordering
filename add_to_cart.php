<?php
session_start();

if(isset($_POST['add_to_cart'])) {
    // Retrieve item details from the form
    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_description = $_POST['item_description'];
    $item_image = $_POST['item_image'];
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1; // Default to 1 if quantity is not provided

    // Create array for the item
    $item = array(
        'id' => $item_id,
        'name' => $item_name,
        'price' => $item_price,
        'description' => $item_description,
        'image' => $item_image,
        'quantity' => $quantity // Set the quantity
    );

    // Check if the item already exists in the cart
    $item_exists = false;
    foreach ($_SESSION['cart'] as $key => $cart_item) {
        if ($cart_item['id'] == $item_id) {
            // Update the quantity of the existing item
            $_SESSION['cart'][$key]['quantity'] += $quantity;
            $item_exists = true;
            break;
        }
    }

    // If the item doesn't exist in the cart, add it
    if (!$item_exists) {
        $_SESSION['cart'][] = $item;
    }

    // Redirect back to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>

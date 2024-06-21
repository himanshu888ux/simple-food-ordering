<?php
session_start();

// Redirect to empty_cart.php if cart is empty
if(empty($_SESSION['cart'])) {
    header("Location: empty_cart.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="pb-5">
    <?php
        include("header.php");
    ?>
    </div>
    <div class="container mt-5 pt-5">
        <h1 class="mb-4">Shopping Cart</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach($_SESSION['cart'] as $key => $item):
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    ?>
                    <tr>
                        <td><img src="project/images/<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" style="max-width: 100px;"></td>
                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['price']; ?>rs</td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td><?php echo $subtotal; ?>rs</td>                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-right">Total</th>
                        <td><?php echo $total; ?>rs</td>
                        <td><a class="btn btn-success text-center" href="# ">Checkout</a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

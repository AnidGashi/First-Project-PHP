<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    echo "User not logged in. Redirecting to signup.";
    header("Location: signup.php");
    exit();
}else {
    echo "User is logged in.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="styleproducts.css">
</head>
<body>
<header>
    <div class="logo">E-shopping</div>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about-us.php">About us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

    <main>
    <section class="products" id="products">
            <h2>All Products </h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/d1b28a62-3d7d-4a51-b116-df533eeba568/d1b28a62-3d7d-4a51-b116-df533eeba568.webp?w=190" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>$19.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/1d907473-5f46-4404-ab2e-282b67350d5d/1d907473-5f46-4404-ab2e-282b67350d5d.webp?w=190" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>$29.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/e46a0414-cd91-4d0a-a34b-7945c5474ba0/e46a0414-cd91-4d0a-a34b-7945c5474ba0.webp?w=190" alt="Product 3">
                    <h3>Product 3</h3>
                    <p>$39.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/ac329dba-458d-4634-b779-9ea04df89d20/ac329dba-458d-4634-b779-9ea04df89d20.webp?w=190" alt="Product 4">
                    <h3>Product 4</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/267406/267406.webp?w=190" alt="Product 4">
                    <h3>Product 5</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/20019c70-bb7f-4965-aa06-ea67ca99161f/20019c70-bb7f-4965-aa06-ea67ca99161f.webp?w=190" alt="Product 4">
                    <h3>Product 6</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/c7c4f598-301d-43ba-8a97-564c2cd26457/c7c4f598-301d-43ba-8a97-564c2cd26457.webp?w=190" alt="Product 4">
                    <h3>Product 7</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/0da37e34-6a85-4075-8d73-1f614af90681/0da37e34-6a85-4075-8d73-1f614af90681.webp?w=190" alt="Product 4">
                    <h3>Product 8</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/0600f198-2315-4997-905a-8725a9d33ff6/0600f198-2315-4997-905a-8725a9d33ff6.webp?w=190" alt="Product 4">
                    <h3>Product 9</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/1b255472-fb08-4d89-a3b1-c672f8d1c06c/1b255472-fb08-4d89-a3b1-c672f8d1c06c.webp?w=190" alt="Product 4">
                    <h3>Product 10</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/8057d1c3-7233-453f-b14c-f42fed2e3552/8057d1c3-7233-453f-b14c-f42fed2e3552.webp?w=190" alt="Product 4">
                    <h3>Product 11</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/ac53e9fc-ee41-48c8-9b08-f694293408d2/ac53e9fc-ee41-48c8-9b08-f694293408d2.webp?w=190" alt="Product 4">
                    <h3>Product 12</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/ed9008ab-954f-4c8f-9ced-f2e089bd82b8/ed9008ab-954f-4c8f-9ced-f2e089bd82b8.webp?w=190" alt="Product 4">
                    <h3>Product 13</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
                <div class="product-card">
                    <img src="https://iqq6kf0xmf.gjirafa.net/images/e414ed46-e0ae-4679-add7-31c4d231dd3b/e414ed46-e0ae-4679-add7-31c4d231dd3b.webp?w=190" alt="Product 4">
                    <h3>Product 14</h3>
                    <p>$49.99</p>
                    <button>Order</button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 E-Shop. All rights reserved.</p>
    </footer>
</body>
</html>

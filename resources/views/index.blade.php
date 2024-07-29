{{-- <form action="/checkout" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Checkout</button>
</form> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .navbar {
            background-color: #007bff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            width: 100%;
            position: fixed;
            top: 0;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-left: 1rem;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #d1ecf1;
        }

        .container {
            background: #fff;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 800px;
            width: 100%;
            margin-top: 5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .product-image {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .product-title {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
            text-align: center;
        }

        .product-description {
            font-size: 1rem;
            color: #555;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .product-price {
            font-size: 1.5rem;
            color: #007bff;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.25rem;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<script src="https://js.stripe.com/v3/"></script>

<body>
    <nav class="navbar">
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/config">Config</a>
            <a href="/admin/transactions">Transaction History</a>
        </div>
    </nav>
    <div class="container">
        <img src="https://via.placeholder.com/600x400" alt="Product Image" class="product-image">
        <h1 class="product-title">Product Title</h1>
        <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, eaque vel odit
            nulla illo doloremque ab. Reiciendis atque provident itaque et esse, eos suscipit tempora, molestias cumque
            voluptatem molestiae ut?</p>
        <p class="product-price">£5.00</p>
        <form action="/checkout" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn">Checkout</button>
        </form>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
</body>

</html>

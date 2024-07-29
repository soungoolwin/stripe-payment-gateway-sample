<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Configuration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }

        .navbar {
            background-color: #007bff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
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
            max-width: 400px;
            width: 100%;
            margin: 2rem auto;
        }

        h1 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            color: #333;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.25);
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
            width: 100%;
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <nav class="navbar">
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/config">Config</a>
            <a href="/admin/transactions">Transaction History</a>
        </div>
    </nav>
    <div class="container">
        <h1>Stripe Configuration</h1>
        <form action="{{ route('config.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="stripe_key">Stripe Key</label>
                <input type="text" id="stripe_key" name="stripe_key" required>
            </div>
            <div class="form-group">
                <label for="stripe_secret">Stripe Secret</label>
                <input type="text" id="stripe_secret" name="stripe_secret" required>
            </div>
            <button type="submit" class="btn">Save</button>
        </form>
    </div>
</body>

</html>

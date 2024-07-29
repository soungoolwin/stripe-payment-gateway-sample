<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007bff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            position: fixed;
            top: 0;
            width: 100%;
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
            padding: 2rem;
            max-width: 1200px;
            margin: 5rem auto 2rem auto;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        table th,
        table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: #fff;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
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
        <h1>Transaction History</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>฿{{ number_format($transaction->amount / 100, 2) }}</td>
                        <td>{{ strtoupper($transaction->currency) }}</td>
                        <td>{{ ucfirst($transaction->status) }}</td>
                        <td>{{ ucfirst($transaction->type) }}</td>
                        <td>{{ \Carbon\Carbon::createFromTimestamp($transaction->created)->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Midtrans Form</title>
</head>
<body>
    <h2>Pembayaran Midtrans</h2>
    <form action="{{ route('midtrans.pay') }}" method="POST">
        @csrf
        <label>Order ID:</label><br>
        <input type="text" name="order_id" required><br><br>
        <label>Amount:</label><br>
        <input type="number" name="amount" required min="1000"><br><br>
        <button type="submit">Bayar Sekarang</button>
    </form>
</body>
</html>

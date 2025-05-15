<!DOCTYPE html>
<html>
<head>
    <title>Bayar dengan Xendit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Form Pembayaran</h2>
    <form action="{{ route('pay') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah (dalam Rupiah)</label>
            <input type="number" name="amount" class="form-control" required min="10000">
        </div>
        <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
    </form>
</body>
</html>

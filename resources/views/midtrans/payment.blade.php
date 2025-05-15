<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Midtrans</title>
    {{-- <script src="https://app.sandbox.midtrans.com/snap/snap.js" --}}
    <script src="{{ config('midtrans.snap_url') }}"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body>
    <h2>Proses Pembayaran</h2>
    <button id="pay-button">Bayar Sekarang</button>

    <script>
        document.getElementById('pay-button').onclick = function () {
            snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    alert("Pembayaran sukses!");
                    console.log(result);
                },
                onPending: function(result) {
                    alert("Menunggu pembayaran...");
                    console.log(result);
                },
                onError: function(result) {
                    alert("Pembayaran gagal");
                    console.log(result);
                }
            });
        };
    </script>
</body>
</html>

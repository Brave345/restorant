<!DOCTYPE html>
<html>
<head>
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config ('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        table {
            width: 400px;
            margin: 0 auto;
            text-align: center;
            background-color: #E6F2F8;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            border: 1px solid #FFF;
        }

        table td:first-child {
            font-weight: bold;
            background-color: #77C3EC;
            color: #FFF;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #77C3EC;
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2266B3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Transaksi Pembayaran</h2>
                <table class="table table-bordered">
                    <tr>
                        <th>Date</th>
                        <td>{{ $reservations->date }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ $reservations->time }}</td>
                    </tr>
                    <tr>
                        <th>People</th>
                        <td>{{ $reservations->people }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $reservations->name }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $reservations->phone }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $reservations->email }}</td>
                    </tr>
                    <tr>
                        <th>Total Pembayaran</th>
                        <td>Rp.{{ $reservations->total_pembayaran }}</td>
                    </tr>
                </table>
                <div class="text-center">
                    <button id="pay-button" class="btn btn-primary">Bayar Sekarang</button>
                    <form action="{{ route('transaksi.destroy', $reservations->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-secondary font-weight-bold text-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')" data-toggle="tooltip" data-original-title="Hapus Artikel">
                            Kembali
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', function () {
            snap.pay("{{$snapToken}}", {
                onSuccess: function (result) {
                    /* You may add your own implementation here */
                    //alert("Pembayaran berhasil!");
                    window.location = "/invoice/{{$reservations->id}}";
                    console.log(result);
                },
                onPending: function (result) {
                    /* You may add your own implementation here */
                    alert("Pembayaran sedang diproses!");
                    console.log(result);
                },
                onError: function (result) {
                    /* You may add your own implementation here */
                    alert("Pembayaran gagal!");
                    console.log(result);
                },
                onClose: function () {
                    /* You may add your own implementation here */
                    alert("Anda menutup pop-up pembayaran tanpa menyelesaikan transaksi.");
                }
            });
        });
    </script>
</body>
</html>
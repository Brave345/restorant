<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            padding: 40px;
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            margin-bottom: 30px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .total-payment {
            font-weight: bold;
        }

        @media print {
            .hidden-print {
                font-size: 0;
                color: transparent;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="invoice-header">
            <h1>Invoice</h1>
            <p style="font-weight: bold; color: red;">WARNING:</p>
            <p style="font-weight: bold; color: red;">Jika Anda menggunakan perangkat seluler, harap ambil tangkapan layar(screenshot) jangan alih-alih mencetaknya atau mendownload PDF nya.</p>
        </div>
        <table class="table">
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
                <th>Total Payment</th>
                <td class="total-payment">Rp.{{ $reservations->total_pembayaran }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $reservations->status }}</td>
            </tr>
        </table>

        <a href="{{ route('reservation') }}" class="btn btn-primary hidden-print">Go to Reservations</a>
        <a href="{{ route('download.invoice.pdf', ['id' => $reservations->id]) }}" class="btn btn-success hidden-print">Download PDF</a>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
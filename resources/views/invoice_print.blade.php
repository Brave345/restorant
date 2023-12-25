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

        .receipt {
            border: 1px solid #ddd;
            padding: 20px;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .receipt-items {
            margin-bottom: 20px;
        }

        .receipt-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .receipt-total {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-weight: bold;
        }

        .hidden-print {
            font-size: 0;
            color: transparent;
        }

        @media print {
            .hidden-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="receipt">
            <div class="receipt-header">
                <h1>Invoice</h1>
            </div>
            <div class="receipt-items">
                <div class="receipt-item">
                    <span>Date:</span>
                    <span>{{ $reservations->date }}</span>
                </div>
                <div class="receipt-item">
                    <span>Time:</span>
                    <span>{{ $reservations->time }}</span>
                </div>
                <div class="receipt-item">
                    <span>People:</span>
                    <span>{{ $reservations->people }}</span>
                </div>
                <div class="receipt-item">
                    <span>Name:</span>
                    <span>{{ $reservations->name }}</span>
                </div>
                <div class="receipt-item">
                    <span>Phone:</span>
                    <span>{{ $reservations->phone }}</span>
                </div>
                <div class="receipt-item">
                    <span>Email:</span>
                    <span>{{ $reservations->email }}</span>
                </div>
            </div>
            <div class="receipt-total">
                <span>Total Payment:</span>
                <span>Rp.{{ $reservations->total_pembayaran }}</span>
            </div>
            <div class="receipt-item">
                <span>Status:</span>
                <span>{{ $reservations->status }}</span>
            </div>
        </div>
        <div class="text-center hidden-print">
            <button onclick="window.print()" class="btn btn-primary">Print</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
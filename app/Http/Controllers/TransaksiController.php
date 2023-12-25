    <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Transaction;
    class TransaksiController extends Controller
    {
        
        public function payment(Request $request)
        {
            $request->validate([
                'reservation_id' => 'required|exists:reservations,id',
                'name' => 'required',
                'date' => 'required|date',
                'time' => 'required',
                'total_pembayaran' => 'required|integer',
            ]);

            $transaction = new Transaction();
            $transaction->reservation_id = $request->reservation_id;
            $transaction->name = $request->name;
            $transaction->date = $request->date;
            $transaction->time = $request->time;
            $transaction->total_pembayaran = $request->total_pembayaran;
            $transaction->save();

            // Optional: You can perform additional actions here, such as updating the reservation status, sending notifications, etc.

            return redirect()->back()->with('success', 'Transaction created successfully.');
        }
    }

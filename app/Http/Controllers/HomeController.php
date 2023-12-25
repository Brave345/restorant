<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Transaction;
use Dompdf\Dompdf;
class HomeController extends Controller
{
    public function index(Request $request){
         // Memeriksa apakah ada data yang cocok dengan tanggal dan waktu yang diinputkan
$existingReservation = Reservation::where('date', $request->date)
    ->where('time', $request->time)
    ->first();

if ($existingReservation) {
    // Jika ada data yang cocok, kembalikan pesan error
    return redirect()->back()->with('error', 'Booking table sudah ada yang pesan silahkan pilih Date dan Time yang lain.');
}
    $blogs = Blog::all();
    $reservations = Reservation::all();
    $currentDate = date('Y-m-d');
    $checkbook = Reservation::where('status', 'Paid')
        ->where('date', '>=', $currentDate)
        ->get();
       return view('home', compact('reservations', 'checkbook', 'blogs'));

    }
    public function menu(){
        return view('menu');
    }

   public function reservation(Request $request)
{
    $reservations = Reservation::all();
    $currentDate = date('Y-m-d');
    $checkbook = Reservation::where('status', 'Paid')
        ->where('date', '>=', $currentDate)
        ->get();

    return view('reservation', compact('reservations', 'checkbook'));
}
    public function gallery(){
       $galleries = Gallery::all();
        return view('gallery', compact('galleries'));
    }

    public function about(){
        
        $articles = Article::all();
        return view('about', compact('articles'));
    }

    public function blog(){
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
    public function blogdetail(){
        $blogs = Blog::all();
        return view('blog-detail', compact('blogs'));
    }

    public function contact(){
        return view('contact');
    }
    public function transaksi(Request $request){
        // Memeriksa apakah ada data yang cocok dengan tanggal dan waktu yang diinputkan
        $existingReservation = Reservation::where('date', $request->date)
        ->where('time', $request->time)
        ->where('status', 'Paid')
        ->first();
        if ($existingReservation) {
            // Jika ada data yang cocok dengan tanggal, waktu, dan status "Paid", kembalikan pesan error
            return redirect()->back()->with('error', 'Booking table sudah ada yang pesan silahkan pilih Date dan Time yang lain.');
        }

        $request->request->add(['status' => 'Unpaid']) ;
        
        $reservations = Reservation::create($request->all());
  
// Set your Merchant Server Key
\Midtrans\Config::$serverKey = config('midtrans.server_key');
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' =>  $reservations->id,
        'gross_amount' =>  $reservations->total_pembayaran,
    ),
    'customer_details' => array(
        'name' => $request->name,
        'people' => $request->people,
        'email' => $request->email,
        'phone' => $request->phone,
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
//dd($snapToken);
        return view('transaksi', compact('snapToken','reservations'));
    }
    public function callback(Request $request)
{
    $serverKey = config('midtrans.server_key');
    $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    if ($hashed == $request->signature_key) {
        if ($request->transaction_status == 'capture') {
            $reservations = Reservation::find($request->order_id);
            if ($reservations) {
                $reservations->status = 'Paid';
                $reservations->save();
            }
        }
    }
}   
    public function invoice($id){
        $reservations = Reservation::find($id);
        return view('invoice', compact('reservations'));
    }
   public function downloadInvoicePDF($id)
{
    $reservations = Reservation::find($id); // Sesuaikan dengan model dan nama tabel yang Anda gunakan

    $data = [
        'reservations' => $reservations,
    ];

    $html = view('invoice_data', $data)->render();

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    return $dompdf->stream('invoice.pdf');
}
        public function destroy($id)
    {
        $reservations = Reservation::findOrFail($id);
        $reservations->delete();

        return redirect('/')->with('success', 'transaksi berhasil dihapus.');
    }
     public function payment(Request $request)
    {
        $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'name' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'total_pembayaran' => 'required|integer',
        ]);

        $reservationId = $request->reservation_id;
        $name = $request->name;
        $date = $request->date;
        $time = $request->time;
        $totalPembayaran = $request->total_pembayaran;

        // Gunakan data yang diambil dari formulir sebelumnya sesuai kebutuhan Anda, misalnya untuk menampilkan di view atau menyimpan ke database.

        $transaction = new Transaction();
        $transaction->reservation_id = $reservationId;
        $transaction->name = $name;
        $transaction->date = $date;
        $transaction->time = $time;
        $transaction->total_pembayaran = $totalPembayaran;
        $transaction->save();

        // Optional: Anda dapat melakukan tindakan tambahan di sini, seperti memperbarui status reservasi, mengirim notifikasi, dll.

        return redirect()->back()->with('success', 'Transaction created successfully.');
    }
    public function showInvoice($id)
    {
        $reservation = Reservation::find($id);

        return view('invoice_print', ['reservations' => $reservation]);
    }
    public function comen(){
        $comments = Comment::all();

        return view('comen', compact('comments'));
        
    }

    public function transaksis(){
        $reservations = Reservation::all();
        return view('transaksis.index', compact('reservations'));
    }
     public function transaksiPDF()
{
    $reservations = Reservation::all();

    $data = [
        'reservations' => $reservations,
    ];

    $html = view('transaksis.transaksi_pdf', $data)->render();

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    return $dompdf->stream('data_transaksi.pdf');
}
   
}

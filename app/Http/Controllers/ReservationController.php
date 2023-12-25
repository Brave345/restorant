<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('booking.index', compact('reservations'));
    }

    public function booking(Request $request)
    {
        $date = $request->input('date');
        $time = $request->input('time');

        // Memeriksa apakah pemesanan dengan tanggal dan waktu yang sama sudah ada
        if ($this->isBookingExists($date, $time)) {
            return redirect()->back()->with('error', 'Maaf, tanggal dan waktu tersebut sudah dipesan. Silakan pilih tanggal dan waktu lain.');
        }

        $reservation = new Reservation;
        $reservation->date = $date;
        $reservation->time = $time;
        $reservation->people = $request->input('people');
        $reservation->name = $request->input('name');
        $reservation->phone = $request->input('phone');
        $reservation->email = $request->input('email');
        $reservation->total_pembayaran = $request->input('total_pembayaran');
        $reservation->save();

        return redirect()->route('reservation')->with('success', 'Booking berhasil ditambahkan.');
    }

    // Fungsi untuk memeriksa apakah pemesanan dengan tanggal dan waktu yang sama sudah ada
    private function isBookingExists($date, $time)
    {
        $existingBooking = Reservation::where('date', $date)->where('time', $time)->first();

        return $existingBooking !== null;
    }

    public function destroy($id)
    {
        $reservations = Reservation::findOrFail($id);
        $reservations->delete();

        return redirect()->route('booking.index')
            ->with('success', 'reservation berhasil dihapus.');
    }
    
}

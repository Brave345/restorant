<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Reservation;
class AdminController extends Controller
{
    public function index(Request $request)
{
    $userCount = User::where('level', 1)->count();
    $articleCount = Article::count();
    $articles = Article::all();
    $reservations = Reservation::all();
    $reservationsUnpaid  = Reservation::where('status', 'Unpaid')->get();
    $totalBooking =  $reservationsUnpaid->count();
    $reservationsPaid  = Reservation::where('status', 'Paid')->get();
    $totalPembayaran = $reservationsPaid ->sum('total_pembayaran');
    $totalTransaksi =  $reservationsPaid->count();

    return view('admin.home_admin', compact('userCount', 'articleCount', 'articles', 'reservations', 'totalPembayaran', 'totalTransaksi', 'totalBooking'));
}
    
}

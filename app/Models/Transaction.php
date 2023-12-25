<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['reservation_id', 'name', 'date', 'time', 'total_pembayaran'];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}

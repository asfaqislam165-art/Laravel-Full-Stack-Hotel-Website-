<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {
    protected $fillable = [
        'user_id', 'room_id', 'guest_name', 'email', 'phone', 
        'check_in', 'check_out', 'guests_count', 'special_requests', 'status'
    ];

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
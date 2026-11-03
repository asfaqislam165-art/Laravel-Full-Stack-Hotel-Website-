<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Facility;
use App\Models\Booking;
use App\Models\User;

class AdminController extends Controller {
    public function dashboard() {
        $roomCount = Room::count();
        $facilityCount = Facility::count();
        $bookingCount = Booking::count();
        $userCount = User::where('usertype', 'user')->count();

        return view('admin.dashboard', compact('roomCount', 'facilityCount', 'bookingCount', 'userCount'));
    }
}
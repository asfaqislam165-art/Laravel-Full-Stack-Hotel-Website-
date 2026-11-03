<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller {
    public function index() {
        $bookings = Booking::with('room')->latest()->get();
        return view('admin.bookings', compact('bookings'));
    }

    public function updateStatus(Request $request, $id) {
        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return redirect()->back()->with('status', 'Booking status updated successfully!');
    }

    public function destroy($id) {
        Booking::findOrFail($id)->delete();
        return redirect()->back()->with('status', 'Booking record removed successfully!');
    }
}
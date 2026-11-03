<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Facility;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function home(Request $request) {
        if ($request->user() && $request->user()->usertype === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        $rooms = Room::take(4)->get();
        $facilities = Facility::take(3)->get();
        return view('home', compact('rooms', 'facilities'));
    }

    public function index(Request $request) {
        if ($request->user() && $request->user()->usertype === 'admin') {
            return view('admin.dashboard');
        }
        $userBookings = Booking::where('user_id', Auth::id())->latest()->get();
        return view('dashboard', compact('userBookings'));
    }

    public function rooms() {
        return view('rooms', ['rooms' => Room::all()]);
    }

    public function facilities() {
        return view('facilities', ['facilities' => Facility::all()]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function bookingForm() {
        return view('booking', ['rooms' => Room::all()]);
    }

    public function storeBooking(Request $request) {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'guest_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'guests_count' => 'required|integer|min:1',
            'special_requests' => 'nullable|string',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'room_id' => $request->room_id,
            'guest_name' => $request->guest_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'guests_count' => $request->guests_count,
            'special_requests' => $request->special_requests,
            'status' => 'Pending',
        ]);

        return redirect()->route('booking')->with('status', 'Suite reservation placed successfully!');
    }
}
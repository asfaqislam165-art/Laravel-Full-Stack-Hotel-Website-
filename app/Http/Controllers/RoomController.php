<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RoomController extends Controller {
    public function index() {
        return view('admin.rooms', ['rooms' => Room::latest()->get()]);
    }

    public function create() {
        return view('admin.add-room');
    }

    public function store(Request $request) {
        $request->validate([
            'room_number' => 'required|string|max:50',
            'room_type' => 'required|string|max:255',
            'price_per_night' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $room = new Room($request->only(['room_number', 'room_type', 'price_per_night', 'description']));

        if ($request->hasFile('image')) {
            $imagename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $room->image = $imagename;
        }

        $room->save();

        return redirect()->route('admin.rooms.index')->with('status', 'Room created successfully!');
    }

    public function edit($id) {
        return view('admin.update-room', ['room' => Room::findOrFail($id)]);
    }

    public function update(Request $request, $id) {
        $room = Room::findOrFail($id);
        $room->fill($request->only(['room_number', 'room_type', 'price_per_night', 'description']));

        if ($request->hasFile('image')) {
            if ($room->image && File::exists(public_path('img/' . $room->image))) {
                File::delete(public_path('img/' . $room->image));
            }
            $imagename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $room->image = $imagename;
        }

        $room->save();

        return redirect()->route('admin.rooms.index')->with('status', 'Room updated successfully!');
    }

    public function destroy($id) {
        $room = Room::findOrFail($id);
        if ($room->image && File::exists(public_path('img/' . $room->image))) {
            File::delete(public_path('img/' . $room->image));
        }
        $room->delete();

        return redirect()->route('admin.rooms.index')->with('status', 'Room deleted successfully!');
    }
}
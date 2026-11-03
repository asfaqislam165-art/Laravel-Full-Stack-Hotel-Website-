<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FacilityController extends Controller {
    public function index() {
        return view('admin.facilities', ['facilities' => Facility::latest()->get()]);
    }

    public function create() {
        return view('admin.add-facility');
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required|string', 'description' => 'required|string']);
        $facility = new Facility($request->only(['name', 'description']));

        if ($request->hasFile('image')) {
            $imagename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $facility->image = $imagename;
        }

        $facility->save();

        return redirect()->route('admin.facilities.index')->with('status', 'Facility created successfully!');
    }

    public function edit($id) {
        return view('admin.update-facility', ['facility' => Facility::findOrFail($id)]);
    }

    public function update(Request $request, $id) {
        $facility = Facility::findOrFail($id);
        $facility->fill($request->only(['name', 'description']));

        if ($request->hasFile('image')) {
            if ($facility->image && File::exists(public_path('img/' . $facility->image))) {
                File::delete(public_path('img/' . $facility->image));
            }
            $imagename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img'), $imagename);
            $facility->image = $imagename;
        }

        $facility->save();

        return redirect()->route('admin.facilities.index')->with('status', 'Facility updated successfully!');
    }

    public function destroy($id) {
        $facility = Facility::findOrFail($id);
        if ($facility->image && File::exists(public_path('img/' . $facility->image))) {
            File::delete(public_path('img/' . $facility->image));
        }
        $facility->delete();

        return redirect()->route('admin.facilities.index')->with('status', 'Facility deleted successfully!');
    }
}
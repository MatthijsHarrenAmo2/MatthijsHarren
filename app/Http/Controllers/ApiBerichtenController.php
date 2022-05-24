<?php

namespace App\Http\Controllers;

use App\Models\Gebruikers;
use App\Models\Berichten;
use Illuminate\Http\Request;

class ApiBerichtenController extends Controller
{
    public function ShowAll() {
        return Berichten::all();
    }
    public function Show(Berichten $berichten) {
        return $berichten;
    }

    public function Store(Request $request) {
        $test = request()->validate([
            'titel' => 'required',
            'content' => 'required',
            'gebruikerid' => 'required',
        ]);
        return Berichten::create(
        [
            'titel' => $request->input('titel'),
            'content' => $request->input('content'),
            'gebruikerid' => $request->input('gebruikerid'),
        ]);
    }

    public function Update(Berichten $berichten) {
        $berichten->update([
            'titel' => request('titel'),
            'content' => request('content'),
            'gebruikerid' => request('gebruikerid'),
        ]);
        return $berichten;
    }

    public function Delete(Berichten $berichten) {
        $succes = $berichten;
        $berichten->delete();
        return $succes;
    }
}

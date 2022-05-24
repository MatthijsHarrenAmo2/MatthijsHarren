<?php

namespace App\Http\Controllers;

use App\Models\Gebruikers;
use Illuminate\Http\Request;

class ApiGebruikersController extends Controller
{
    public function ShowAll() {
        return Gebruikers::all();
    }
    public function Show(Gebruikers $gebruiker) {
        return $gebruiker;
    }

    public function Store(Request $request) {
        $test = request()->validate([
            'gebruiker' => 'required',
            'wachtwoord' => 'required',
            'email' => 'required',
        ]);
        return Gebruikers::create(
        [
            'gebruiker' => $request->input('gebruiker'),
            'wachtwoord' => $request->input('wachtwoord'),
            'email' => $request->input('email'),
        ]);
    }

    public function Update(Gebruikers $gebruiker) {
        $gebruiker->update([
            'gebruiker' => request('gebruiker'),
            'wachtwoord' => request('wachtwoord'),
            'email' => request('email'),
        ]);
        return $gebruiker;
    }

    public function Delete(Gebruikers $gebruiker) {
        $succes = $gebruiker;
        $gebruiker->delete();
        return $succes;
    }
}

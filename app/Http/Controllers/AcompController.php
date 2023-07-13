<?php

namespace App\Http\Controllers;

use App\Models\Event;

class AcompController extends Controller
{
    public function acompanhantes()
    {
        $search = request('search');
        if ($search) {
            $profile = Event::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $profile = Event::all();
        }
        return view('acompanhantes', ['profile' => $profile, 'search' => $search]);
    }
}

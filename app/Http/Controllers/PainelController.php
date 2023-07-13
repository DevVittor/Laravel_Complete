<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class PainelController extends Controller
{
    public function painel()
    {
        $user_id = Auth::id();
        $ids = Event::where('user_id', $user_id)->pluck('user_id');

        if (count($ids) > 0) {
            $all = Event::all();
        } else {
            return redirect('/events/create');
        }

        return view('painel', ['user_id' => $user_id, 'ids' => $ids, 'all' => $all]);
    }
}

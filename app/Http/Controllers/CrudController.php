<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    public function create()
    {
        $user_id = Auth::id();
        $ids = Event::where('user_id', $user_id)->pluck('user_id');
        $total = count($ids);
        if ($total > 0) {
            return redirect('/perfilCriado');
        } else {
            return view('events.create', ['user_id' => $user_id, 'ids' => $ids]);
        }
    }
    public function show($user_id)
    {
        $profile = User::findOrFail($user_id);
        $dados = Event::where('user_id', $user_id)->get();
        return view('events.profile', [
            'profile' => $profile,
            'dados' => $dados,
        ]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();
        return redirect('/acompanhantes')->with('msg', 'Perfil excluido com sucesso!');
    }
    public function edit()
    {
        $profile = Event::first();
        return view('/events/edit', ['profile' => $profile]);
    }
    public function update(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('imageProfile') && $request->file('imageProfile')->isValid()) {
            $requestImage = $request->file('imageProfile');
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/profileImg'), $imageName);
            $data['imageProfile'] = $imageName;
        }
        $userId = $request->user_id;
        $event = Event::where('user_id', $userId)->first();
        $event->update($data);

        return redirect('/painel');
    }
}

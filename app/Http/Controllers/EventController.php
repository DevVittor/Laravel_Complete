<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        return view('inicio');
    }
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
    public function profile()
    {
        return view('profile');
    }
    public function create()
    {
        $user_id = Auth::id();

        #$profile = User::findOrFail($id);

        #$info = Event::all();
        $ids = Event::where('user_id', $user_id)->pluck('user_id');
        $total = count($ids);
        if (count($ids) > 0) {
            return redirect('/perfilCriado');
        } else {
            return view('events.create', ['user_id' => $user_id, 'ids' => $ids]);
        }
        #return view('/events.create');
    }
    public function store(Request $request)
    {
        $profile = new Event;
        $profile->nome = $request->nome;
        $profile->description = $request->description;
        $profile->Estado = $request->Estado;
        $profile->tatuagem = $request->tatuagem;

        //Image Upload
        if ($request->hasFile('imageProfile') && $request->file('imageProfile')->isValid()) {

            $requestImage = $request->file('imageProfile');

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/profileImg'), $imageName);

            $profile->imageProfile = $imageName;
        }

        $user = auth()->user();
        $profile->user_id = $user->id;
        $profile->save();

        return redirect('/acompanhantes');
    }
    public function planos()
    {
        return view('/planos');
    }
    public function show($user_id)
    {
        $profile = User::findOrFail($user_id);
        #$dados = Event::all();
        $dados = Event::where('user_id', $user_id)->get();
        return view('events.profile', [
            'profile' => $profile,
            'dados' => $dados,
        ]);
    }
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

    public function perfilCriado()
    {
        return view('/perfilCriado');
    }
    public function destroy($id)
    {
        Event::findOrFail($id)->delete();
        return redirect('/acompanhantes')->with('msg', 'Perfil excluido com sucesso!');
    }
    public function edit()
    {
        #$user_id = Auth::id();

        #$profile = Event::all();
        $profile = Event::first();

        #echo $profile;
        return view('/events/edit', ['profile' => $profile]);
    }
    public function update(Request $request)
    {
        $data = $request->all();
        // Image Upload
        if ($request->hasFile('imageProfile') && $request->file('imageProfile')->isValid()) {
            $requestImage = $request->file('imageProfile');
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/profileImg'), $imageName);
            $data['imageProfile'] = $imageName;
        }
        #$user_id = Auth::id();
        $userId = $request->user_id;
        $event = Event::where('user_id', $userId)->first();
        $event->update($data);

        return redirect('/painel');
    }
}

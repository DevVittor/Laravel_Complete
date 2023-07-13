<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class StoreController extends Controller
{
    public function store(Request $request)
    {
        $profile = new Event;
        $profile->nome = $request->nome;
        $profile->description = $request->description;
        $profile->Estado = $request->Estado;
        $profile->tatuagem = $request->tatuagem;

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
}

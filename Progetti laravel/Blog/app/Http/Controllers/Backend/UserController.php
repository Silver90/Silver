<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.user.list', compact('users'));
    }

    public function getAdd()
    {
        return view('backend.user.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ], [
            'first_name.required' => "Specificare il nome.",
            'last_name.required' => "Specificare il cognome.",
            'email.required' => "Specificare l'indirizzo email.",
            'password.required' => "Specificare la password.",

            'email.email' => "Specificare un indirizzo email valido.",
            'email.unique' => "L'indirizzo inserito esiste gia! Prova con un altro.",
        ]);


        $user = new User;

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');

        $user->slug = Str::slug($user->first_name . $user->last_name);

        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return redirect('backend/users')->with('success_message', 'Utente aggiunto correttamente!');
    }

    public function getDelete($userId)
    {
        User::find($userId)->delete();
        return redirect('backend/users')->with('success_message', 'Utente cancellato correttamente!');
    }
}

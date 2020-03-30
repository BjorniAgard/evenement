<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id(); // ingelogde gebruiker
        $user = User::find($user_id);  // vindt ingelogde gebruiker en stop in variable

        return view('profile.index', compact('user')); // laat index zien in profiel mapje en gebruik de variable daarin
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id); // vindt gebruiker id

        return view('profile.show', compact('user')); // laat de show.blade.php zien in profiel mapje en 
        // stuur de $user variable mee in compact
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id); // vindt gebruiker id

        return view('profile.edit', compact('user')); // laat de edit.blade.php zien in profiel mapje en 
        // stuur de $user variable mee in compact
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        User::find($id)->fill($request->input())->save(); // zoek id en update het met nieuwe data in de input fields
        return redirect()->back(); // terug naar vorige pagina
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id); // vindt gebruiker id
        $user->delete(); // verwijder gebruiker
        return redirect('/register'); // redirect naar registratie pagina
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if ($request->username == 'Admin' && $request->password == 'Heslo') {
            Session::put('admin_logged_in', true);
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('error', 'Невірне ім’я користувача або пароль');
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    public function index()
    {
        if (!Session::has('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $trips = Trip::all();
        return view('admin.index', compact('trips'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nazev' => 'required',
            'destinace' => 'required',
            'cena' => 'required|numeric',
            'obrazek' => 'required',
            'popis' => 'required',
        ]);

        Trip::create($request->all());

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        return view('admin.edit', compact('trip'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nazev' => 'required',
            'destinace' => 'required',
            'cena' => 'required|numeric',
            'obrazek' => 'required',
            'popis' => 'required',
        ]);

        $trip = Trip::findOrFail($id);
        $trip->update($request->all());

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        Trip::findOrFail($id)->delete();
        return redirect()->route('admin.index');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class DomainsController extends Controller
{
    /**
     * Show the application Home.
     *
     * @return
     */
    public function home()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index($domain)
    {
        // dd($domain);
        if(!(Auth::check())){
            return redirect()->route('login')->with('domain',$domain);
        }
        $users = User::with('userRoles')->where('domain',$domain)->firstOrFail();

        return view('home', compact('users'));
    }
}

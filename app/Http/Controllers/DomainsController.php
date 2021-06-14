<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

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
     * Show the application Home.
     *
     * @return
     */
    public function authHome(){
        $users = User::all();
        return view('home', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index($domain)
    {
        $users = User::with('userRoles')->where('domain',$domain)->firstOrFail();

        return view('users.index', compact('users'));
    }

    /**
     * Logout a user
     *
     * @param Request $request
     * @return
     */
    public function logout()
    {
        dd(1);
    }
}

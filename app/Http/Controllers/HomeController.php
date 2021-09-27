<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function cursos()
    {
        return view('admin.cursos');
    }

    public function manager()
    {
        return view('admin.manager');
    }

    public function perfil()
    {
        return view('admin.perfil');
    }

    public function usuarios()
    {
        return view('admin.usuarios');
    }

    public function roles()
    {
        return view('admin.roles');
    }

    public function dependencias()
    {
        return view('admin.dependencias');
    }

    public function categorias()
    {
        return view('admin.categorias');
    }
}

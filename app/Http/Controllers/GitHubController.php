<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\GithubService;

class GitHubController extends Controller
{
    public function buscar(GithubService $github)
    {
        $repositorios = $github->buscarRepositorios();
        return view('github.buscar', compact('repositorios'));
    }
}

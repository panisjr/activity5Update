@extends('layout')
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid custom-bg">

        <div class="vh-100">
            <div class="navbar">
                <h1 class="text-white">Dashboard</h1>
                <span class="material-icons" onclick="openNav()">
                    menu
                </span>
            </div>
            <div class="sidenav" id="menu">
                <ul>
                    <span class="material-icons closebtn" onclick="closeNav()">
                        close
                    </span>
                    <li class="input-group">
                        <span class="material-icons input-group-text">
                            person_outline
                        </span>
                        <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">
                            Register
                        </a>
                    </li>
                    <li class="input-group mt-2">
                        <span class="material-icons input-group-text">
                            login
                        </span>
                        <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login
                        </a>
                    </li>
                </ul>
            </div>
            @if (session('success'))
                <div class="flash-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

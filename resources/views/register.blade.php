@extends('layout')
@section('title', 'Register Account')

@section('content')
    <div class="container-fluid custom_bg">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div>
                <form class="register_form text-center p-4 rounded">
                    @csrf
                    <h3 class="mb-3 mt-3">Register</h3>
                    <div class="input-group register_input">
                        <span class="material-icons input-group-text">
                            person_outline
                        </span>
                        <input class="form-control  " type="text" name="username" id="username" placeholder="Username"
                            required autocomplete="off">
                    </div>
                    <div class="input-group register_input mb-2 mt-2">
                        <span class="material-icons input-group-text">
                            mail_outline
                        </span>
                        <input class="form-control " type="email" name="email" id="email" placeholder="Email"
                            autocomplete="off" required>
                    </div>
                    <div class="input-group register_input">
                        <span class="material-icons input-group-text">
                            lock_outline
                        </span>
                        <input class="form-control " type="password" name="password" id="password" placeholder="Password"
                            autocomplete="off" required>
                    </div>
                    <div>
                        <button class="btn btn-outline-dark mt-5 mb-3" type="submit">Register</button>
                        <a href="{{ route('dashboard') }}"
                            class="btn btn-outline-dark mt-5 mb-3 {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                        <p>Already have an account?
                            <a id="login" href="{{ route('login') }}"
                                class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

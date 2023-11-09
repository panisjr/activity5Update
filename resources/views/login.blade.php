@extends('layout')
@section('title', 'Login Account')
@section('content')
    <div class="container-fluid login_bg">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div>

                <form action="{{ route('posts.store') }}" method="POST" class="login_form text-center p-4 rounded ">
                    @csrf
                    <h3 class="mb-3 mt-3">Login</h3>
                    <div class="input-group login_input mt-4">
                        <span class="material-icons input-group-text">
                            person_outline
                        </span>
                        <input class="form-control  " type="text" name="username" id="username" placeholder="Username"
                            required>
                    </div>
                    <div class="input-group login_input mt-3">
                        <span class="material-icons input-group-text">
                            lock_outline
                        </span>
                        <input class="form-control " type="password" name="password" id="password" placeholder="Password"
                            required>
                    </div>
                    <div>
                        <button class="btn btn-outline-dark mt-5 mb-4" type="submit">Login</button>
                        <p>Don't have an account?
                            <a href="{{ route('register') }}"
                                class="{{ request()->routeIs('register') ? 'active' : '' }}">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <div class="container-fluid custom-bg">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div>
                <form action="{{ route('posts.store') }}" method="POST" class="custom-form text-center p-4 rounded">
                    @csrf
                    <h3 class="mb-3 mt-3">Register</h3>
                    <div class="input-group input-field">
                        <span class="material-icons input-group-text">
                            person_outline
                        </span>
                        <input class="form-control  " type="text" name="username" id="username"
                            placeholder="Username" required>
                    </div>
                    <div class="input-group input-field mb-2 mt-2">
                        <span class="material-icons input-group-text">
                            mail_outline
                        </span>
                        <input class="form-control " type="email" name="email" id="email" placeholder="Email"
                            required>
                    </div>
                    <div class="input-group input-field">
                        <span class="material-icons input-group-text">
                            lock_outline
                        </span>
                        <input class="form-control " type="password" name="password" id="password"
                            placeholder="Password" required>
                    </div>
                    <div>
                        <button class="btn btn-outline-dark mt-3" type="submit">Register</button>
                        <a id="dashboard" href="{{ route('dashboard') }}"
                            class="btn btn-outline-dark mt-3 {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

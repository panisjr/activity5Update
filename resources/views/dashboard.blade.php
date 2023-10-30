<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <div class="container-fluid custom-bg">
    </div>

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
    </div>
    <script>
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("menu").style.width = "250px";
            document.getElementById("navbar").style.marginLeft = "250px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("menu").style.width = "0";
            document.getElementById("navbar").style.marginLeft = "0";
        }
    </script>
</body>

</html>

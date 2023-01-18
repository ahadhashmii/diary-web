<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('title')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/create.css">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/details.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href="/"><h2>DIARY</h2></a>
            <ul>
                <li><a class="menu-item" href="/">HOME</a></li>
                <li><a class="menu-item" href="/notes">MY NOTES</a></li>
                <li><a class="menu-item" href="/favorites">FAVORITES</a></li>
                <li><a class="menu-item" href="/about">ABOUT</a></li>
                <li><a class="menu-item" href="/contact">CONTACT</a></li>
            </ul>
            <div class="spacer"></div>

            @if (session()->has('user'))
            <div onclick="location.href='/profile';" class="loggedin">
                @if (session('user')['image'])
                    <img class="avatar" src="{{Storage::url(session('user')['image'])}}" alt="">
                @else
                <img class="avatar" src="assets/images/user.png" alt="">
                @endif
                <div class="name-email">
                    <h5> {{session('user')['name']?? User}}</h5>
                    <p>{{session('user')['email']?? email}}</p>
                </div>
            </div>
            @else
                <div class="not-loggedin">
                    <button onclick="location.href='/login';" class="btn-fill">LOGIN</button>
                    <button onclick="location.href='/signup';" class="btn-outlined">SIGNUP</button>
                </div>        
            @endif
            
        </nav>
    </section>
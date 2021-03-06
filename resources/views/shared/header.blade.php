<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="main-header">
        <div class="container-big">
            <a class="main-header__logo" href="{{ route('home') }}">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="">
            </a>

            <nav class="main-header__navbar">
                <ul>
                    <li @if (Request::route()->getName() == 'home') class="active" @endif ><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="">Corso</a></li>
                    <li @if (Request::route()->getName() == 'students') class="active" @endif ><a href="{{ route('students') }}">Dopo il corso</a></li>
                    <li><a href="">Lezione gratuita</a></li>
                    <li><a href="">Assumi i nostri studenti</a></li>
                    <li class="btn"><a href="">Candidati ora</a></li>
                </ul>
            </nav>
        </div>
    </header>

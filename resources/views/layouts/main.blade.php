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

    <main class="main-content">
            @yield('main-content')
    </main>


    <footer class="main-footer">
        <div class="container">
            <div class="footer__head">
                <div class="column">
                    <img src="https://www.boolean.careers/images/common/logo-white.png" alt="">
                    <p class=info>
                        Sede operativa<br>
                        Vai Carducci 12 - 20123 Milano<Br>
                        Tel: 02-40031288
                    </p>
                </div>

                <div class="column right">
                    <ul>
                        <li><a href="">Lezione gratuita</a></li>
                        <li><a href=" {{ route('faq')}}">Domande frequenti</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy policy</a></li>
                        <li><a href="">Lavora con noi</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__bottom text-center">
                <div class="social-row">
                    <a class="in-block" href=""><i class="fab fa-instagram"></i></a>
                    <a class="in-block" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="in-block" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="in-block" href=""><i class="fab fa-youtube"></i></a>
                </div>
                <p>Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</p>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>

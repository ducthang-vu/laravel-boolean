<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="main-header">
        <div class="container-big">
            <a class="main-header__logo" "href="">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="">    
            </a>    

            <nav class="main-header__navbar">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Corso</a></li>
                    <li><a href="">Dopo il corso</a></li>
                    <li><a href="">Lezione gratuita</a></li>
                    <li><a href="">Assumi i nostri studenti</a></li>
                    <li><a href="">Candidati ora</a></li>
                </ul>
            </nav>
        </div>    
    </header>  
    
    <main class="main-content">
        <div class="container">
            @yield('main-content')
        </div>
    </main>


    <footer>
        <div class="container">
            <div class="footer__head">
                <div class="column"></div>
                <div class="column">
                    <ul>
                        <li><a href="">Lezione gratuita</a></li>
                        <li><a href="">Domande frequenti</a></li>
                        <li><a href="">Privacy policy</a></li>
                        <li><a href="">Lavora con noi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
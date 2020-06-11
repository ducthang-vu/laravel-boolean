<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean</title>
    <link rel="stylesheet" href="{{}}">
</head>
<body>
    <header>
        <div class="container">
            <a href="">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="">    
            </a>    

            <nav>
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
    
    <main>
        @yield('main-content')
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
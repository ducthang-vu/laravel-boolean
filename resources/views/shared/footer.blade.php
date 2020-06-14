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

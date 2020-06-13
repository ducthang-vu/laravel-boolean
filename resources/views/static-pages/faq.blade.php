@extends('layouts.main')

@section('main-content')
    <div class="container">
        <section class="faq-head">
            <h2>Domande frequenti</h2>
            <p>
                Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.
            </p>
        </section>
    </div>
    <div class="faq-main">
        <div class="container">
            <section class="column left">
                <h3>Prima del corso</h3>

                @include('shared.faqTemplate')
            </section>

            <section class="column right">
                <h3>Dopo il corso</h3>
            </section>
        </div>
    </div>
@endsection

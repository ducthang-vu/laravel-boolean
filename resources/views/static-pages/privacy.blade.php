@extends('layouts.main')

@section('main-content')
    <div class="privacy-main container">
        @foreach ($sections as $section)
            <section class="privacy-main__section">
                {!! $section !!}
            </section>
        @endforeach
    </div>
@endsection

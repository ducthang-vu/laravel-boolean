@include('shared.cardStudentHandlebars')
@extends('layouts.main')

@section('main-content')
    <section class="students__main">
        <div class="container">
            <h2 class="text-center">I nostri ex studenti</h2>

            <select class="input block" name="filter" id="filter">
                @foreach ($genders as $gender) 
                    <option value="{{ $gender }}">
                        @if ($gender == 'm') Uomini @elseif ($gender == 'f') Donne @else Tutti @endif
                    </option>    
                @endforeach
            </select>

            <div class="card-container">
                @foreach ($students as $student)
                    <a href="{{ route('students.show', ['slug' => $student['slug']]) }}">
                        @include('shared.cardStudent')
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script> 
@endsection
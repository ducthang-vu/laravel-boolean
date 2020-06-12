@include('shared.cardStudent')
@extends('layouts.main')

@section('main-content')
    <div class="container student-filter">
        <select name="filter" id="filter">
            @foreach ($genders as $gender) 
                <option value="{{ $gender }}">
                    @if ($gender == 'm') Uomo @elseif ($gender == 'f') Donna @else Tutti @endif
                </option>    
            @endforeach
        </select>
    </div>

    <section class="students__main">
        <div class="container">
            <h2 class="text-center">I nostri ex studenti</h2>

            <div class="card-container">
                @foreach ($students as $student)
                    <a href="{{ route('students.show', ['slug' => $student['slug']]) }}">
                        <div class="card">
                            <header class="card__header">
                                <img src="{{ $student['img']  }}" alt="pic">
                        
                                <div class="card__header_bio">
                                    <h3>{{ $student['name']  }} ({{ $student['age']  }} anni)</h3>
                                    <p>Assunt{{ $student['gender'] == 'm' ? 'o' : 'a'  }} da {{ $student['employer']  }} come {{ $student['role'] }}</p>
                                </div>
                            </header>
                    
                            <p class="card__text">
                                {{ $student['description']  }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script> 
@endsection
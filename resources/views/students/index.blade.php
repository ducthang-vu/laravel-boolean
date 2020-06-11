@extends('layouts.main')

@section('main-content')
    <h2>I nostri ex studenti</h2>

    <div class="card-container">
        @foreach ($students as $student)
            <a href="{{ route('students.show', ['id' => $student['id']]) }}">
                <div class="card">
                    <header class="card__header">
                        <img src="{{ $student['img']  }}" alt="pic">
                
                        <div class="card__header_bio">
                            <h3>{{ $student['name']  }} ({{ $student['age']  }} anni)</h3>
                            <p>Assunt{{ $student['gender'] == 'm' ? o : a  }} da {{ $student['employer']  }} come web developer</p>
                        </div>
                    </header>
            
                    <p class="card__text">
                        {{ $student['description']  }}r
                    </p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
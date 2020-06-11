@extends('layouts.main')

@section('main-content')
    <section class=show-box>
        <div class="card-container">
            <div class="card">
                <header class="card__header">
                    <img src="{{ $student['img']  }}" alt="pic">
            
                    <div class="card__header_bio">
                        <h3>{{ $student['name']  }} ({{ $student['age']  }} anni)</h3>
                        <p>Assunt{{ $student['gender'] == 'm' ? 'o' : 'a'  }} da {{ $student['employer']  }} come web developer</p>
                    </div>
                </header>
        
                <p class="card__text">
                    {{ $student['description']  }}r
                </p>
            </div>
        </div>
    </section>
@endsection
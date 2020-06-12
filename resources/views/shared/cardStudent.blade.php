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

@extends('nestonesto.public')

@section('title', 'RAF IT Days Laravel Blog')

@section('content')
    <h1>RAF IT Days Laravel Blog</h1>
    <p>Dobrodošli na zvanični blog RAF IT Days-a! Ovaj blog je posvećen najnovijim trendovima u IT industriji, vestima sa našeg fakulteta, i savetima za studente i profesionalce. Pročitajte naše najnovije članke i budite u toku sa svim što se dešava u svetu tehnologije i obrazovanja.</p>
    <p>Ovde prikazujemo sve zapise iz bloga:</p>

    @foreach($blogovi as $blog)
        <div class="mb-4">
            <h3>{{ $blog['title'] }}</h3>
            <p>{{ $blog['short_intro'] }}</p>
            <a href="{{ route('blog', ['id' => $blog['id']]) }}" class="btn btn-primary">Opširnije</a>
        </div>
    @endforeach
@endsection

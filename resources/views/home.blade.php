<h1>Home</h1>
    @if ($nomes)
        @foreach ($nomes as $nome)
            <p>This is user {{ $nome->nome }}</p>
            <p>This is user {{ $nome->idade }}</p>
        @endforeach
    @endif


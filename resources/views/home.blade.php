<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        input {
            display: block
        }

        .success {
            width: 100%;
            height: 30px;
            color: green
        }

        ul li {
            list-style: none
        }
    </style>
</head>

<body>

    <h1>Home</h1>
    <ul>
        @if(session()->get('success'))
        <li class="alert alert-success">{{ session()->get('success')}}</li>
        @endif
        </li>

        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form action="/post" method="POST">
            @csrf
            <input type="text" name="title">
            <textarea name="description"></textarea>
            <input name="author" type="text">
            <button type="submit">Enviar</button>
        </form>

        @foreach ($posts as $post)
        <p>Id: {{ $post->id }}</p>
        <p>{{ $post->title }}</p>
        <p>{{ $post->description }}</p>
        <p>Autor: {{ $post->author }}</p>
        <p>Data da Publicação: {{ $post->created_at }}</p>
        <hr>
        @endforeach
</body>

</html>
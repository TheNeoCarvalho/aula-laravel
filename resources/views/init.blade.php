<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanktree</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        body {
            background: #282828
        }

        .links {
            width: 40%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .links a {
            width: 100%;
            padding: 5px 100px;
            margin: 5px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            transition: .3s ease;
            text-decoration: none;
        }

        .links a:hover {
            transform: scale(1.05);
            color: #fff;
        }

        .container {
            padding: 30px 0;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        span {
            padding: 20px;
            color: #fff;
            font: 18px Arial;
        }

        img {
            width: 120px;
            border: 1px solid #fff;
        }

        .facebook {
            background: #3b5998;
            color: #fff;
        }

        .twitter {
            background: #00acee;
            color: #fff;
        }

        .linkedin {
            background: #0e76a8;
            color: #fff;
        }

        .youtube {
            background-color: #c4302b;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="content">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS1DeyZNqRdLF9WiyJOo7YQW5HxbSp3F6tNQQ&usqp=CAU"
                alt="" class="img img-responsive rounded-circle">
            <span>{{"@".$user}}</span>
            <div class="links">
                @foreach ($socials as $social)
                <a class="{{strtolower($social->social)}}" target="_blank"
                    href="{{ $social->url}}">{{ $social->social}}</a>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
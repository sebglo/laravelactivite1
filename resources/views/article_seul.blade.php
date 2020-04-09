<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    @extends('layouts/main')
    @section('header')
    <h1>article seul</h1>
    <ul>
        <h3>{{ $post->post_title }}</a></h3>
        <li>{{ $post->post_content }}</li>
        <li>{{ $post->post_date }}</li>
        <li>{{ $post->author->name }}</li>

    </ul>
    <ul>
    <h2><a href="/posts/index">Modification des articles</a></h2>
    </ul>
    <ul>
    @foreach ( $comms as $comm )
            <h3>{{ $comm->com_name }}</a></h3>
            <li>{{ $comm->com_message }}</li>
    @endforeach
    </ul>
    <form method="POST" action="/articles/{{ $post->post_title }}">
        @csrf

        <div>
            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('message') }}</label>
            <textarea name="message" placeholder="message" class="form-control @error('message') is-invalid @enderror" value="{{ old('message') }}" required autocomplete="message" autofocus></textarea>
            @error('message')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

            <input type="text" name="name" placeholder="nom" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" class="red" role="alert">
                <strong class="red">{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>


    @endsection


</body>

</html>
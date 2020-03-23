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
    <h1>contact</h1>
    <h1>Créer un nouveau projet</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/contact">
        @csrf
        <div>
            <input type="text" name="name" placeholder="nom" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" />
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div>
            <input type="email" name="email" placeholder="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" />
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div>
            <textarea name="message" placeholder="message" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" value="{{ old('message') }}"></textarea>
            {!! $errors->first('message', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div>
            <input type="date" name="date" placeholder="date" class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" value="{{ old('date') }}"></textarea>
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
    <br>
    <br>


    <ul>
        @foreach ( $posts as $post )
        <h3>{{ $post->contact_name }}</a></h3>
        <li>{{ $post->contact_email }}</li>
        <li>{{ $post->contact_message }}</li>
        <li>{{ $post->contact_date }}</li>
        @endforeach
    </ul>
    @endsection


</body>

</html>
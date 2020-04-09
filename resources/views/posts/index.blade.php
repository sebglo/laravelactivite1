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
    <h1>modification des articles</h1>
    <div class="row">


        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('posts.create') }}">creer un nouvel article</a>
        </div>
        <!--indication que ca a marcher -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

    </div>
    <!--affichage du tableau en html -->
    <table class="table table-bordered">
        <tr>
            <th>Nom</th>
            <th>Titre</th>
            <th>Article</th>
            <th width="280px">Action</th>
        </tr>
        <!--dans le tableau mise en place des boutons show edit -->
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->post_name }}</td>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->post_content }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    
                    <!--dans le tableau mise en place des boutons delete -->
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <ul>
        @foreach ( $posts as $post )
        <h3><a href="articles/{{ $post->post_title }}">{{ $post->post_title }}</a></h3>
        <li>{{ $post->post_content }}</li>
        <li>{{ $post->post_date }}</li>
        @endforeach
    </ul>


    @endsection


</body>

</html>
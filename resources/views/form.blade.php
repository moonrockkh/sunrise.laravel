<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="{{url('form/save')}}">
        @csrf
        <p>
            Name: <input type="text" name="name">
        </p>
        <p>
            <button>Submit</button>
        </p>
    </form>
</body>
</html>
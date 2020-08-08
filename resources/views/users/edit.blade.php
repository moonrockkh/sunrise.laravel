<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <hr>
    <form method="POST" action="{{url('user/update')}}">
        @csrf
        <input type="hidden" value="{{my_encrypt($u->id)}}" name="id">
        <p>
            <input type="text" value="{{$u->name}}" name="name">
        </p>
        <p>
            <input type="text" value="{{$u->email}}" name='email'>
        </p>
        <p>
            <input type="text" value="{{$u->username}}" name='username'>
        </p>
        <p>
            <button>Update</button>
        </p>
    </form>
</body>
</html>
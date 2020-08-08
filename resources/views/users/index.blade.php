<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <hr>
    <table width="70%" align='center' border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Username</td>
            <td>Actions</td>
        </tr>
        @foreach($users as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{my_decrypt($u->name)}}</td>
                <td>{{my_decrypt($u->email)}}</td>
                <td>{{$u->username}}</td>
                <td>
                    <a href="{{url('user/edit/' . my_encrypt($u->id))}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
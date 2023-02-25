<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="{{route('loginvalid')}}" method="post">
        @csrf
        <lable for="email">Email</lable>
        <input type="text" name="email"><br>
        
        <lable for="password">Password</lable>
        <input type="password" name="password"><br>

        <input type="submit" value="Submit" name="submit">

        <button>
            <a href="{{route('register')}}">Register</a>
        </button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="{{route('registration')}}" method="post">
        @csrf
        <lable for="name">Name</lable>
        <input type="text" name="name"><br>

        <lable for="email">Email</lable>
        <input type="text" name="email"><br>

        <lable for="gender">Gender</lable>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>

        <lable for="address">Address</lable>
        <textarea name="address"></textarea><br>

        <lable for="mobileno">Mobile No</lable>
        <input type="number" name="mobileno"><br>
        
        <lable for="password">Password</lable>
        <input type="password" name="password"><br>

        <input type="hidden" value="admin" name="role">

        <input type="submit" value="Add" name="add">

    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <button  type="button "onclick="document.getElementById('admin').style.display='block'">Admin name</product>
    <button onclick="product()">Product</product>
    <button onclick="employee()">Employee</product>
    <form action="{{route('logout')}}" method="get">
        @csrf
        <button>Logout</button>
    </form>

    <div id="admin">
        <h1>Welcome to Admin Dashboard</h1>
    </div>
    <div id="product">
        <h1>Welcome to Admin Products</h1>
    </div>
    <script>
        function admin()
        {
            document.getElementById('admin');
        }
        function product()
        {
            document.getElementById('product');
        }
    </script>

</body>
</html>
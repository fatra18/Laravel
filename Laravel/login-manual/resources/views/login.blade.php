<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form method="post" action="{{ url('/authenticate') }}">
        @csrf
        <h1>form login</h1>
        <div>
            <label for="">
                Email
                <input type="email" name="email">
            </label>
        </div>
            <br>
        <div>
            <label for="">
                Password
                <input type="password" name="password">
            </label>
        </div>
        <br><br>
        <button>Login</button>
   </form>
</body>
</html>
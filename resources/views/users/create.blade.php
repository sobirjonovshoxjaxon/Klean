<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New User Page</title>
</head>
<body>
    <h1>Create New User Page</h1>

    <form action="{{ route('user.store')}}" method="POST">
        @csrf 

        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
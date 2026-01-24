<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <h1>Bu Test view file </h1>

    <form action="{{ route('contact')}}" method="POST">
            <label>Name</label>
            <input type="text" value="Name">

            <button type="submit">Submit</button>
    </form>

    <form action="{{ route('contact-post')}}" method="POST">
            <label>Name</label>
            <input type="text" value="Name">

            <button type="submit">Submit</button>
    </form>
</body>
</html>
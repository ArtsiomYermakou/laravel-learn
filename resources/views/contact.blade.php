<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>

<form action="{{route('contact')}}" method="post">
{{--    {{csrf_field()}}--}}
    @csrf
    <input type="text" name="name" placeholder="name"></br>
    <input type="email" name="email" placeholder="email"></br>
    <button type="submit">Submit</button>
</form>

</body>
</html>

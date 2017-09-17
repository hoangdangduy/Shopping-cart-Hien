<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
</head>

<body>
@include("template.header")

<br>

@include("template.nav")

<br>

@yield('content')

<br>

@include("template.footer")

</body>
</html>
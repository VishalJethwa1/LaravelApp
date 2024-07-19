<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to EBOOKS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.js'])
</head>
<body>
    @extends('template.main')

    @section('header')
    @parent
    @endsection

</body>
</html>
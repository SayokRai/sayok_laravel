<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .container {
            width: 86%;
            margin: auto;
            padding: 20px;
        }

        button{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <x-navbar/>
    </header>

    <main>
        {{$slot}}
    </main>
</body>
</html>

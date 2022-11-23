<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <script>
        window.core = {
            APP_URL: {{env('APP_URL')}}
        }
    </script>
    @vite('resources/js/front/app.js')

</head>
<body>
<div id="app">

    <app></app>

</div>
</body>
</html>

<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="maricimara98">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <title>GuessNumber</title>

    @include('partials.styles')
</head>

<body>

    <main class="container mt-5">
        @yield('content')
    </main>

    @include('partials.scripts')

</body>

</html>

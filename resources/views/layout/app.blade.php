<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'/>
    <title>@yield('titlePage')</title>
    @vite('resources/js/app.js')
</head>

<body class="bg-dark h-100">
    <!-- Navbar comics -->
    @include( 'partials.navbar' )

    <!-- includiamo l'header per tutte le pagine -->
    @include( 'partials.header' )

    <main>
        <!-- Contenuto variabile in base alle pagine -->
        @yield( 'content' )
        
    </main>

    <!-- includiamo il footer per tutte le pagine -->
    @include( 'partials.footer' )
</body>
</html>
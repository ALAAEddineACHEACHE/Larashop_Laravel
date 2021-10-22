<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">
    <meta name="template" content="Ecomart">
    <meta name="title" content="Ecomart - eCommerce HTML Template">
    <meta name="keywords"
        content="html, ecomart, ecommerce, clothing, food, electronics, minimal, beauty, shopping, simple, fashion, single vendor, multipurpose, store, shop">
    <title>Ecomart - Home</title>
    <link rel="icon" href="../../images/favicon.png">
    <link rel="stylesheet" href="../../fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="../../fonts/flaticon/grocery/flaticon.css">
    <link rel="stylesheet" href="../../css/vendor/slick.css">
    <link rel="stylesheet" href="../../css/vendor/bootstrap.css">
    <link rel="stylesheet" href="../../css/custom/main.css">
    <link rel="stylesheet" href="../../css/custom/index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css"
        integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous" />

</head>

<body>
    @include('partials.header')
    @include('partials.menu')
    @include('partials.aside')

    @yield('content')

    @include('partials.footer')
    @include('flashy::message')

    {{-- <div class="alert alert-success text-center m-3" role="alert">
        <h4 class="alert-heading">
            @if (Session::has('success'))
                {{ Session::get('success') }}
            @endif
        </h4> --}}


</body>

</html>

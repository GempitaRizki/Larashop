<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>MarketplaceG</title>
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',

        'resources/views/themes/marketplaceg/assets/css/main.css',
        'resources/views/themes/marketplaceg/assets/plugins/jqueryui/jquery-ui.css',

        'resources/views/themes/marketplaceg/assets/js/main.js',
        'resources/views/themes/marketplaceg/assets/plugins/jqueryui/jquery-ui.min.js']),
</head>

<body>
    @include('themes.marketplaceg.partials.header')
    @include('themes.marketplaceg.partials.slider')
    @yield('content')
    @include('themes.marketplaceg.partials.footer')
</body>

</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USA_DRAMA_DATABASE</title>
    <link rel="stylesheet" href="{{ asset('/css/main.css')  }}" >

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    @include('layouts.header')

        @yield('content')
    @include('layouts.footer')
</body>
</html>

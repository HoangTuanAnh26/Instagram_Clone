<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <header style="background-color:blueviolet">
        <h1>インスタグラム風アプリ</h1>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer style="background-color:blueviolet">
        "2026/04/25 インスタグラム風アプリ"
    </footer>    
</body>
</html>
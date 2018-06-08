<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>

    <!-- CSS и JavaScript -->
</head>

<body>
    <div class="container" style="text-align:center; background-color: #DCDCDC">
        <nav class="navbar navbar-default">
            <!-- Содержимое Navbar -->
            <div class="row">
                <hr>
                <h3>HEADER</h3>
                <hr>
            </div>
        </nav>
    </div>

    @yield('content')
    
    <div class="container" style="text-align:center; background-color: #DCDCDC">
        <nav class="footer footer-default">
            <!-- Содержимое Navbar -->
            <div class="row">
                <hr>
                <h3>FOOTER</h3>
                <hr>
            </div>
        </nav>
    </div>
</body>
</html>
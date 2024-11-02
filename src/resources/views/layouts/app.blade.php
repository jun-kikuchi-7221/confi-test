<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/register">
                    FashionablyLate
                </a>
                @yield('header-button')
                <!-- <nav> -->
                    <!-- <ul class="header-nav"> -->
                        <!-- <li class="header-nav__item"> -->
                            <!-- <form> -->
                            <!-- <a class="header-nav__button-submit" type="submit" href="/login">login</a> -->
                            <!-- </form> -->
                        <!-- </li> -->
                    <!-- </ul> -->
                <!-- </nav> -->
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
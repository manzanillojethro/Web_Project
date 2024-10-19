<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Site Metas -->
    <title>@yield('title', 'Project')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to CSS stylesheets -->
    <link rel="stylesheet" href="{{ asset('stylecontent.css') }}">
    <link rel="stylesheet" href="{{ asset('styleabout.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('layout.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- Header Section -->
    <header>
        <nav>
            <div class="nav__content">
                <div class="logo">
                    <div class="logo"><a href="{{ route('home') }}">Web<b>Dev</b></a></div>
                </div>
                <label for="check" class="checkbox">
                    <i class="ri-menu-line"></i>
                </label>
                <input type="checkbox" name="check" id="check" />

                <ul>
                    
                    <li><a href="{{ route('homepage', ['username' => $username]) }}">Home</a></li>
                    <li><a href="{{ route('about', ['username' => $username]) }}">Profile</a></li>
                    <li><a href="{{ route('content', ['username' => $username]) }}">Projects</a></li>
                </ul>
        </nav>

    </header>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <section class="footer">
            <div class="footer__container">
                <div class="footer__column">
                    <h3 class="footer__logo">WebDev</h3>
                </div>
                <div class="footer__column">
                    <h4 class="footer__title">Contact</h4>
                    <p class="footer__contact-info">
                        <span><a href="jjm2022-6024-83583@bicol-u.edu.ph" class="footer__link"><i
                                    class="fas fa-envelope"></i></a></span>
                        <span>Email Address (school): jjm2022-6024-83583@bicol-u.edu.ph</span><br>
                        <span><a href="tel:09076409605" class="footer__link"><i class="fas fa-phone"></i></a></span>
                        <span>09076409605</span>
                    </p>
                </div>
            </div>
            <div class="footer__bottom">
                <p>&copy; 2024 All rights reserved.</p>
            </div>
        </section>
    </footer>
</body>
</html>
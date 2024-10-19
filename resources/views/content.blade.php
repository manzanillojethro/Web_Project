@extends('layout') 

@section('content')

<section id="content" class="content__section transparent-bg">
    <div class="content__container">
        <h1 class="section__title">Projects</h1>

        <!-- Card 1 -->
        <div class="card">
            <a href="https://docs.google.com/document/d/1IZRkfRmHUf0UNE2HqG3gC8ee_jqGAPlx0KZ7-CT4mOA/edit?usp=sharing" class="card__image1">
                <img src="{{ asset('images/p1.png') }}" alt="profile">
                <div class="overlay">Click for Documentation</div>
            </a>
            <div class="card__description">
                <h2>Setting Up Laravel</h2>
                <p>For this project, my goal was to dive into Laravel and get hands-on experience with its setup and core features. First, I installed Laravel and all necessary dependencies, then I created a new project and set up the .env file to connect the database. After that, I built three basic views: the homepage, about, and content pages, and linked them using routes. While doing this, I explored and documented the purpose of Laravel’s key directories and files. To wrap it up, I took screenshots of each step and compiled them into a PDF for easy reference. This project helped me better understand how Laravel works and how to navigate its structure.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <a href="https://docs.google.com/document/d/1WQ4tw_BKzaa3CSXK8Ore1sLgvks4TWw36jhp-SYvkz8/edit?usp=sharing" class="card__image1">
                <img src="{{ asset('images/pro2.png') }}" alt="profile">
                <div class="overlay">Click for Documentation</div>
            </a>
            <div class="card__description">
                <h2>Routes</h2>
                <p>In this part of the project, we focused on defining basic routes in Laravel and exploring route parameters. Initially, we created a simple route that returns a view for the homepage, displaying a welcoming message to users. Following that, we expanded our routes to include an "About Us" page, a redirection from "/home" to the homepage, and a "Contact Us" form. Next, we delved into route parameters by defining a route that accepts a required username parameter. This allowed us to create dynamic greeting messages, such as "Welcome, johndoe!" based on the URL. We also modified this route to make the username optional, displaying a default message like "Welcome, Guest!" when no username is provided. To ensure data validation, we implemented regular expression constraints to allow only alphabetic characters in the username. This exercise not only reinforced our understanding of routing in Laravel but also enhanced our skills in creating dynamic web applications.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <a href="https://docs.google.com/document/d/1FP2MmZvF7lTXip1hDWaAvFyiOz3CK-idx-zEQvP5K0Y/edit?usp=sharing" class="card__image1">
                <img src="{{ asset('images/p3.png') }}" alt="profile">
                <div class="overlay">Click for Documentation</div>
            </a>
            <div class="card__description">
                <h2>Layouts</h2>
                <p>In this section of our project, we focused on creating a layout file and corresponding views in Laravel. We organized our project by creating a "Components" folder in the resources/views directory and defined the basic HTML structure in Layout.blade.php. Then, we created three new Blade files that extended this layout, allowing for a consistent design with page-specific content. Finally, we updated the routes in routes/web.php to link our application’s structure to the relevant URLs, enhancing user navigation and experience.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card">
            <a href="https://docs.google.com/document/d/1Msinx3CKNbWJdI5V17iaGnchOQLXKfh7b_PDfbutI9M/edit?usp=sharing" class="card__image1">
                <img src="{{ asset('images/p4.png') }}" alt="profile">
                <div class="overlay">Click for Documentation</div>
            </a>
            <div class="card__description">
                <h2>Middleware</h2>
                <p>In this part of our project, we focused on creating and registering new middleware in Laravel. We developed two middleware: CheckAge, which checks if a user’s age is at least 18 and redirects them to an "Access Denied" page if not, and LogRequests, which logs details of all HTTP requests to a log.txt file, capturing the URL, method, and timestamp. After registering both middleware in the app/Http/Kernel.php file, we assigned CheckAge to a route group that included routes for a welcome page and a dashboard page, allowing us to test various age scenarios. We further enhanced the CheckAge middleware by modifying it to accept parameters, enabling us to enforce different age restrictions on new routes.</p>
            </div>
        </div>
        
    </div>
</section>

@endsection

@extends('layout') 

@section('content')

<section id="home" class="image_section">

    <div class="content">
        <h1 class="description">
            Welcome, {{ $username }}!
        </h1>
        <div class="textpar">
            <p>
                Welcome to my portfolio website, designed to showcase my lab activities and projects developed using Laravel. This site serves as a comprehensive overview of my journey in web development, demonstrating my proficiency in various Laravel features such as middleware, routes, views, and layouts. Feel free to navigate through my portfolio and explore the various projects I’ve worked on during my lab activities. Each project demonstrates my ability to utilize Laravel’s features effectively, and I am excited to share my progress with you!
            </p>
        </div>
    </div>
</section>

@endsection

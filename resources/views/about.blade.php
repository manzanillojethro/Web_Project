@extends('layout') 

@section('content')

<section id="content" class="content__section transparent-bg">
    <div class="content__container">
        <h1 class="section__title">About Me</h1>
        <div class="card">
            <div class="card__image">
                <img src="{{ asset('images/jet.jpg') }}" alt="profile">
            </div>
            <div class="card__description">
                <br><h1 id="text">Jethro Jayson Manzanillo</h1></br>
                <h2>About Me</h2>
                <p>✉ Email Address (school): jjm2022-6024-83583@bicol-u.edu.ph</p>
                <p>✉ Email Address (personal): manzanillojethro@gmail.com</p>
                <p>☎ Contact Number: 09076409605</p> 
                <p>☐ Date of Birth: December 16, 2003</p>
                <p>☗ Address: Purok 3 Orogo Street. Brgy. 2 Pioduran, Albay</p>
                <br><h2>Other Skills</h2>
                <p>UI designing.</p>
                <p>Drawing (Digital Art)</p>
                <p> </p><br>
                <h2>Education</h2>
                <p>
                    <strong>Don Jose Pavia Central School</strong> (2009 - 2015)<br>
                    <strong>Pioduran National High School</strong> (2015 - 2022)<br>
                    <strong>Bicol University</strong> (2022 - Present)
                </p>
            </div>
        </div>
    </div>
</section>

@endsection

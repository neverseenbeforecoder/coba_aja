@extends('layout.layout')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark fixed-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="font-family: 'CSFont';
            src: url('/fonts/cs_regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        } CS">CS²</a>
        <button class="btn btn-primary fw-bold">Play for Free</button>
        <a class="navbar-brand fw-bold" href="#">monthly player</a>
        <a class="navbar-brand fw-bold" href="#">news</a>
        <a class="navbar-brand fw-bold" href="#">select language</a>
    </div>
</nav>

<!-- Hero -->
<div class="hero-section">
    <video src="/assets/your-video.mp4" autoplay muted loop></video>

    <div class="hero-text">
        <h1 class="fw-bold display-4">COUNTER-STRIKE 2</h1>
        <p class="lead">"The largest technical leap in Counter-Strike history"</p>
        <button class="btn btn-orange btn-lg mt-3">Play Now</button>
    </div>
</div>

<!-- Learn More -->
<div class="container mt-5 mb-5">
    <div class="learn-more-box rounded d-flex shadow-lg">
        <img src="/assets/ct-terror.png" alt="CS Character">
        <div>
            <h4 class="fw-bold">LEARN MORE ABOUT</h4>
            <h2 class="fw-bold">COUNTER-STRIKE 2</h2>
        </div>
    </div>
</div>

@endsection

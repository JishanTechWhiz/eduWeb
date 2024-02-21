@extends('main')
@section('content')
    <!--
            - #ABOUT
          -->

    <section class="section about myAbout" id="about" aria-label="about">
        <div class="container">

            <figure class="about-banner">

                <div class="img-holder" style="--width: 520; --height: 370;">
                    <img src="{{ url('/fronted/images/about-banner.jpg') }}" width="520" height="370" loading="lazy"
                        alt="about banner" class="img-cover">
                </div>

                <img src="{{ url('/fronted/images/about-shape-1.svg') }}" width="360" height="420" loading="lazy"
                    alt="" class="shape about-shape-1">

                <img src="{{ url('/fronted/images/about-shape-2.svg') }}" width="371" height="220" loading="lazy"
                    alt="" class="shape about-shape-2">

                <img src="{{ url('/fronted/images/about-shape-3.png') }}" width="722" height="528" loading="lazy"
                    alt="" class="shape about-shape-3">

            </figure>

            <div class="about-content">

                <p class="section-subtitle">About Us</p>

                <h2 class="h2 section-title">
                    Over 10 Years in <span class="span">Distant learning</span> for Skill Development
                </h2>

                <p class="section-text">
                    Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore
                    magna
                    aliquaenim ad
                    minim.
                </p>

                <ul class="about-list">

                    <li class="about-item">
                        <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                        <span class="span">Expert Trainers</span>
                    </li>

                    <li class="about-item">
                        <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                        <span class="span">Online Remote Learning</span>
                    </li>

                    <li class="about-item">
                        <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                        <span class="span">Lifetime Access</span>
                    </li>

                </ul>

                <img src="{{ url('/fronted/images/about-shape-4.svg') }}" width="100" height="100" loading="lazy"
                    alt="" class="shape about-shape-4">

            </div>

        </div>
    </section>
@endsection

@extends('main')
@section('content')
    <!--
            - #COURSE
          -->

          <section class="section course" id="courses" aria-label="course">
            <div class="container">
    
                <p class="section-subtitle">Popular Courses</p>
    
                <h2 class="h2 section-title">Pick A Course To Get Started</h2>
    
                @if ($courses->isEmpty())
                                
                            <h2 style="color:#F44336;text-align:center;font-size:2.3rem">Course not Found</h2>
                               
                    @else
                <ul class="grid-list">
    
                    
                    @foreach ($courses as $course)
                    <li>
                        <div class="course-card">
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ asset('storage/images/'.$course->image_path) }}" width="370" height="220"
                                    loading="lazy" alt="  Image not Found"
                                    class="img-cover">
                            </figure>
    
                            {{-- <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-1.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="Build Responsive Real- World Websites with HTML and CSS"
                                    class="img-cover">
                            </figure> --}}
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">{{$course->course_duration}} Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">{{$course->course_level}}</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">{{$course->course_name}}</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">({{$course->course_rating}}/5 Rating)</p>
    
                                </div>
    
                                <data class="price" value="29">${{$course->price}}</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">8 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        {{-- <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
     --}}
                                        {{-- <span class="span"><a href="{{route('singleCourse',$course->course_id)}}">20 Students</a></span>
                                         --}}
                                         <button class="myBtnz"><a href="{{route('singleCourse',$course->course_id)}}" style="text-decoration: none">Buy Now</a></button>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li>
                    @endforeach
                @endif
    
                    {{-- <li>
                        <div class="course-card">
    
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-2.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="Java Programming Masterclass for Software Developers" class="img-cover">
                            </figure>
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">8 Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">Advanced</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">Java Programming Masterclass for Software
                                        Developers</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">(4.5 /9 Rating)</p>
    
                                </div>
    
                                <data class="price" value="49">$49.00</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">15 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">35 Students</span>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li>
    
                    <li>
                        <div class="course-card">
    
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-3.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                            </figure>
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">3 Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">Intermediate</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">The Complete Camtasia Course for Content Creators</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">(4.9 /7 Rating)</p>
    
                                </div>
    
                                <data class="price" value="35">$35.00</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">13 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">18 Students</span>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li> --}}
    
                    <!--2-->
                    {{-- <li>
                        <div class="course-card">
    
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-1.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="Build Responsive Real- World Websites with HTML and CSS"
                                    class="img-cover">
                            </figure>
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">3 Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">Beginner</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">Build Responsive Real- World Websites with HTML and
                                        CSS</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">(5.0/7 Rating)</p>
    
                                </div>
    
                                <data class="price" value="29">$29.00</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">8 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">20 Students</span>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li>
    
                    <li>
                        <div class="course-card">
    
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-2.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="Java Programming Masterclass for Software Developers"
                                    class="img-cover">
                            </figure>
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">8 Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">Advanced</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">Java Programming Masterclass for Software
                                        Developers</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">(4.5 /9 Rating)</p>
    
                                </div>
    
                                <data class="price" value="49">$49.00</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">15 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">35 Students</span>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li>
    
                    <li>
                        <div class="course-card">
    
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-3.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                            </figure>
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">3 Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">Intermediate</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">The Complete Camtasia Course for Content Creators</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">(4.9 /7 Rating)</p>
    
                                </div>
    
                                <data class="price" value="35">$35.00</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">13 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">18 Students</span>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li> --}}
                    <!---->
    
                    <!--3-->
    
                    {{-- <li>
                        <div class="course-card">
    
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-1.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="Build Responsive Real- World Websites with HTML and CSS"
                                    class="img-cover">
                            </figure>
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">3 Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">Beginner</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">Build Responsive Real- World Websites with HTML and
                                        CSS</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">(5.0/7 Rating)</p>
    
                                </div>
    
                                <data class="price" value="29">$29.00</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">8 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">20 Students</span>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li>
    
                    <li>
                        <div class="course-card">
    
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-2.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="Java Programming Masterclass for Software Developers"
                                    class="img-cover">
                            </figure>
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">8 Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">Advanced</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">Java Programming Masterclass for Software
                                        Developers</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">(4.5 /9 Rating)</p>
    
                                </div>
    
                                <data class="price" value="49">$49.00</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">15 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">35 Students</span>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li>
    
                    <li>
                        <div class="course-card">
    
                            <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                                <img src="{{ url('/fronted/images/course-3.jpg') }}" width="370" height="220"
                                    loading="lazy" alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                            </figure>
    
                            <div class="abs-badge">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
    
                                <span class="span">3 Weeks</span>
                            </div>
    
                            <div class="card-content">
    
                                <span class="badge">Intermediate</span>
    
                                <h3 class="h3">
                                    <a href="#" class="card-title">The Complete Camtasia Course for Content Creators</a>
                                </h3>
    
                                <div class="wrapper">
    
                                    <div class="rating-wrapper">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
    
                                    <p class="rating-text">(4.9 /7 Rating)</p>
    
                                </div>
    
                                <data class="price" value="35">$35.00</data>
    
                                <ul class="card-meta-list">
    
                                    <li class="card-meta-item">
                                        <ion-icon name="library-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">13 Lessons</span>
                                    </li>
    
                                    <li class="card-meta-item">
                                        <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
    
                                        <span class="span">18 Students</span>
                                    </li>
    
                                </ul>
    
                            </div>
    
                        </div>
                    </li> --}}
    
                    <!----->
    
                </ul>
    
    
    
            </div>
        </section>
@endsection

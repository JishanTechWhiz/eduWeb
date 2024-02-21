<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->
    <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
  

    <link rel="stylesheet" href="{{ url('/fronted/css/loginCSS/singleCourse.css')}}" />

    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com')}}" crossorigin />
    <link
      href="{{ url('https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap')}}"
      rel="stylesheet"
    />
     <!--
    - primary meta tag
  -->
  
  
    

   <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{ url('/fronted/images/favicon.svg') }}" type="image/svg+xml">


    {{-- <script defer src="script.js"></script> --}}

    <title>EduWeb - The Best Program to Enroll for Exchange</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  </head>
  <body>
    
    <div class="body-wrapper"></div>
    <div class="myDiv">
        <a href="{{ url('/course') }}">

            <h4 class="myHome"><img style="width: 1rem"
                src="{{ url('/fronted/images/icon-previous.svg')}}"
                alt="cart image"
                class="price-cart__btn-img"
              />  Back to Courses</h4>
        </a>
    </div>

    <!-- Overlay image Modal -->
    <!-- <div class="overlay-container">
      <div class="item-overlay">
        <button class="item-overlay__btn">
          <img
            src="images/icon-close.svg"
            alt="close image"
            class="item-overlay__btn-img"
          />
        </button>
        <div class="item-overlay__mainImg">
          <img
            src="images/image-product-1.jpg"
            alt=""
            class="item-overlay__img"
          />
          <button class="item-overlay__btnlft overlay-btn">
            <img
              src="images/icon-next.svg"
              alt="next symbol image"
              class="item-overlay__btnlft-img overlay-btn__img"
            />
          </button>
          <button class="item-overlay__btnrgt overlay-btn">
            <img
              src="images/icon-next.svg"
              alt="next symbol image"
              class="item-overlay__btnrgt-img overlay-btn__img"
            />
          </button>
        </div>
        <div class="overlay-img__btns">
          <button class="overlay-img__btn" data-img="0">
            <img
              src="images/image-product-1-thumbnail.jpg"
              alt="shoe product image"
              class="overlay-img__btn-img"
            />
          </button>
          <button class="overlay-img__btn" data-img="1">
            <img
              src="images/image-product-2-thumbnail.jpg"
              alt="shoe product image"
              class="overlay-img__btn-img"
            />
          </button>
          <button class="overlay-img__btn" data-img="2">
            <img
              src="images/image-product-3-thumbnail.jpg"
              alt="shoe product image"
              class="overlay-img__btn-img"
            />
          </button>
          <button class="overlay-img__btn" data-img="3">
            <img
              src="images/image-product-4-thumbnail.jpg"
              alt="shoe product image"
              class="overlay-img__btn-img"
            />
          </button>
        </div>
      </div>
    </div> -->

    <!-- Cart -->
    <div class="head-cart">
      <h3 class="head-cart__heading">Cart</h3>
      <div class="head-cart__txt">Your cart is empty.</div>
      <div class="head-cart__item">
        <div class="head-cart__item-wrapper">
          <img
            src="{{ url('/fronted/images/image-product-1-thumbnail.jpg')}}"
            alt="cart product image"
            class="head-cart__item-img"
          />
          <div class="head-cart__des">
            <p class="head-cart__des-txt">Fall Limited Edition Sneakers</p>
            <div class="head-cart__price">
              <span class="head-cart__price-single">$125.00*3</span>
              <span class="head-cart__price-total">$375.00</span>
            </div>
          </div>
          <button class="head-cart__item-btn">
            <img
              src="{{ url('/fronted/images/icon-delete.svg')}}"
              alt="delete image"
              class="head-cart__btn-img"
              sz
            />
          </button>
        </div>

        <button class="head-cart__btn btn--orange">Checkout</button>
      </div>
    </div>

    

     

        

    <!-- Main item container -->
    <main class="item" style="margin-top: 5rem;">
      <section class="img">
        <div style="margin-top: 12rem"></div>
        <img src="{{ asset('storage/images/'.$singleData->image_path) }}" width="500" height="300" loading="lazy" alt="Image not Found" class="img-main" />
        <div style="margin-bottom: 10rem"></div>
          
      </section>

      <section class="price">
        <h2 class="price-sub__heading">{{$singleData->course_level}}</</h2>
        <h1 class="price-main__heading">{{$singleData->course_name}}</h1>
        <p class="price-txt">
          {{$singleData->course_description}}
        </p>
        
        <div class="price-box">
          <div class="price-box__main">
            <span class="price-box__main-new">${{$singleData->price}}</span>
            <span class="price-box__main-discount"> 50%</span>
          </div>
          <span class="price-box__old">Rating:  <span class="durationStyle">{{$singleData->course_rating}}/5</span></span>
          <span class="price-box__old">Duration: <span class="durationStyle">{{$singleData->course_duration}} Weeks</span></span>
          
        </div>

        <div class="price-btnbox">
          <!-- <div class="price-btns">
            <button class="price-btn__add price-btn">
              <img
                src="images/icon-plus.svg"
                alt="plus sign"
                class="price-btn__add-img price-btn__img"
              />
            </button>
            <span class="price-btn__txt">0</span>
            <button class="price-btn__remove price-btn">
              <img
                src="images/icon-minus.svg"
                alt="minus sign"
                class="price-btn__remove-img price-btn__img"
              />
            </button>
          </div> -->
          <button class="price-cart__btn btn--orange" onclick="redirectToUrl('{{ url('/checkout') }}')" >
            <img
              src="{{ url('/fronted/images/icon-cart.svg')}}"
              alt="cart image"
              class="price-cart__btn-img"
            />
            Add to cart
          </button>
        </div>
      </section>
    </main>

    <!-- Attribution -->
    <div class="attribution">
     
    </div>
    <script>
      // JavaScript function to redirect to a URL
      function redirectToUrl(url) {
          window.location.href = url;
      }
  </script>
  </body>
</html>

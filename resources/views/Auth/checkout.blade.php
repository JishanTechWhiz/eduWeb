<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Checkout Form</title>

    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/fronted/css/checkout.css') }}">
</head>

<body>
    {{-- <i class="fa-regular fa-arrow-left"></i> --}}

    <a href="{{ url('/') }}">
        <h3><i class="fa fa-arrow-left"></i> Back to Home</h3>
    </a>
    <h2 style="text-align: center;">Course Checkout</h2>
    <div class="myCon">
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="">

                        <div class="row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Faraz">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email"
                                    placeholder="codewithfaraz@example.com">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="Mira Bhayandar Road">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="Mumbai">

                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">State</label>
                                        <input type="text" id="state" name="state" placeholder="MH">
                                    </div>
                                    <div class="col-50">
                                        <label for="zip">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="400001">
                                    </div>
                                </div>
                            </div>

                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="Faraz">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber"
                                    placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="December">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2027">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="123">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        <input type="submit" value="Continue to checkout" class="btn">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container con">
                    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>
                            <b>4</b></span></h4>
                    <p><a href="#">Item 1</a> <span class="price">$105</span></p>
                    <p><a href="#">Item 2</a> <span class="price">$95</span></p>
                    <p><a href="#">Item 3</a> <span class="price">$100</span></p>
                    <p><a href="#">Item 4</a> <span class="price">$50</span></p>
                    <hr>
                    <p>Total <span class="price" style="color:black"><b>$350</b></span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

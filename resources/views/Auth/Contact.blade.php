@extends('main')
@section('content')
    <div class="myBodyy">
        <div class="containerrz">
            <div class="contentt">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Surkhet, NP12</div>
                        <div class="text-two">Birendranagar 06</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+0098 9893 5647</div>
                        <div class="text-two">+0096 3434 5678</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">eduweb@gmail.com</div>
                        <div class="text-two">info@eduweb.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>If you have any work from me or any types of quries related to my tutorial, you can send me message
                        from here. It's my pleasure to help you.</p>
                    <form action="#">
                        <div class="input-box">
                            <input type="text" placeholder="Enter your name" />
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Enter your email" />
                        </div>
                        <div class="input-box message-box">
                            <textarea placeholder="Enter your message"></textarea>
                        </div>
                        <div class="buttonn">
                            <input type="button" value="Send Now" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

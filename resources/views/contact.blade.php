@extends('app')
@section('styles')
    <style>
        .contact_section input {
            color: black;
        }
    </style>
@endsection
@section('content')
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Contact Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="save-contact" method="POST">

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @csrf
                        <div>
                            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"
                                @error('name')style="border: 1px solid red;" @enderror />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone Number" name="phone_number"
                                value="{{ old('phone_number') }}"
                                @error('phone_number')style="border: 1px solid red;" @enderror />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                                @error('email')style="border: 1px solid red;" @enderror />

                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" name="message"
                                value="{{ old('message') }}" @error('message')style="border: 1px solid red;" @enderror />

                        </div>
                        <div class="d-flex ">
                            <button>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap" style="width:100%;height:100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->


    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <h4>
                Get In Touch
            </h4>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="info_items">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="">
                                    <div class="item ">
                                        <div class="img-box ">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Lorem Ipsum is simply dummy text
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="">
                                    <div class="item ">
                                        <div class="img-box ">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            +02 1234567890
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="">
                                    <div class="item ">
                                        <div class="img-box">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            demo@gmail.com
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-box">
            <h4>
                Follow Us
            </h4>
            <div class="box">
                <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>



    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayDateYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->
@endsection

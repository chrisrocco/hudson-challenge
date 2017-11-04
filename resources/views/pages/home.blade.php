<?php
/* config */
$youtube = "http://www.youtube.com/embed/SZEflIVnhH8";

?>

@extends('layouts.master')

@section('title', "Home")

@section('header')
    @include('shared.header', ['classes' => 'transparent-header'])
@endsection

@section('slider')
    <section id="slider" class="slider-parallax force-full-screen full-screen"
             style="background: url('images/cafe/slider.jpg'); background-size: cover;">
        <div class="slider-parallax-inner">

            <div class="container clearfix">
                <div class="vertical-middle dark center">

                    <div class="center bottommargin">
                        <img src="images/beanalli-white.png" alt="Image"
                             style="max-width: 100%; min-width: 100px; width: 400px">
                    </div>
                    <div class="heading-block nobottommargin center">
                        <h1>
								<span class="text-rotater nocolor" data-separator="|" data-rotate="flipInX"
                                      data-speed="3500">
									The <span class="t-rotate">Richest|Boldest|Sweetest|Smoothest</span> journey you'll ever taste
								</span>
                        </h1>
                        <span class="hidden-xs">
								<blockquote class="quote">
									<p>I've always liked to think of myself as a something of a coffee connoisseur. I must admin that Beanalli coffee
									is the closest to café quality i've ever enjoyed.</p>
									<footer>Chris Rocco</footer>
								</blockquote>
							</span>

                    </div>

                    <a href="javascript:void(0);"
                       data-toggle="modal" data-target=".bs-example-modal-lg"
                       class="button button-border button-light button-rounded button-reveal tright button-large topmargin hidden-xs">
                        <i class="icon-angle-right"></i><span>Watch Video</span></a>
                    <a href="#"
                       class="button button-border button-light button-rounded button-reveal tright button-large topmargin hidden-xs">
                        <i class="icon-angle-right"></i><span>Buy Now</span></a>

                </div>
            </div>
        </div>
    </section>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-body center">
                <iframe width="700" height="500" src="{{$youtube}}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div id="content">
        <div id="content-wrap">

            <div class="section notopmargin nobottommargin" style="background: url('images/textures/seamless_paper.png') repeat;">
                <div class="container clearfix">

                    <div class="col_half nobottommargin center">
                        <img src="http://i57.photobucket.com/albums/g240/lizcoolmompicks/15-cool-mom-picks/mistobox-coffee-subscription-box-full-bag_zpsada08a02.png" alt="Image">
                    </div>

                    <div class="col_half nobottommargin col_last">

                        <div class="heading-block" style="padding-top: 40px;">
                            <h2>Beanalli Coffee</h2>
                            <span>The Richest Journey You'll Ever Taste</span>
                        </div>

                        <p>
                            We search the world for the perfect blend. Freshness and rich flavorful aroma is our main objective.
                            We seek out farms with the highest standards of processing & shipping. Tear open a bag and inhale the smooth,
                            rich, herbal texures and enjoy natures sweet warm nectar.
                        </p>

                        <a href="{{route('products')}}" class="button button-border button-rounded button-reveal tright button-large topmargin hidden-xs">
                            <i class="icon-angle-right"></i><span>Explore Coffee</span></a>

                    </div>

                </div>
            </div>

            <section id="section-menu" class="page-section section dark notopmargin nobottommargin" style="background: url('images/cafe/4.jpg') no-repeat center center; background-size: cover;">

                <div class="container clearfix">

                    <div class="heading-block nobottomborder">
                        <span class="before-heading color">FEATURED</span>
                        <h3><i class="icon-coffee2"></i> SIGNATURE COFFEES</h3>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="food-menu row clearfix">
                                <div class="col-md-9">
                                    <div class="menu-list">
                                        <span>Anniversary Blend</span>
                                        <h5>Complex and full-bodied with a distinctive spicy flavor that's amazingly bold.</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="menu-price">
                                        <h3>$16.90</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="food-menu row clearfix">
                                <div class="col-md-9">
                                    <div class="menu-list">
                                        <span>East Timor Tatamailau</span>
                                        <h5>Well-rounded with herbal notes and a cocoa finish with a smooth mouthfeel.</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="menu-price">
                                        <h3>$15.90</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="food-menu row clearfix">
                                <div class="col-md-9">
                                    <div class="menu-list">
                                        <span>Gold Coast Blend®</span>
                                        <h5>Big, complex coffees roasted to create a refined, lingering, full-bodied blend.</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="menu-price">
                                        <h3>$11.30</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="food-menu row clearfix">
                                <div class="col-md-9">
                                    <div class="menu-list">
                                        <span>Komodo Dragon® Blend</span>
                                        <h5>Earthy and layered with notes of fresh herbs and a lingering spice.</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="menu-price">
                                        <h3>$12.10</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="food-menu row clearfix">
                                <div class="col-md-9">
                                    <div class="menu-list">
                                        <span>House Blend</span>
                                        <h5>Aroma, body and flavor all in balance—with tastes of nuts and cocoa brought out by the roast.</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="menu-price">
                                        <h3>$12.10</h3>
                                    </div>
                                </div>
                            </div>
                            <div data-lightbox="gallery">
                                <a class="button button-border button-rounded button-large button-light" style="margin-top: 15px" data-lightbox="gallery-item">
                                    Browse All Beans</a>
                            </div>

                            </a>
                        </div>
                    </div>

                </div>

            </section>

            <section id="section-contact" class="page-section section dark nomargin" style="background: url('images/cafe/7.jpg') no-repeat center center; background-size: cover;">

                <div class="container clearfix">

                    <div class="col-md-6 col-md-offset-6">

                        <div class="heading-block nobottomborder">
                            <span class="before-heading color">Connect with Us</span>
                            <h3>Get In Touch</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6 center">
                                <p class="tleft text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolor nam repudiandae perspiciatis.</p>
                            </div>
                            <div class="col-md-6 center">
                                <p class="tleft text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolor nam.</p>
                            </div>
                            <div class="col-md-12">

                                <div class="contact-widget">

                                    <div class="contact-form-result"></div>

                                    <form id="contactForm" class="nobottommargin row">

                                        <div class="form-process"></div>

                                        <div class="col-md-12">
                                            <input name="name" class="sm-form-control required" placeholder="Full Name*" required />
                                        </div>

                                        <div class="col-md-12">
                                            <input name="email" type="email" id="template-contactform-email" value="" class="required email sm-form-control" placeholder="Email Address*" />
                                        </div>

                                        <div class="col-md-12">
                                            <textarea name="message" class="required sm-form-control" id="template-contactform-message" rows="6" cols="30"placeholder="Message*" ></textarea>
                                        </div>

                                        <div class="col-md-12 hidden">
                                            <input id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                        </div>

                                        <div class="col-md-12">
                                            <button class="button button-border button-rounded button-black fright" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </section>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/cafe.css')}}" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>

        var form_selector = "#contactForm";
        var endpoint = "{{route('contact')}}";

        $(document).ready(function(){
            /* development */
            document.forms.contactForm.name.value = "Chris Rocco";
            document.forms.contactForm.email.value = "chris.rocco7@gmail.com";
            document.forms.contactForm.message.value = ";alsdfj; asdjf ;laskj f;laskj df;lasdjf ;hasdlfj hasdo f;lasdj f;lajf;lkjas ;d fja;sdlfkj";

            $(form_selector).on('submit', handleContactForm);
        });

        function handleContactForm(event){
            event.preventDefault();

            var formData = $(form_selector).serialize();
            $.post(endpoint, formData)
                .done(
                    function(data){
                        swal("Success!", "Your message has been sent. You'll hear from us shortly!", "success");
                        $(".form-process").hide();
                        $(form_selector)[0].reset();
                    }
                ).fail(
                    function(err){
                        swal("Oops..", "something went wrong", "error");
                        $(".form-process").hide();
                    }
                );
        }
    </script>
@endsection
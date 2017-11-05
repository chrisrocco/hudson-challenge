@extends('layouts.master')

@section('title', "Home")

@section("css")
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/addons/revolution.addon.particles.css">

@endsection

@section('javascript')
    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/addons/revolution.addon.particles.min.js"></script>

    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

    <!-- ADD-ONS JS FILES -->

    <script type="text/javascript">
        var tpj=jQuery;

        var revapi9;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_9_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_9_1");
            }else{
                revapi9 = tpj("#rev_slider_9_1").show().revolution({
                    sliderType:"hero",
                    jsFileLocation:"include/rs-plugin/js/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    particles: {startSlide: "first", endSlide: "last", zIndex: "1",
                        particles: {
                            number: {value: 300}, color: {value: "#000000"},
                            shape: {
                                type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
                                image: {src: ""}
                            },
                            opacity: {value: 0.1, random: false, min: 0.25, anim: {enable: false, speed: 1, opacity_min: 0, sync: false}},
                            size: {value: 1, random: true, min: 0.5, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
                            line_linked: {enable: true, distance: 80, color: "#000000", opacity: 0.35, width: 1},
                            move: {enable: true, speed: 1, direction: "right", random: true, min_speed: 3, straight: false, out_mode: "out"}},
                        interactivity: {
                            events: {onhover: {enable: true, mode: "repulse"}, onclick: {enable: true, mode: "bubble"}},
                            modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 100, opacity: 1}, repulse: {distance: 75}}
                        }
                    },
                    navigation: {
                    },
                    responsiveLevels:[1240,1024,778,480],
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[868,768,960,720],
                    lazyType:"none",
                    parallax: {
                        type:"scroll",
                        origo:"slidercenter",
                        speed:400,
                        levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,0,55],
                    },
                    shadow:0,
                    spinner:"spinner0",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        disableFocusListener:false,
                    }
                });
            }

            RsParticlesAddOn(revapi9);
        });	/*ready*/
    </script>
@endsection

@section('header')
    @include('shared.header', [ 'classes' => 'transparent-header' ])
@endsection

@section('slider')
    <section id="slider" class="revslider-wrap full-screen clearfix">

        <div class="rev_slider_wrapper" style="width: 100%">
            <!-- START REVOLUTION SLIDER 5.3.1.6 fullscreen mode -->
            <div id="rev_slider_9_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.1.6">
                <ul>	<!-- SLIDE  -->
                    <li data-index="rs-23" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="default"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Example One" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="include/rs-plugin/demos/assets/images/transparent.png" style='background-color:#ffffff' alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  "
                             id="slide-23-layer-15"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full-proportional"
                             data-height="full-proportional"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-blendmode="overlay"

                             style="z-index: 5;"><img src="" alt="" data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']" data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']" data-no-retina> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme  blurslider-gradient"
                             id="slide-23-layer-6"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-130','-130']"
                             data-fontsize="['60','60','40','40']"
                             data-lineheight="['80','80','60','60']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"
                             data-wrapper_class="tp-nopointer"

                             data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:2;sY:3;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: rgba(4, 37, 60, 1.00);font-family:Poppins;letter-spacing:10px;"> GEME </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-23-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['30','30','0','0']"
                             data-width="['460','461','360','330']"
                             data-height="none"
                             data-whitespace="normal"

                             data-type="text"
                             data-responsive_offset="on"
                             data-wrapper_class="tp-nopointer"

                             data-frames='[{"delay":700,"speed":1000,"frame":"0","from":"y:20px;sX:2;sY:3;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; min-width: 460px; max-width: 460px; white-space: normal; font-size: 15px; line-height: 25px; font-weight: 400; color: rgba(4, 37, 60, 1.00);font-family:Poppins;letter-spacing:10px;"> PERSONALIZED HEALTH UPDATES </div>

                        <!-- LAYER NR. 4 -->
                        <a class="tp-caption rev-btn  tp-resizeme  blurslider-button"
                           href="{{route('profile')}}"  id="slide-23-layer-17"
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                           data-y="['middle','middle','middle','middle']" data-voffset="['140','140','110','110']"
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"

                           data-type="button"
                           data-actions=''
                           data-responsive_offset="on"

                           data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"y:100px;sX:2;sY:3;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255, 255, 255, 1.00);"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[0,0,0,0]"
                           data-paddingright="[35,35,35,35]"
                           data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[35,35,35,35]"
                           data-blendmode="multiply"

                           style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Poppins;background-color:rgba(4, 37, 60, 1.00);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:3px;cursor:pointer;text-decoration: none;">GET STARTED
                        </a>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
        </div><!-- END REVOLUTION SLIDER -->

@endsection

@section('content')
@endsection
@extends('layouts.master')

@section('title', "Home")

@section("css")
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">
@endsection

@section('javascript')
    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script type="text/javascript">
        var tpj=jQuery;

        var revapi6;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_6_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_6_1");
            }else{
                revapi6 = tpj("#rev_slider_6_1").show().revolution({
                    sliderType:"hero",
                    jsFileLocation:"include/rs-plugin/js/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
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
                        levels:[10,15,20,25,30,35,40,-10,-15,-20,-25,-30,-35,-40,-45,55],
                        type:"scroll",
                    },
                    shadow:0,
                    spinner:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
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
        });	/*ready*/
    </script>
@endsection

@section('header')
    @include('shared.header', [ 'classes' => 'transparent-header' ])
@endsection

@section('slider')
    <section id="slider" class="revslider-wrap clearfix">

        <div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="inspiration-header" style="background-color:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.2.6 fullscreen mode -->
            <div id="rev_slider_6_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.2.6">
                <ul>	<!-- SLIDE  -->
                    <li data-index="rs-18" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="include/rs-plugin/demos/assets/images/transparent.png" style='background-color:#f9f9f9' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-8"
                             id="slide-18-layer-4"
                             data-x="['left','left','left','left']" data-hoffset="['-264','-264','-371','-416']"
                             data-y="['top','top','top','top']" data-voffset="['-135','-135','-180','-203']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;rZ:-90deg;s:2500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="500"
                             data-basealign="slide"
                             data-responsive_offset="on"


                             style="z-index: 5;"><img src="include/rs-plugin/demos/assets/images/header_penpot.png" alt="" data-ww="['650px','650px','650px','650px']" data-hh="['500px','500px','500px','500px']" data-no-retina> </div>

                        <!-- LAYER NR. 2 -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-10"
                             id="slide-18-layer-6"
                             data-x="['left','left','left','left']" data-hoffset="['-372','-372','-540','-638']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-484','-484','-520','-522']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:left;rZ:45deg;s:2500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="650"
                             data-basealign="slide"
                             data-responsive_offset="on"


                             style="z-index: 7;"><img src="include/rs-plugin/demos/assets/images/header_papers.png" alt="" data-ww="['900px','900px','900px','900px']" data-hh="['1000px','1000px','1000px','1000px']" data-no-retina> </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-12"
                             id="slide-18-layer-9"
                             data-x="['left','left','left','left']" data-hoffset="['134','134','-2','-57']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['67','67','50','6']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="y:bottom;rZ:90deg;s:1500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="1050"
                             data-basealign="slide"
                             data-responsive_offset="on"


                             style="z-index: 8;"><img src="include/rs-plugin/demos/assets/images/header_marker.png" alt="" data-ww="['200px','200px','200px','200px']" data-hh="['300px','300px','300px','300px']" data-no-retina> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-11"
                             id="slide-18-layer-10"
                             data-x="['left','left','left','left']" data-hoffset="['181','181','30','-39']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-170','-170','-190','-212']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="y:bottom;rZ:-90deg;s:1500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="1250"
                             data-basealign="slide"
                             data-responsive_offset="on"


                             style="z-index: 9;"><img src="include/rs-plugin/demos/assets/images/header_edding.png" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['400px','400px','400px','400px']" data-no-retina> </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-12"
                             id="slide-18-layer-11"
                             data-x="['left','left','left','left']" data-hoffset="['393','393','201','81']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['218','218','183','191']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="y:bottom;rZ:-90deg;s:1500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="500"
                             data-basealign="slide"
                             data-responsive_offset="on"


                             style="z-index: 10;"><img src="include/rs-plugin/demos/assets/images/header_paperclip.png" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['100px','100px','100px','100px']" data-no-retina> </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-11"
                             id="slide-18-layer-12"
                             data-x="['left','left','left','left']" data-hoffset="['346','346','165','36']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['255','255','237','231']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;rZ:310;"

                             data-transform_in="y:bottom;rZ:90deg;s:2000;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="550"
                             data-basealign="slide"
                             data-responsive_offset="on"


                             style="z-index: 11;"><img src="include/rs-plugin/demos/assets/images/header_paperclip.png" alt="" data-ww="['50px','50px','50px','50px']" data-hh="['100px','100px','100px','100px']" data-no-retina> </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-9"
                             id="slide-18-layer-7"
                             data-x="['right','right','right','right']" data-hoffset="['-364','-364','-479','-553']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-155','-155','-180','-202']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;rZ:-65deg;s:1500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="700"
                             data-basealign="slide"
                             data-responsive_offset="on"


                             style="z-index: 12;"><img src="include/rs-plugin/demos/assets/images/header_tablet.png" alt="" data-ww="['730px','730px','730px','730px']" data-hh="['520px','520px','520px','520px']" data-no-retina> </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-11"
                             id="slide-18-layer-8"
                             data-x="['right','right','right','right']" data-hoffset="['222','222','105','8']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['8','8','-17','-10']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:right;rZ:90deg;s:1500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="500"
                             data-basealign="slide"
                             data-responsive_offset="on"


                             style="z-index: 13;"><img src="include/rs-plugin/demos/assets/images/header_pen.png" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['500px','500px','500px','500px']" data-no-retina> </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-18-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']"
                             data-fontsize="['80','80','80','60']"
                             data-lineheight="['80','80','80','60']"
                             data-width="['none','none','none','360']"
                             data-height="none"
                             data-whitespace="['nowrap','nowrap','nowrap','normal']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;s:1500;e:Power4.easeOut;"
                             data-transform_out="y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;s:600;e:Power2.easeInOut;"
                             data-start="510"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"

                             data-end="2650"

                             style="z-index: 14; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 700; color: rgba(0, 0, 0, 1.00);font-family:Roboto;text-align:center;">Be Inspired. </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-18-layer-15"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']"
                             data-fontsize="['80','80','80','60']"
                             data-lineheight="['80','80','80','60']"
                             data-width="['none','none','none','360']"
                             data-height="none"
                             data-whitespace="['nowrap','nowrap','nowrap','normal']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;s:1500;e:Power4.easeOut;"
                             data-transform_out="y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;s:600;e:Power2.easeInOut;"
                             data-start="2940"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"

                             data-end="5100"

                             style="z-index: 15; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 700; color: rgba(0, 0, 0, 1.00);font-family:Roboto;text-align:center;"> Stay Aware. </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-18-layer-16"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']"
                             data-fontsize="['80','80','80','60']"
                             data-lineheight="['80','80','80','60']"
                             data-width="['none','none','none','400']"
                             data-height="none"
                             data-whitespace="['nowrap','nowrap','nowrap','normal']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;s:1500;e:Power4.easeOut;"
                             data-transform_out="y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;s:600;e:Power2.easeInOut;"
                             data-start="5390"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 16; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 700; color: rgba(0, 0, 0, 1.00);font-family:Roboto;text-align:center;"> GEME </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-18-layer-2"
                             data-x="['center','center','center','center']" data-hoffset="['-8','-8','-8','-8']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['10','10','10','-10']"
                             data-fontsize="['20','20','20','25']"
                             data-lineheight="['20','20','20','30']"
                             data-width="['none','none','none','360']"
                             data-height="none"
                             data-whitespace="['nowrap','nowrap','nowrap','normal']"
                             data-transform_idle="o:1;"

                             data-transform_in="y:50px;rX:45deg;sX:2;sY:2;opacity:0;s:1500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="600"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 17; white-space: nowrap; font-size: 20px; line-height: 20px; font-weight: 400; color: rgba(68, 68, 68, 1.00);font-family:Roboto;text-align:center;"> Personalized health updates you care about </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption rev-btn  rs-parallaxlevel-3"
                             id="slide-18-layer-3"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','92']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:150;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(32, 85, 199, 1.00);"

                             data-transform_in="y:100px;rX:90deg;opacity:0;s:1500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="700"
                             data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"","offset":"-60px","delay":""}]'
                             data-responsive_offset="on"
                             data-responsive="off"

                             style="z-index: 18; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Roboto;background-color:rgba(41, 106, 245, 1.00);padding:0px 30px 0px 30px;border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:2px;cursor:pointer;">GET STARTED</div>

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption rev-scroll-btn revs-dark  rs-parallaxlevel-5"
                             id="slide-18-layer-13"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']"
                             data-width="35"
                             data-height="55"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="y:-50px;opacity:0;s:1500;e:Power4.easeOut;"
                             data-transform_out="opacity:0;s:300;"
                             data-start="800"
                             data-splitin="none"
                             data-splitout="none"
                             data-actions='[{"event":"click","action":"scrollbelow","offset":"-60px","delay":""}]'
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="off"

                             style="z-index: 19; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 400;border-color:rgba(51, 51, 51, 1.00);border-style:solid;border-width:3px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            <span></span>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

    </section>
@endsection

@section('content')
@endsection
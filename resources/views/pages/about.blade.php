@extends('layouts.master')

@section('title', "About")

@section('page-title')
    <section id="page-title" class="page-title-mini">

        <div class="container clearfix">
            <h1>About Us</h1>
            <span>Everything you need to know about our Company</span>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">About Us</li>
            </ol>
        </div>

    </section>
@endsection

@section('content')
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-desc">
                            <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box media-box">
                        <div class="fbox-desc">
                            <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                            <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
                        </div>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box media-box">
                        <div class="fbox-desc">
                            <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                            <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section">

                <div class="container clearfix">

                    <div class="col_two_fifth topmargin nobottommargin" style="min-height: 350px;">
                        <canvas id="chart-doughnut"></canvas>
                    </div>

                    <div class="col_three_fifth nobottommargin col_last">

                        <div class="heading-block">
                            <h3>Powerful insights to help grow your business.</h3>
                            <span>Reports let you easily track and analyze your product sales, orders, and payments.</span>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.</p>

                        <a href="#">Learn more &rarr;</a>

                    </div>

                    <div class="clear"></div><div class="line"></div>

                    <div class="col_three_fifth">

                        <div class="heading-block">
                            <h3>Advanced store statistics.</h3>
                            <span>Benchmarking your website's performance helps you make great choices for your business.</span>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.</p>

                        <a href="#">Learn more &rarr;</a>

                    </div>

                    <div class="col_two_fifth topmargin col_last" style="min-height: 350px">
                        <canvas id="chart-radar"></canvas>
                    </div>

                </div>

            </div>

            <a class="button button-full center tright topmargin footer-stick">
                <div class="container clearfix">
                    See for yourself. <strong>Browse Coffee</strong> <i class="icon-caret-right" style="top:4px;"></i>
                </div>
            </a>

        </div>

    </section>
@endsection

@section('javascript')
    <!-- Charts JS
	============================================= -->
    <script type="text/javascript" src="{{asset('js/chart.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chart-utils.js')}}"></script>

    <script type="text/javascript">

        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "Red",
                    "Orange",
                    "Yellow",
                    "Green",
                    "Blue"
                ]
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Doughnut Chart'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };


        // Radar Chart

        var color = Chart.helpers.color;
        var configRadar = {
            type: 'radar',
            data: {
                labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                    borderColor: window.chartColors.red,
                    pointBackgroundColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }, {
                    label: "My Second dataset",
                    backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                    borderColor: window.chartColors.blue,
                    pointBackgroundColor: window.chartColors.blue,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                },]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: false
                },
                scale: {
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("chart-doughnut").getContext("2d");
            window.myDoughnut = new Chart(ctx, config);
            window.myRadar = new Chart(document.getElementById("chart-radar"), configRadar);
        };

    </script>
@endsection
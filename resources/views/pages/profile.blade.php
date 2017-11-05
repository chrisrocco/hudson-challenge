@extends('layouts.master')

@section('title', "Home")

@section('header')
    @include('shared.header')
@endsection

@section('content')
    <section id="content" ng-app="geme" ng-controller="ProfileController">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="row clearfix">

                    <div class="col-sm-9">

                        <img src="images/icons/avatar.jpg" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">

                        <div class="heading-block noborder">
                            <h3>{{$user['name']}}</h3>
                            <span>{{$user['bio']}}</span>
                        </div>

                        <div class="clear"></div>

                        <div class="row clearfix">

                            <div class="col-md-12">

                                <div class="tabs tabs-alt clearfix" id="tabs-profile">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tab-posts"><i class="icon-news"></i> Recent Studies</a></li>
                                        <li><a href="#tab-genome"><i class="icon-pencil"></i> My Genomic Profile</a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tab-genome">

                                            <p> My gene list </p>

                                            <div class="col_half">
                                                <ul class="list-group">
                                                    @foreach($genes as $gene)
                                                        <li class="list-group-item">{{$gene['name']}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="tab-content clearfix" id="tab-posts">

                                            <div class="row topmargin-sm clearfix">

                                                @foreach($feed as $media)
                                                    <?php $study = $media['study'] ?>

                                                    <div class="col-xs-12 bottommargin-sm">
                                                        <div class="ipost clearfix">
                                                            <div class="row clearfix">
                                                                <div class="col-sm-4">
                                                                    <div class="entry-image">
                                                                        <a href="http://via.placeholder.com/262x147" data-lightbox="image"><img class="image_fade" src="http://via.placeholder.com/262x147" alt="Standard Post with Image"></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="entry-title">
                                                                        <h3><a href="blog-single.html">PMC ID: {{$study['pmc_id']}}</a></h3>
                                                                    </div>
                                                                    <ul class="entry-meta clearfix">
                                                                        <li><i class="icon-calendar3"></i>{{$study['date_added']}}</li>
                                                                        <li><a href="#"><i class="icon-frown"></i>
                                                                                {{$study['phenotype']['name']}}
                                                                            </a></li>
                                                                    </ul>
                                                                    <div class="entry-content">
                                                                        <p><b>{{$study['name']}}</b></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="line visible-xs-block"></div>

                    <div class="col-sm-3 clearfix">

                        <div class="fancy-title topmargin title-border">
                            <h4>My Traits</h4>
                        </div>

                        <div class="list-group">
                            @foreach($traits as $trait)
                                <a href="#" class="list-group-item bg-danger clearfix">
                                    {{((array)($trait))['name']}}
                                    <i class="icon-frown pull-right"></i>
                                </a>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
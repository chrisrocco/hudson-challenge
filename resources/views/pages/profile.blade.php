@extends('layouts.master')

@section('title', "Home")

@section('header')
    @include('shared.header')
@endsection

<?php
        $color_map = [
            "list-group-item-info",
            "list-group-item-warning",
            "list-group-item-danger",
        ];
?>

@section('content')
    <pre>
        {{ json_encode($traits, 128) }}
    </pre>
    <section id="content">

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

                                            <div class="col_half">
                                                <div class="fancy-title">
                                                    <h4>Variant Reference List</h4>
                                                </div>

                                                <ul class="list-group">
                                                    @foreach($genes as $gene)
                                                        <li class="list-group-item list-group-item-info">
                                                            {{$gene['name']}}
                                                            <span class="badge">
                                                                <a href="javascript:deleteVariant({{$gene['id']}})"
                                                                    style="color: white"> x </a>
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <div class="col_half col_last">
                                                <div class="fancy-title">
                                                    <h4>Upload Genetic Data</h4>
                                                </div>

                                                <p>Upload your genetic variants here to get news articles pertaining to risky genes</p>

                                                <form class="nobottommargin" action="{{route('variant')}}" method="post">

                                                    <div class="col_half">
                                                        <label for="billing-form-name" >Variant ID:</label>
                                                        <input id="billing-form-name" name="variant" required class="sm-form-control" />
                                                    </div>

                                                    <div class="col_half col_last">
                                                        <label for="billing-form-lname">Allele</label>
                                                        <select name="allel" class="sm-form-control">
                                                            <option value="A">A</option>
                                                            <option value="G">G</option>
                                                            <option value="T">T</option>
                                                            <option value="C">C</option>
                                                        </select>
                                                    </div>

                                                    <button class="button button-rounded button-reveal button-large button-dirtygreen"><i class="icon-upload"></i><span>Upload!</span></button>
                                                </form>

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
                                                                        <h3><a href="https://www.ncbi.nlm.nih.gov/pubmed/{{$study['pmc_id']}}/">PMC ID: {{$study['pmc_id']}}</a></h3>
                                                                    </div>
                                                                    <ul class="entry-meta clearfix">
                                                                        <li><i class="icon-calendar3"></i>{{$study['date_added']}}</li>
                                                                        <li><a href="#"><i class="icon-frown"></i>
                                                                                {{$study['phenotype']['name']}}
                                                                            </a></li>
                                                                    </ul>
                                                                    <div class="entry-content">
                                                                        <p><b>{{$study['name']}}</b></p>
                                                                        <br/>
                                                                        <p><em>Because of your phenotype: {{$study['phenotype']['name']}}</em></p>
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
                            <h4>My Phenotypes</h4>
                        </div>

                        <div class="list-group">
                            @foreach($traits as $trait)
                                <?php $trait_class = $color_map[$trait['scale']] ?>
                                <a href="#" class="list-group-item {{$trait_class}} clearfix">
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

@section('javascript')
    <script>
        function deleteVariant(id){
            $.ajax({
                url: "api/variant/"+id,
                type: "delete",
            }).done(function(){
                window.location.reload();
            });
        }
    </script>
@endsection
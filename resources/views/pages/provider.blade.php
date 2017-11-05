@extends('layouts.master')

@section('title', "Home")

@section('header')
    @include('shared.header')
@endsection

@section('content')
    <section id="content">

        <div class="content-wrap">

            <div class="container center clearfix">

                <div class="heading-block center">
                    <h1>Media Provider Demo Page</h1>
                    <span>An example request maker</span>
                </div>

                <form class="nobottommargin" action="{{route('variant')}}" method="post">

                    <div class="col_half">
                        <label for="billing-form-name" >Study ID:</label>
                        <input id="billing-form-name" name="variant" required class="sm-form-control" />
                    </div>

                    <div class="col_half col_last">
                        <label>Study ID:</label>
                        <input name="variant" required class="sm-form-control" />
                    </div>

                    <button class="button button-rounded button-reveal button-large button-dirtygreen"><i class="icon-upload"></i><span>Upload!</span></button>
                </form>

            </div>

        </div>

    </section>
@endsection
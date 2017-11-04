@extends('layouts.master')

@section('title', "Products")

@section('content')
    <div id="content">
        <div id="content-wrap">

            <div class="container clearfix">

                <div class="fancy-title title-border topmargin-lg bottommargin">
                    <h2>POPULAR PRODUCTS</h2>
                </div>

                <div class="clearfix">

                    <div id="shop" class="shop clearfix">

                        @foreach($products as $id => $product)
                            <div class="product clearfix">
                                <div class="product-image">
                                    @for($i = 0; $i < count($product['images']) && $i < 2; $i++)
                                        <a href="{{ route('product', ['id' => $id]) }}">
                                            <img src="{{$product['images'][$i]}}" alt="{{$product['name']}}">
                                        </a>
                                    @endfor
                                    <div class="product-overlay">
                                        <a href="{{ route('product', ['id' => $id]) }}" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="#" class="item-quick-view"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">{{$product['name']}}</a></h3></div>
                                    <div class="product-price"><del>${{$product['price-del']}}</del> <ins>${{$product['price']}}</ins></div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-body">
                                <div class="product modal-padding clearfix">

                                    <div class="col_half nobottommargin">
                                        <div class="product-image">
                                            <div class="fslider" data-pagi="false">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="http://via.placeholder.com/720x960" title="Beanalli"><img src="http://via.placeholder.com/720x960" alt="Beanalli"></a></div>
                                                        <div class="slide"><a href="http://via.placeholder.com/720x960" title="Beanalli"><img src="http://via.placeholder.com/720x960" alt="Beanalli"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sale-flash">Sale!</div>
                                        </div>
                                    </div>
                                    <div class="col_half nobottommargin col_last product-desc">
                                        <div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="line"></div>

                                        &lt;!&ndash; Product Single - Quantity & Cart Button
                                        ============================================= &ndash;&gt;
                                        <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
                                            <div class="quantity clearfix">
                                                <input type="button" value="-" class="minus">
                                                <input step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                                                <input type="button" value="+" class="plus">
                                            </div>
                                            <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                                        </form>&lt;!&ndash; Product Single - Quantity & Cart Button End &ndash;&gt;

                                        <div class="clear"></div>
                                        <div class="line"></div>
                                        <p>Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
                                        <ul class="iconlist">
                                            <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                                            <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                                            <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
                                        </ul>
                                        <div class="panel panel-default product-meta nobottommargin">
                                            <div class="panel-body">
                                                <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
                                                <span class="posted_in">Category: <a href="http://localhost/offbeat/wp/product-category/shoes/" rel="tag">Shoes</a>.</span>
                                                <span class="tagged_as">Tags: <a href="http://dante.swiftideas.net/product-tag/barena/" rel="tag">Barena</a>, <a href="http://dante.swiftideas.net/product-tag/blazers/" rel="tag">Blazers</a>, <a href="http://dante.swiftideas.net/product-tag/tailoring/" rel="tag">Tailoring</a>, <a href="http://dante.swiftideas.net/product-tag/unconstructed/" rel="tag">Unconstructed</a>.</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="clear bottommargin-sm"></div>

            </div>
        </div>
    </div>
@endsection
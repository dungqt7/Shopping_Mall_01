<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">{{ trans('fontend.popular') }}</a></li>
                            <li><a href="#featured" data-toggle="tab">{{ trans('fontend.featured') }}</a></li>
                            <li><a href="#latest" data-toggle="tab">{{ trans('fontend.lastest') }}</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                @foreach($product as $value)
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="{{ $value->product_image }}" alt="polo shirt img" width="200" height="200"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>{{trans('fontend.add to cart')}}</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">{{ $value->product_name }}</a></h4>
                                                <span class="aa-product-price">{{ $value->price }}$</span><span class="aa-product-price"></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                        </div>
                                        <span class="aa-badge aa-sale" href="#">{{trans('fontend.sale')}}</span>
                                    </li>
                                @endforeach
                                </ul>
                               <div class="add3">
                                        <a href="" class="spanadd3">{{ trans('fontend.xem thêm sản phẩm') }}</a>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="featured">
                                <ul class="aa-product-catg aa-popular-slider">
                                  @foreach($product as $value1)
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="{{ $value1->product_image }}" alt="polo shirt img" width="200" height="200"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>{{trans('fontend.add to cart')}}</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">{{trans('fontend.polo t-shirt')}}</a></h4>
                                                <span class="aa-product-price">{{ $value->price }}$</span><span class="aa-product-price"></span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                        </div>
                                        <span class="aa-badge aa-sale" href="#">{{trans('fontend.sale')}}</span>
                                    </li>
                                   @endforeach
                                </ul>
                               <div class="add2">
                                        <a href="" class="spanadd2">{{ trans('fontend.xem thêm sản phẩm') }}</a>
                                    </div>
                            </div>
                            <div class="tab-pane fade " id="latest">
                                <ul class="aa-product-catg aa-popular-slider">
                                @foreach( $products as $value2 )
                                    <li>
                                        <figure>
                                            <a class="aa-product-img" href="#"><img src="{{ $value2->product_image }}" alt="polo shirt img" width = "200" height="200"></a>
                                            <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>{{trans('fontend.add to cart')}}</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">{{trans('fontend.t-shirt')}}</a></h4>
                                                <span class="aa-product-price">{{trans('fontend.45,50s')}}</span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
                                  <div class="add1">
                                        <a href="" class="spanadd1">{{ trans('fontend.xem thêm sản phẩm') }}</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

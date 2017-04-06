@extends('layouts.site')

@section('content')
    <!-- start content -->
    <div class="single">
        <!-- start span1_of_1 -->
        <div class="left_content">
            <div class="span1_of_1">
                <!-- start product_slider -->
                <div class="product-view">
                    <div class="product-essential">
                        <div class="product-img-box">
                            <div class="more-views">
                                <div class="more-views-container">

                                </div>
                            </div>
                            <div class="product-image">
                                <a class="cs-fancybox-thumbs cloud-zoom"
                                   rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5"
                                   data-fancybox-group="thumb" href="{{ route('image',$product->image) }}"
                                   title="Women Shorts"
                                   alt="Women Shorts">
                                    <img src="{{ route('image',$product->image) }}" alt="Women Shorts"
                                         title="Women Shorts"/>
                                </a>
                            </div>
                            <script type="text/javascript">
                                var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"{{ route('image',$product->image) }}","main":"{{ route('image',$product->image) }}","thumb":"{{ route('image',$product->image) }}","label":""},"gallery":{"item_0":{"orig":"{{ route('image',$product->image) }}","main":"{{ route('image',$product->image) }}","thumb":"images/small/0001-2.jpg","label":""},"item_1":{"orig":"images/0001-1.jpg","main":"images/large/0001-1.jpg","thumb":"images/small/0001-1.jpg","label":""},"item_2":{"orig":"images/0001-5.jpg","main":"images/large/0001-5.jpg","thumb":"images/small/0001-5.jpg","label":""},"item_3":{"orig":"images/0001-3.jpg","main":"images/large/0001-3.jpg","thumb":"images/small/0001-3.jpg","label":""},"item_4":{"orig":"images/0001-4.jpg","main":"images/large/0001-4.jpg","thumb":"images/small/0001-4.jpg","label":""}},"type":"simple","video":false}}'),
                                    gallery_elmnt = jQblvg('.product-img-box'),
                                    galleryObj = new Object(),
                                    gallery_conf = new Object();
                                gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt=""><img src="" src_main="" title="" alt="" /></a>';
                                gallery_conf.animspeed = 200;
                                jQblvg(document).ready(function () {
                                    galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
                                    jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
                                    jQblvg('.cs-fancybox-thumbs').fancybox({
                                        prevEffect: 'none',
                                        nextEffect: 'none',
                                        closeBtn: true,
                                        arrows: true,
                                        nextClick: true,
                                        helpers: {
                                            thumbs: {
                                                position: 'bottom'
                                            }
                                        }
                                    });
                                    jQblvg('#wrap').css('z-index', '100');
                                    jQblvg('.more-views-container').elScroll({
                                        type: 'vertical',
                                        elqty: 4,
                                        btn_pos: 'border',
                                        scroll_speed: 400
                                    });

                                });

                                function initGallery(a, b, element) {
                                    galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
                                };
                            </script>
                        </div>
                    </div>
                </div>
                <!-- end product_slider -->
            </div>
            <!-- start span1_of_1 -->
            <div class="span1_of_1_des">
                <div class="desc1">
                    <h3>{{ $product->name }}</h3>
                    <h5>{{ $product->price }}</h5>
                    <div class="available">
                        <div class="btn_form">
                            {!! Form::open(['route'=>['addtocart',$product->id]]) !!}

                                    <div class="col-md-12 form-group ">
                                        <div class="col-md-4">
                                            <input class="form-control" type="number" name="count" value="1" step="1" required>
                                        </div>
                                    </div>
                                <input type="submit" value="Đặt Hàng" />
                            {!! Form::close() !!}
                        </div>
                        <p>{!! $product->description !!}</p>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
            <!-- start left content_bottom -->
            <div class="left_content_btm">

                <section class="tabs">
                    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
                    <label for="tab-1" class="tab-label-1">Chi Tiết</label>

                    <div class="clear-shadow"></div>

                    <div class="content">
                        <div class="content-1">
                            {!! $product->detail !!}
                            <div class="clear"></div>
                        </div>
                    </div>
                </section>
                <!-- end tabs -->
            </div>
            <!-- end left content_bottom -->
        </div>
        <!-- start left_sidebar -->
        <div class="left_sidebar">
            <ul class="det_nav">
                @foreach(\App\Category::all() as $item)
                    <li><a href="{{ route('product',['category' => $item->id]) }}">{{ $item->name }}</a></li>
                @endforeach
            </ul>
            <h4>Sản Phẩm được quan tâm</h4>

            @foreach(\App\Product::orderBy('view')->take(6)->get() as $item)
                <div class="left_products">
                    <div class="left_img">
                       <img src="{{ route('image',$item->image) }}" alt=""/>
                    </div>
                    <div class="left_text">
                        <p> <a href="{{ route('detail',$item->id) }}">{{ $item->name }}</a></p>
                        <span class="line">{{ $item->price }}</span>
                    </div>
                    <div class="clear"></div>
                </div>
            @endforeach
        </div>
        <div class="clear"></div>
    </div>
    @include('layouts.message')
@endsection
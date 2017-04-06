@extends('layouts.site')

@section('content')
    <div class="top_main">
        <h2>Những Sản Phẩm Mới</h2>
        <a href="{{ route('product') }}">show all</a>
        <div class="clear"></div>
    </div>
    <!-- start grids_of_3 -->
    <div class="grids_of_3">
        @foreach($product_new as $item)
            <div class="grid1_of_3">
                <a href="{{ route('detail',$item->id) }}">
                    <img src="{{ route('image',$item->image) }}" alt=""/>
                    <h3>{{ $item->name }}</h3>
                    <span class="price">{{ $item->price }}đ</span>
                </a>
            </div>
        @endforeach
        <div class="clear"></div>
    </div>
    <div class="top_main">
        <h2>Những Sản Phẩm Nổi Bật</h2>
        <a href="{{ route('product') }}">show all</a>
        <div class="clear"></div>
    </div>
    <!-- start grids_of_3 -->
    <div class="grids_of_3">
        @foreach($product_tb as $item)
            <div class="grid1_of_3">
                <a href="{{ route('detail',$item->id) }}">
                    <img src="{{ route('image',$item->image) }}" alt=""/>
                    <h3>{{ $item->name }}</h3>
                    <span class="price">{{ $item->price }}đ</span>
                </a>
            </div>
        @endforeach

        <div class="clear"></div>
    </div>
    <div class="clear"></div>
@endsection

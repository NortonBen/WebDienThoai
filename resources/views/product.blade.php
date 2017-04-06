@extends('layouts.site')

@section('content')
    <div class="col-md-3">
        <div class="top_main">
            <h2>Danh Mục</h2>
            <div class="clear"></div>
        </div>
        <div class="grids_of_3" style="text-align: left">
            @foreach($categories as $item)
                <a href="{{ route('product',['category' => $item->id]) }}">{{ $item->name }}</a>
            @endforeach
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="col-md-9">
        <div class="top_main">
            <h2>
                @if(!request()->has('category'))
                    Sản Phẩm
                 @else
                    Danh mục:  {{ \App\Category::find(request('category'))->name }}
                @endif

            </h2>
            <div class="clear"></div>
        </div>
        <!-- start grids_of_3 -->
        <div class="grids_of_3">

            @foreach($products as $item)
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
    </div>
    <div class="clear"></div>
@endsection

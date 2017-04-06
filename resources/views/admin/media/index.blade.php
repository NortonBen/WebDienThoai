<html>
<head>
    <title>Media</title>
    <meta charset="utf-8">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .menu{
            background: #afafab;
            padding: 10px;
            position: fixed;
            width: 100%;
        }
        .content{
            padding-top: 60px;
        }
        .content>.box{
            float:  left;
            padding: 10px;
            height: 200px ;
            margin: 5px;
            overflow: hidden;
            text-align: center;
            max-width: 220px;

        }
        .box{
            border: solid 1px white;
        }

        .content>.box>.image>img{
            max-width: 200px;
            min-width: 170px;
            height: 150px ;
        }
        .select {
            border: solid 1px red;
        }


    </style>
</head>
<body>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            {!! Form::open(['route' => 'admin.media.upload','enctype'=>"multipart/form-data"]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Upload</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        @include('layouts.error')
                        {{ Form::fText('name','Tên File') }}
                        <div class="form-group">
                            <label for="">File</label>
                            {{ Form::file('photo',['class'=>'form-control']) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Upload</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>
{{-- main --}}
<div class="container-fluid" id="wrapper">
    <div class="row menu">
        <div class="col-sm-12">
            <div class="col-xs-10">
                <div class="col-xs-9">
                    <input id="output" type="text" class="form-control" name="url" placeholder="URL Image Select">
                </div>
                <div class="col-sx-3">
                    <button class="btn btn-success" type="button" onclick="onSelect()">Select</button>
                </div>
            </div>
            <div class="col-xs-1">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>
            </div>
        </div>
    </div>
    <div class="row content">
            @foreach($medias  as $media)
                <div class="box" data-url="{{ $media->url }}" data-id="{{ $media->id }}">
                    <div class="image">
                        <img class="img-responsive"  src="{{ route('image',$media->url) }}" alt="">
                    </div>
                    <div class="col-sx-12" >
                        <h4><b>{{ $media->name }}</b></h4>
                    </div>
                </div>
            @endforeach
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script>
    var select =  [];
    $(document).ready(function () {
        @if($errors->any())
            $('#myModal').modal(open);
        @endif
        $('.box').click(function (e) {
            var el =$(this);
            var url = el.attr('data-url');
            var id = el.attr('data-id');
            if(select[id] == null){
                select[id] = url;
                el.addClass('select');
            }else{
                select[id] = null;
                el.removeClass('select');
            }
            render();
        });
    });

    function render() {
        var text = "";
        select.forEach(function (item) {
            if(item != null){
                if(text.length > 0){
                    text += ",";
                }
                text += item;
            }
        });
        $("#output").val(text);
    }

    function onSelect() {
        window.parent.__window = window;
        window.parent.__eventParent("select.change",select);
    }

    function reset() {
        select = [];
        $("#output").val("");
        $(".select").removeClass('select');
    }
</script>
</body>
</html>
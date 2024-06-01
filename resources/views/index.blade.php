@extends('layout')

@section('content')

    <h1 class="new-image-title"><i class="fa fa-bolt"></i>Last Images</h1>
    <div class="row">

        <!-- image-item -->
        @foreach ($images as $image)
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="image-item">
                    <div class="thumb">
                        <div class="hover-efect"></div>
                    </div>
                    <div class="image-info">
                        <a href="#" class="title">{{ $image->name }}</a>
                        <a class="channel-name" href="#">Milad Rezaeian<span>
                                            <i class="fa fa-check-circle"></i></span></a>
                        <span class="date"><i class="fa fa-clock-o"></i>{{ $image->created_at }}</span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection

@extends('layout')

@section('content')

    <div class="row">

        <x-validation-errors></x-validation-errors>

        <div class="col-md-12">
            <div id="watch">

                <h1 class="image-title">{{ $image->name }}</h1>
                <div class="image-code">
                    <img src="{{ Storage::url($image->path) }}" alt="" width="500" height="600">
                </div>

                <div class="description">
                    <p>
                        {{ $image->description }}
                    </p>
                </div>

                <div class="chanel-item">
                    <div class="chanel-thumb">
                        <a href="#"><img src="demo_img/ch-1.jpg" alt=""></a>
                    </div>
                    <div class="chanel-info">
                        <a class="title" href="#">{{ $image->owner_name }}</a>
                    </div>
                </div>

                <!-- Comments -->
                <div id="comments" class="post-comments">
                    <h3 class="post-box-title"><span>{{$image->comments->count()}}</span> Comments</h3>
                    <ul class="comments-list">

                        @foreach($image->comments as $comment)

                            <li>
                                <div class="post_author">
                                    <div class="img_in">
                                        <a href="#"><img src="{{$comment->user->gravatar}}" alt=""></a>
                                    </div>
                                    <a href="#" class="author-name">{{$comment->user->name}}</a>
                                    <time datetime="2017-03-24T18:18">{{$comment->created_at}}</time>
                                </div>
                                <p>{{$comment->body}}</p>
                            </li>

                        @endforeach

                    </ul>

                    @auth()

                        <h3 class="post-box-title">Post comments</h3>
                        <form action="{{route('comments.store', $image)}}" method="post">
                            @csrf
                            <textarea class="form-control" name="body" rows="8" id="Message"
                                      placeholder="Message"></textarea>
                            <button id="contact_submit" class="btn btn-dm">Submit</button>
                        </form>

                    @endauth

                </div>
            </div>
        </div>
    </div>

@endsection


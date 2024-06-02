@extends('layout')

@section('content')

    <div class="row">

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
                        <a class="title" href="#">Milad Rezaeian</a>
                    </div>
                </div>

                <!-- Comments -->
                <div id="comments" class="post-comments">
                    <h3 class="post-box-title"><span>19</span> Comments</h3>
                    <ul class="comments-list">
                        <li>
                            <div class="post_author">
                                <div class="img_in">
                                    <a href="#"><img src="demo_img/c1.jpg" alt=""></a>
                                </div>
                                <a href="#" class="author-name">Milad Rezaeian</a>
                                <time datetime="2017-03-24T18:18">2022-03-11 - 11:00</time>
                            </div>
                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                                industries for previewing layouts and visual mockups.</p>
                            <a href="#" class="reply">Replay</a>

                            <ul class="children">
                                <li>
                                    <div class="post_author">
                                        <div class="img_in">
                                            <a href="#"><img src="demo_img/c2.jpg" alt=""></a>
                                        </div>
                                        <a href="#" class="author-name">Milad Rezaeian</a>
                                        <time datetime="2017-03-24T18:18">2022-03-11 - 11:00</time>
                                    </div>
                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and
                                        publishing industries for previewing layouts and visual mockups.</p>
                                    <a href="#" class="reply">Replay</a>
                                </li>
                            </ul>


                        </li>
                        <li>
                            <div class="post_author">
                                <div class="img_in">
                                    <a href="#"><img src="demo_img/c2.jpg" alt=""></a>
                                </div>
                                <a href="#" class="author-name">Milad Rezaeian</a>
                                <time datetime="2017-03-24T18:18">2022-03-11 - 11:00</time>
                            </div>
                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing
                                industries for previewing layouts and visual mockups.</p>
                            <a href="#" class="reply">Replay</a>
                        </li>

                    </ul>


                    <h3 class="post-box-title">Post comments</h3>
                    <form>
                        <input type="text" class="form-control" id="Name" placeholder="Name">
                        <input type="email" class="form-control" id="Email" placeholder="Email">
                        <input type="text" class="form-control" placeholder="Site">
                        <textarea class="form-control" rows="8" id="Message" placeholder="Message"></textarea>
                        <button type="button" id="contact_submit" class="btn btn-dm">Submit</button>
                    </form>
                </div>
                <!-- // Comments -->

            </div>
        </div>
        <!-- // Watch -->

    </div><!-- // row -->

@endsection


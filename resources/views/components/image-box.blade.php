<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="image-item">
        <div class="thumb">
            <img src="{{ Storage::url($image->path) }}" alt="Image">
            <div class="hover-efect"></div>
        </div>
        <div class="image-info">
            <a href="{{ route('images.show', ['image' => $image->id]) }}" class="title">{{ $image->name }}</a>
            <a class="channel-name" href="#">Milad Rezaeian<span>
                                            <i class="fa fa-check-circle"></i></span></a>
            <span class="date"><i class="fa fa-clock-o"></i>{{ $image->created_at }}</span>
        </div>
    </div>
</div>

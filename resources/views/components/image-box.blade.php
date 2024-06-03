<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="image-item">
        <div class="thumb">
            <img src="{{ Storage::url($image->path) }}" alt="Image">
            <div class="hover-efect"></div>
        </div>
        <div class="image-info">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('images.show', ['image' => $image->id]) }}" class="title">{{ $image->name }}</a>
                </div>
                <div class="col-md-6 right">

                    @can('update', $image)
                        <a href="{{ route('images.edit', ['image' => $image->id]) }}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    @endcan

                </div>
            </div>

            <a class="channel-name" href="#">{{ $image->owner_name }}<span><i class="fa fa-check-circle"></i></span></a>
            <span class="date"><i class="fa fa-clock-o"></i>{{ $image->created_at }}</span>
        </div>
    </div>
</div>

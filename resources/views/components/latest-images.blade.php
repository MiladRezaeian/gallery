<h1 class="new-image-title"><i class="fa fa-bolt"></i>Last Images</h1>

<div class="row">

    @foreach ($images as $image)
        <x-image-box :image="$image"></x-image-box>
    @endforeach

</div>

<x-pagination :items="$images"></x-pagination>

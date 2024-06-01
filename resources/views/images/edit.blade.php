@extends('layout')

@section('content')

    <div id="upload">
        <div class="row">

            <x-validation-errors></x-validation-errors>

            <!-- upload -->
            <div class="col-md-12">
                <h1 class="page-title"><span>Upload</span> Image</h1>
                <form action="{{ route('images.update', $image) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $image->name }}"
                                   placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <label>Image Upload</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4"
                                      placeholder="Description">{{ $image->description }}</textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="contact_submit" class="btn btn-dm">Save</button>
                        </div>
                    </div>
                </form>
            </div><!-- // col-md-8 -->

            <div class="col-md-4">
                <a href="#"><img src="{{ asset('img/upload-adv.png') }}" alt=""></a>
            </div><!-- // col-md-8 -->
            <!-- // upload -->
        </div><!-- // row -->
    </div><!-- // upload -->
@endsection

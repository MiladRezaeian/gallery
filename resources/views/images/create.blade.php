@extends('layout')

@section('content')

    <div id="upload">
        <div class="row">

            <x-validation-errors></x-validation-errors>

            <div class="col-md-12">
                <h1 class="page-title"><span>Upload</span> Image</h1>
                <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{old("name")}}"
                                   placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <label>Image Upload</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4"
                                      placeholder="Description">{{old("name")}}</textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="contact_submit" class="btn btn-dm">Save</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <a href="#"><img src="{{ asset('img/upload-adv.png') }}" alt=""></a>
            </div>

        </div>
    </div>

@endsection

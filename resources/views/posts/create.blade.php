@extends('layouts.app')

@section('content')
<div class="container w-100">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new post</div>

                <div class="card-body">
                    <form method="POST" action="/p" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <label for="caption" class=" col-form-label ">Post Caption</label>

                            <div class="col-md-12">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <label for="image" class=" col-form-label ">Post Image</label>

                            <div class="col-md-12">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('email') }}" autocomplete="email">

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container w-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Profile</div>

                    <div class="card-body">
                        <form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3 justify-content-center">
                                <label for="title" class=" col-form-label ">Title</label>

                                <div class="col-md-12">
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title') ?? $user->profile->title }}" autocomplete="name" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <label for="description" class=" col-form-label ">Description</label>

                                <div class="col-md-12">
                                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                                        autocomplete="name" autofocus>{{ old('description') ?? $user->profile->description }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <label for="url" class=" col-form-label ">URL</label>

                                <div class="col-md-12">
                                    <input id="url" type="text"
                                        class="form-control @error('url') is-invalid @enderror" name="url"
                                        value="{{ old('url') ?? $user->profile->url }}" autocomplete="name" autofocus>

                                    @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <label for="image" class=" col-form-label ">Profile Image</label>

                                <div class="col-md-12">
                                    <input id="image" type="file"
                                        class="form-control @error('image') is-invalid @enderror" name="image"
                                        value="{{ old('email') }}" autocomplete="email">

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
                                        Save
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

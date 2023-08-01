@extends('layouts.app')

@section('content')
    <div class="container w-50">
        <div class="row">
            <div class="col-sm-3">
                <img alt="Profile picture" style="max-width: 100%;" class="rounded-circle img-fluid mb-5"
                    src="{{ $user->profile->profileImage() }}">
            </div>
            <div class="col-sm-9">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex">
                        <h4>{{ $user->username }}</h4>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create" class="c-blue">Add new post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <div class="mb-2 "><a href="/profile/{{ $user->id }}/edit" class="c-blue">Edit Profile</a></div>
                @endcan

                <div class="d-flex">
                    <h5 class="me-3"><b>{{ $user->posts->count() }} </b>posts</h5>
                    <h5 class="me-3"><b>{{ $user->profile->followers->count() }} </b>followers</h5>
                    <h5 class="me-3"><b>{{ $user->following->count() }} </b>following</h5>
                </div>
                <div class="pt-4">
                    <h6><b>{{ $user->profile->title }}</b></h6>
                </div>
                <div>
                    <h6>{{ $user->profile->description }}</h6>

                    <h6><a target="_blank" class="c-blue-h"
                            href="{{ $user->profile->url ?? 'N/A' }}">{{ $user->profile->url ?? 'N/A' }}</a>
                    </h6>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-sm-4 mt-2 ps-0">
                    <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100 pointer"></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

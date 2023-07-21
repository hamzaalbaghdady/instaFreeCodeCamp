@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="row">
        <div class="col-sm-3">
            <img alt="freecodecamp's profile picture" style="max-width: 70%;" class="rounded-circle img-fluid" src="https://miro.medium.com/v2/resize:fit:2400/1*B6_f-_SxscJ9FCuIjOrQAQ.jpeg">
        </div>
        <div class="col-sm-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h4>{{ $user->username }}</h4>
                <!-- <button class="btn btn-primary btn-sm mx-3" style="height: fit-content;">Follow</button> -->
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <h5 class="me-3"><b>{{ $user->posts->count() }} </b>posts</h5>
                <h5 class="me-3"><b>134K </b>followers</h5>
                <h5 class="me-3"><b>403 </b>following</h5>
            </div>
            <div class="pt-4">
                <h6><b>{{ $user->profile->title }}</b></h6>
            </div>
            <div>
                <h6>{{ $user->profile->description }}</h6>

                <h6><a target="_blank" href="https://{{ $user->profile->url ?? 'N/A' }}">{{ $user->profile->url ?? 'N/A' }}</a> </h6>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-sm-4 mt-2 ps-0">
            <img src="/storage/{{ $post->image }}" class="w-100 pointer">
        </div>
        @endforeach
    </div>
</div>
@endsection
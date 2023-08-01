@extends('layouts.app')

@section('content')
    <div class="container w-50">
        @foreach ($posts as $post)
            <div class="row mb-5 w-100 justify-content-center border-bottom">

                {{-- post owner --}}
                <div class="d-flex justify-content-between align-items-center pb-1 ">
                    <div class="d-flex align-items-center mb-1">
                        <a class="text-dark fw-bold fs-6 ms-2" style="text-decoration: none"
                            href="/profile/{{ $post->user->id }}"><img class="wx-30 rounded-circle border border-primary"
                                src="{{ $post->user->profile->profileImage() }}" alt="{{ $post->caption }}">
                            {{ $post->user->username }}</a>
                        {{-- <i class="fa-solid fa-circle fa-2xs mx-1 "></i> --}}
                        <span class="fs-1 mx-1 " style="position: relative;top:-8px;">.</span>
                        <span class="fs-7 mx-1 c-gray">{{ $post->created_at->diffForHumans() }}</span>

                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                </div>


                {{-- image --}}
                <div class="col-sm-12 mb-2">
                    <a href="/p/{{ $post->id }}">
                        <img class="w-100 rounded" src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
                    </a>
                </div>

                {{-- action --}}
                <div class="d-flex justify-content-between">
                    <div class="w-25 d-flex justify-content-between">
                        <a class="fs-3 c-red-h" href="#" title="Like"><i class="fa-regular fa-heart"></i></a>
                        <a class="fs-3 c-blue-h" href="#" title="Comment"><i class="fa-regular fa-comment"></i></a>
                        <a class="fs-3 c-blue-h" href="#" title="Share"><i class="fa-solid fa-share"></i></a>
                    </div>
                    <hr>
                    <div>
                        <a class="fs-3 c-blue-h" href="#" title="Save"><i class="fa-regular fa-bookmark"></i></a>
                    </div>
                </div>

                {{-- Info --}}
                <div class="pb-3">
                    <span class="fs-7 fw-bold">1,429 Likes</span><br>
                </div>

                {{-- owner commint --}}
                <div class=" row mb-1 d-flex justify-content-between ">
                    <div class=" align-items-center mb-2">
                        <a class="text-dark fw-bold fs-6 me-2"
                            href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                        <figcaption class="d-inline figure-caption fs-6"> {{ $post->caption }}</figcaption>
                    </div>
                </div>

                {{-- Add comment --}}
                <div class=" ">
                    <form action="#" method="post" class="d-flex ">
                        <textarea name="comment" class="form-control comment-field" placeholder="Add a comment..." style="resize: none;"></textarea>
                        <input type="submit" name="postBtn" class="btn btn-primary" hidden value="Post">
                    </form>
                </div>

            </div>
        @endforeach
    </div>
@endsection

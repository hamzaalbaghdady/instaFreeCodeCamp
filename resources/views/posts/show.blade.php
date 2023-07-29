@extends('layouts.app')

@section('content')
    <div class="container w-75 post">
        <div class="row">
            {{-- image --}}
            <div class="col-sm-6 mb-2">
                <img class="w-100 rounded" src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
            </div>
            <div class="col-sm-6">
                {{-- post owner --}}
                <div class="d-flex justify-content-between border-bottom  pb-3 ">
                    <div class="d-flex align-items-center mb-2"><img class="wx-30 rounded-circle border border-primary"
                            src="{{ $post->user->profile->profileImage() }}" alt="{{ $post->caption }}">
                        <a class="text-dark fw-bold fs-5 ms-2" style="text-decoration: none"
                            href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                        <i class="fa-solid fa-circle fa-2xs mx-2"></i>
                        <a href="#" class="c-blue fs-5 fw-bold">Follow</a>
                    </div>
                    <a href="#"><i class="fa-solid fa-ellipsis"></i></a>
                </div>


                {{-- comments --}}
                {{-- Owner Comment --}}
                <div class="comments py-3">
                    <div class=" row mb-3 d-flex justify-content-between ">
                        <div class=" align-items-center mb-2">
                            <img class="wx-30 rounded-circle border border-primary"
                                src="{{ $post->user->profile->profileImage() }}" alt="{{ $post->user->username }}">
                            <a class="text-dark fw-bold fs-5 mx-2"
                                href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                            <figcaption class="d-inline figure-caption fs-6"> {{ $post->caption }}</figcaption>
                        </div>
                    </div>
                    {{-- Others Comments --}}
                    @for ($i = 0; $i < 10; $i++)
                        <div class=" row mb-4 d-flex justify-content-between  pb-3 w-100">
                            <div class="align-items-center">
                                <img class="wx-30 rounded-circle border border-dark" src="/storage/{{ $post->image }}"
                                    alt="{{ $post->caption }}">
                                <a class="text-dark fw-bold fs-6 mx-2" style="text-decoration: none" href="#">Name</a>
                                <figcaption class="d-inline figure-caption fs-6"> Comment...</figcaption>
                            </div>

                            <div class="row">

                                <div class="col-11 fs-7 mt-2">
                                    <span class="me-2">2w</span>
                                    <span class="me-2">1 Like</span>
                                    <a href="#">Reply</a>
                                </div>
                                <div class="col-1">
                                    <a class="fs-5 c-red-h" href="#" title="Like"><i
                                            class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>

                        </div>
                    @endfor
                </div>
                {{-- action --}}
                <div class="d-flex justify-content-between border-top">
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
                <div>
                    <span class="fs-7 fw-bold">1,429 Likes</span><br>
                    <span class="fs-7">{{ $post->created_at->diffForHumans() }}</span>
                </div>

                {{-- Add comment --}}
                <div class="mb-5 mt-2">
                    <form action="#" method="post" class="d-flex">
                        <textarea name="comment" class="form-control" placeholder="Add a comment..." style="resize: none;"></textarea>
                        <input type="submit" name="postBtn" class="btn btn-primary" value="Post">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

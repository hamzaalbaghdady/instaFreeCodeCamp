@extends('layouts.app')

@section('content')
    <div class="container w-100">
        <div class="row justify-content-center">
            <div class="col-8">
                {{-- image --}}
                <div class="col-12 mb-3">
                    <img class="w-100 rounded" src="/storage/{{ $post->image }}" alt="{{ $post->caption }}">
                </div>
                {{-- action --}}
                <div class="d-flex justify-content-between">
                    <div class="w-25 d-flex justify-content-between">
                        <a class="fs-3" href="#" title="Like"><i class="fa-regular fa-heart"></i></a>
                        <a class="fs-3" href="#" title="Comment"><i class="fa-regular fa-comment"></i></a>
                        <a class="fs-3" href="#" title="Share"><i class="fa-solid fa-share"></i></a>
                    </div>
                    <hr>
                    <div>
                        <a class="fs-3" href="#" title="Save"><i class="fa-regular fa-bookmark"></i></a>
                    </div>
                </div>
                {{-- caption --}}
                <div class=" row mb-4 d-flex justify-content-between">
                    <div class="col-1"><img class="w-100 rounded-circle border border-primary"
                            src="/storage/{{ $post->image }}" alt="{{ $post->caption }}"></div>
                    <div class="col-11">
                        <figcaption class="figure-caption fs-5"><b>{{ $post->user->username }}</b> {{ $post->caption }}
                        </figcaption>
                        <span>1,429 Likes</span><br>
                        <span class="fs-6">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                </div>
                {{-- Add comment --}}
                <div class="mb-5">
                    <form action="#" method="post" class="d-flex">
                        <textarea name="comment" class="form-control" placeholder="Add a comment..." style="resize: none;"></textarea>
                        <input type="submit" name="postBtn" class="btn btn-primary" value="Post">
                    </form>
                </div>
                {{-- comments --}}
                @for ($i = 0; $i < 10; $i++)
                    <div class=" row mb-4 d-flex justify-content-between border-bottom pb-3">
                        <div class="col-1"><img class="w-100 rounded-circle border border-dark"
                                src="/storage/{{ $post->image }}" alt="{{ $post->caption }}"></div>
                        <div class="col-10">

                            <figcaption class="figure-caption fs-5"><b>Name</b> {{ $post->caption }}</figcaption>
                            <div class="fs-6"><span class="me-2">2w</span> <span class="me-2">1 Like</span> <a
                                    href="#">Reply</a>
                            </div>
                        </div>
                        <div class="col-1">
                            <a class="fs-5" href="#" title="Like"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection

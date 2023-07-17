@extends('layouts.app')

@section('content')
<div class="container w-50">
    <div class="row">
        <div class="col-sm-3">
            <img alt="freecodecamp's profile picture" class="rounded-circle img-fluid" src="https://miro.medium.com/v2/resize:fit:2400/1*B6_f-_SxscJ9FCuIjOrQAQ.jpeg">
        </div>
        <div class="col-sm-9">
            <div class="d-flex">
                <h4>{{ $user->username }}</h4>
                <button class="btn btn-primary btn-sm mx-3" style="height: fit-content;">Follow</button>
            </div>
            <div class="d-flex">
                <h5 class="me-3"><b>571 </b>posts</h5>
                <h5 class="me-3"><b>134K </b>followers</h5>
                <h5 class="me-3"><b>403 </b>following</h5>
            </div>
            <div class="pt-4">
                <h6><b>freeCodeCamp.org</b></h6>
            </div>
            <div>
                <h6>We're a global community of millions of people learning to code together.
                    LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/
                    <a href="#">www.freecodecamp.org</a>
                </h6>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-sm-4">
            <img src="{{ asset('img/1.jpg') }}" class="w-100">
        </div>
        <div class="col-sm-4">
            <img src="{{ asset('img/2.jpg') }}" class="w-100">
        </div>
        <div class="col-sm-4">
            <img src="{{ asset('img/3.jpg') }}" class="w-100">
        </div>
    </div>
</div>
@endsection
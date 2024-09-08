@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="{{ URL::asset('storage/'. $post->image) }}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div class="text-dark text-decoration-none">
                <div class="d-flex align-items-baseline ">
                    <div class="pe-3">
                        <img src="{{ URL::asset('storage/'. $post->user->profile->profileImage() ) }}" class="rounded-circle" height="40px" alt="">
                    </div>
                    <div>
                        <div class="fw-bold">
                            <a href="{{ URL::asset('profile/'.$post->user->id) }}" class="text-decoration-none text-dark pe-1">
                                {{ $post->user->username }}
                            </a>
                            •
                            <a href="#" class="ps-1">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="fw-bold">
                        <a href="{{ URL::asset('profile/'.$post->user->id) }}" class="text-decoration-none text-dark">
                            {{ $post->user->username }}
                        </a>
                    </span>
                    {{ $post->caption }}
                </p>

            </div>
        </div>
    </div>
</div>
@endsection

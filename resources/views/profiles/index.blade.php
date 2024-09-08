@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-3  text-center">
            <img src="{{ URL::asset('storage/'.$user->profile->profileImage() ) }}" height="185px" class="rounded-circle" alt="">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                    <a href="{{ URL::asset('p/create')}}" class="text-decoration-none">Add New Post</a>
                @endcan

            </div>
            @can('update', $user->profile)
                <a href="{{ URL::asset('profile/'.$user->id.'/edit') }}" class="text-decoration-none">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-4"><strong>23k</strong> followers</div>
                <div class="pe-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" class="text-decoration-none">{{ $user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="{{ URL::asset('p/'. $post->id) }}">
                    <img src="{{ URL::asset('storage/'. $post->image) }}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection

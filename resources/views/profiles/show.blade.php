@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img src="https://instagram.fgyd10-1.fna.fbcdn.net/vp/7ae44014df5cb0416b313a2d90fde2e5/5D85E047/t51.2885-19/s150x150/61293395_425831504663296_6025471149259882496_n.jpg?_nc_ht=instagram.fgyd10-1.fna.fbcdn.net"
                alt=""
                class="rounded-circle"
                >
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-baseline">
                    <h1>
                        {{$user->name}}
                    </h1>
                    <a href="/p/create">Add New Post</a>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <b>{{$user->posts->count()}} </b>
                </div>
                <div class="col-3">
                    <b>123</b>
                </div>
                <div class="col-3">
                    <b>322</b>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b>{{$user->profile->title}}</b>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span>{{$user->profile->description}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#">{{$user->profile->url}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5 pb-5">
        @foreach ($user->posts as $post)
            <div class="imgCont col-4 pb-4">
                <img
                    class="w-100"
                    src="{{url('storage/'.$post->image)}}" alt="">
            </div>
        @endforeach
    </div>
</div>
@endsection

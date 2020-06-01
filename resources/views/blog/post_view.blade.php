@extends('blog.layout')
@section('content')
<div class="bg xl:py-5 ">

    <div class="xl:w-80 md:w-90 py-2 px-3 mx-auto bg-white mt-5 mb-4">
        <div class="">
            <h1 class="xl:text-3xl xs:text-2xl">{{ $post->title }}</h1>
        </div>
        <div class="">
            <p class="xl:text-lg">{{ $post->excerpt }}</p>
        </div>
        <div style="height: 400px">
            <img class="clip-full" src="/storage/{{ $post->image }}" width="100%">
        </div>
        <p>{!! $post->body !!}</p>
    </div>
</div>
@endsection
@extends('blog.layout')
@section('content')

<div class="bg xs:h-84 xl:pt-5">
    <div class="w-100 flex xl:mt-5">
        <div class="xl:w-45 xs:w-90 mx-auto xl:mt-24 xs:mt-6 text-black xl:px-5 xs:px-3 xs:py-3 xl:py-4 rounded bg-black opacity-75" data-aos="fade-down" data-aos-duration="1500">
            <div class="text-centered text-white">
                <h1 class="xl:text-3xl xs:text-xl">Our Blog</h1>
                <p class="xs:text-sm">Our 5 years of successful conservation work in  educating the next generation of scientists and conservationists in Africa so that communities can thrive and work together with us.</p>
            </div>
        </div>
        
    </div>
    <div class="w-100 pb-5 -mt-10">
        <div class="w-90 mx-auto grid grid-3">
    
            @foreach ($posts as $post)
                <div class="bg-white xl:mx-3 xl:my-3 xs:my-2 shadow-md" >
                    <div class="">
                        <img src="/storage/{{ $post->image }}" width="100%" height="200">
                    </div>
                    <div class="xs:pb-2">
                        <div class="">
                            <h4 class="text-xs text-right px-2 text-orange-dark">Fri, May 23, 2020</h4>
                        </div>
                        <div class="px-4">
                            <h3 class="text-sm py-1">{{ $post->title }}</h3>
                            <p class="text-sm">{{ Illuminate\Support\Str::limit($post->excerpt, 80) }}</p>
                        </div>
                        <div class="text-right mx-5 mb-4">
                            <a href="/post/{{ $post->id }}" class="text-sm btn border-orange-darker">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
    
            {!! $posts->links() !!}
        
        </div>
    </div>
</div>



@endsection
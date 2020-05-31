@extends('blog.layout')
@section('content')
    <div class="w-100 pt-5">
        <div class="text-grey-darkest text-center pt-4">
            <h1 class="xl:text-3xl xs:text-2xl">Our Gallery</h1>
            <p class="text-xl -mt-3 xs:text-sm">This gallery contains our field work</p>
        </div>


        <div class="w-90 mx-auto pb-5">
            <div class="grid xl:grid-4 md:grid-3">
                @foreach ($images as $image)
                    <div id="myImg" class="mx-2 my-2" style="height: 250px">
                        <img class="clip-full" src="/storage/{{ $image->image }}" alt="{{ $image->caption }}">
                        
                    </div>
                        
                @endforeach
            </div>
        </div>
        
    </div>
@endsection
@section('extra-script')
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
      modal.style.display = "none";
    }
    </script>
    
@endsection
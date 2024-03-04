@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Galerie</h2>
</div>

<section id="section-galerie">

    <div class="gallery">
        @foreach($images as $image)
        <div class="photo">
            <img src="{{ asset('storage/galerie/' . $image->image) }}" alt="">
        </div>
        @endforeach
    </div>

    <div id="overlay" onclick="hideImage()"></div>
    <div id="lightbox">
        <img id="expandedImg" src="" alt="Expanded Image">
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var photos = document.querySelectorAll('.photo img');
        photos.forEach(function(photo) {
            photo.addEventListener('click', function() {
                var src = this.getAttribute('src');
                showImage(src);
            });
        });
    });

    function showImage(src) {
        var expandedImg = document.getElementById("expandedImg");
        expandedImg.src = src;
        document.getElementById("overlay").style.display = "block";
        document.getElementById("lightbox").style.display = "flex";
    }

    function hideImage() {
        document.getElementById("overlay").style.display = "none";
        document.getElementById("lightbox").style.display = "none";
    }
</script>
@endsection
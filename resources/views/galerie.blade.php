@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Galerie</h2>
</div>

<section id="section-galerie">

    <div class="gallery">
        <div class="photo" onclick="showImage('photo1.jpg')">
            <img src="photo1.jpg" alt="Photo 1">
        </div>
        <div class="photo" onclick="showImage('photo2.jpg')">
            <img src="photo2.jpg" alt="Photo 2">
        </div>
        <div class="photo" onclick="showImage('photo2.jpg')">
            <img src="photo2.jpg" alt="Photo 2">
        </div>
        <div class="photo" onclick="showImage('photo2.jpg')">
            <img src="photo2.jpg" alt="Photo 2">
        </div>
        <div class="photo" onclick="showImage('photo2.jpg')">
            <img src="photo2.jpg" alt="Photo 2">
        </div>
        <!-- Ajoutez d'autres photos ici -->
    </div>

    <div id="overlay" onclick="hideImage()"></div>
    <div id="lightbox">
        <span class="close" onclick="hideImage()">&times;</span>
        <img id="expandedImg" src="" alt="Expanded Image">
    </div>

</section>

<script>
    function showImage(src) {
        var expandedImg = document.getElementById("expandedImg");
        expandedImg.src = src;
        document.getElementById("overlay").style.display = "block";
        document.getElementById("lightbox").style.display = "block";
    }

    function hideImage() {
        document.getElementById("overlay").style.display = "none";
        document.getElementById("lightbox").style.display = "none";
    }
</script>
@endsection
@extends('frontmaster')

@section('title')
Gallery - Drumcondra A.F.C
@endsection

@section('content')
<div class="gallery-intro">
        <h1>Image Gallery</h1>
        <i class="fas fa-images"></i>
    </div>

    <div class="gallery">

        <div class="gallery-header">
            <h1>Some pictures of our teams in action!</h1>
        </div>

        <div class="gallery-window">
            <div class="main-img">
                <img src="/images/gallery/img1.JPG" alt="" id="current">
            </div>
            <div class="imgs">
                <img src="/images/gallery/img1.JPG">
                <img src="/images/gallery/img2.JPG">
                <img src="/images/gallery/img3.JPG">
                <img src="/images/gallery/img4.JPG">
                <img src="/images/gallery/img5.JPG">
                <img src="/images/gallery/img6.JPG">
                <img src="/images/gallery/img7.JPG">
                <img src="/images/gallery/img8.JPG">
                <img src="/images/gallery/img9.JPG">
                <img src="/images/gallery/img10.JPG">
                <img src="/images/gallery/img11.JPG">
                <img src="/images/gallery/img13.JPG">
                <img src="/images/gallery/img14.JPG">
                <img src="/images/gallery/img15.JPG">
                <img src="/images/gallery/img16.JPG">
                <img src="images/gallery/img17.JPG">
                <img src="/images/gallery/img18.JPG">
                <img src="/images/gallery/img19.JPG">
                <img src="/images/gallery/img20.JPG">
                <img src="/images/gallery/img21.JPG">
                <img src="/images/gallery/img22.JPG">
                <img src="/images/gallery/img23.JPG">
                <img src="/images/gallery/img24.JPG">
                <img src="/images/gallery/img25.JPG">
                <img src="/images/gallery/img26.JPG">
                <img src="/images/gallery/img27.JPG">
                <img src="/images/gallery/img29.JPG">
                <img src="/images/gallery/img30.JPG">
                <img src="/images/gallery/img32.JPG">
            </div>

        </div>

    </div>

    <script> 
    const current = document.querySelector("#current");
const imgs = document.querySelectorAll(".imgs img");
const opacity = 0.4;

// set first image opacity

imgs[0].style.opacity = opacity;

imgs.forEach(img => img.addEventListener("click", imgClick));

function imgClick(e) {
    // reset opacity of all images

    imgs.forEach(img => (img.style.opacity = 1));

    // change current image to src of clicked img
    current.src = e.target.src;

    // add fade-in class

    current.classList.add("fade-in");

    // remove fade in class

    setTimeout(() => current.classList.remove("fade-in"), 500);

    // change opacity to opacity variable

    e.target.style.opacity = opacity;
}
</script>
@endsection
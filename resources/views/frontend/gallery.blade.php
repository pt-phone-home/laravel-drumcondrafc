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
                <img src="/images/gallery/img1.jpg" alt="" id="current">
            </div>
            <div class="imgs">
                <img src="/images/uploads/charity.jpg">
                <img src="/images/gallery/img2.jpg">
                <img src="/images/gallery/img3.jpg">
                <img src="/images/gallery/img4.jpg">
                <img src="/images/gallery/img5.jpg">
                <img src="/images/gallery/img6.jpg">
                <img src="/images/gallery/img7.jpg">
                <img src="/images/gallery/img8.jpg">
                <img src="/images/gallery/img9.jpg">
                <img src="/images/gallery/img10.jpg">
                <img src="/images/gallery/img11.jpg">
                <img src="/images/gallery/img13.jpg">
                <img src="/images/gallery/img14.jpg">
                <img src="/images/gallery/img15.jpg">
                <img src="/images/gallery/img16.jpg">
                <img src="/images/gallery/img17.jpg">
                <img src="/images/gallery/img18.jpg">
                <img src="/images/gallery/img19.jpg">
                <img src="/images/gallery/img20.jpg">
                <img src="/images/gallery/img21.jpg">
                <img src="/images/gallery/img22.jpg">
                <img src="/images/gallery/img23.jpg">
                <img src="/images/gallery/img24.jpg">
                <img src="/images/gallery/img25.jpg">
                <img src="/images/gallery/img26.jpg">
                <img src="/images/gallery/img27.jpg">
                <img src="/images/gallery/img29.jpg">
                <img src="/images/gallery/img30.jpg">
                <img src="/images/gallery/img32.jpg">



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
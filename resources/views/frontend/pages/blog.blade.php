@extends('frontend.layouts.master')
@section('title','Blog')
@section('content')

        <header class="site-header parallax-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-7">
                        <h2 class="title">Blog</h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Accueil</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Blogs-Area-Start -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
        <div  class="blog-slider">
        @foreach ($blogs as $blog)
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="{{asset($blog->image)}}" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title"><a href="{{route('show.blog', $blog->id)}}">{{$blog->title}}</a></h3>
                        <div class="desc">
                            <p>{!!Str::limit($blog->description, 150, '...')!!}</p>
                        </div>
                        <a href="{{route('show.blog',$blog->id)}}" class="button-primary-trans mouse-dir">En savoir plus <span
                                class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">

                <nav class="navigation pagination ">
                    <div class="nav-links d-flex justify-content-center">
                        {{$blogs->links()}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Blogs-Area-End -->

        <!-- Quote-Area-Start -->
        @include('frontend.pages.widgets.quote')
        <!-- Quote-Area-End -->
@endsection

<style>
    /* Styles pour le conteneur de blog */
.blog-area {
    padding: 80px 0;
}

/* Style des cartes de blog */
.single-blog {
    height: 500px; /* Hauteur fixe pour toutes les cartes */
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin: 15px;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.single-blog:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

/* Container d'image */
.blog-image {
    height: 250px; /* Hauteur fixe pour toutes les images */
    margin: 0;
    overflow: hidden;
    position: relative;
}

.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.3s ease;
}

.single-blog:hover .blog-image img {
    transform: scale(1.05);
}

/* Contenu du blog */
.blog-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: #fff;
}

.blog-content .title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 15px;
    line-height: 1.4;
}

.blog-content .title a {
    color: #190844;
    text-decoration: none;
    transition: color 0.3s ease;
}

.blog-content .title a:hover {
    color: #ff3366;
}

.blog-content .desc {
    font-size: 15px;
    line-height: 1.6;
    color: #666;
    margin-bottom: 20px;
    flex-grow: 1;
    overflow: hidden;
}

/* Style du bouton Read More */
.button-primary-trans {
    display: inline-flex;
    align-items: center;
    padding: 12px 25px;
    background: transparent;
    border: 2px solid #190844;
    border-radius: 25px;
    color: #190844;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    margin-top: auto;
}

.button-primary-trans:hover {
    background: #190844;
    color: #fff;
}

.button-primary-trans i {
    margin-left: 10px;
    transition: transform 0.3s ease;
}

.button-primary-trans:hover i {
    transform: translateX(5px);
}

/* Styles du slider */
.blog-slider {
    padding: 20px 0;
}

.blog-slider .slick-track {
    display: flex;
    align-items: stretch;
}

.blog-slider .slick-slide {
    height: auto;
    margin: 0 15px;
}

/* Responsive */
@media (max-width: 768px) {
    .single-blog {
        height: 450px;
    }
    
    .blog-image {
        height: 200px;
    }
    
    .blog-content {
        padding: 20px;
    }
    
    .blog-content .title {
        font-size: 18px;
    }
}

/* Titre de section */
.section-title {
    margin-bottom: 50px;
}

.section-title .title {
    font-size: 32px;
    color: #190844;
    margin-bottom: 15px;
}

.section-title .desc {
    color: #666;
    font-size: 16px;
}
</style>
</style>

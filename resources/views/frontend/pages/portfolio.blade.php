@extends('frontend.layouts.master')
@section('title','Blog')
@section('content')

        <header class="site-header parallax-bg">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-7">
                        <h2 class="title">Portefeuille</h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Accueil</a></li>
                                <li>Portefeuille</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Portfolio-Area-Start -->
        <section class="portfolio-area section-padding" id="portfolio-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="filter-menu">
                            <li class="active" data-filter="*">Quelques-uns de mes projets</li>
                            @foreach ($portfolioCategories as $category)
                            <li data-filter=".{{$category->slug}}">{{$category->name}}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="portfolio-wrapper">
                    <div class="row portfolios">
                        @foreach ($portfolioItems as $item)

                        <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{$item->category->slug}}">
                            <div class="single-portfolio">
                                <figure class="portfolio-image">
                                    <img src="{{asset($item->image)}}" alt="">
                                </figure>
                                <div class="portfolio-content">
                                    <a href="{{asset($item->image)}}" data-lity class="icon"><i
                                            class="fas fa-plus"></i></a>
                                    <h4 class="title"><a href="{{route('show.portfolio', $item->id)}}">{{$item->title}}</a></h4>
                                    <div class="desc">
                                        <p>{!! Str::limit(strip_tags($item->description), 100)!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="#" class="load-more mouse-dir">Charger plus <i class="fal fa-sync"></i><span
                                class="dir-part"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-Area-End -->

        <!-- Quote-Area-Start -->
        @include('frontend.pages.widgets.quote')
        <!-- Quote-Area-End -->

@endsection

<style>
    /* Style des cartes */
.single-portfolio {
    height: 400px; /* Hauteur fixe pour toutes les cartes */
    position: relative;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 15px;
    border-radius: 8px;
    overflow: hidden;
}

/* Container de l'image */
.portfolio-image {
    width: 100%;
    height: 280px; /* Hauteur fixe pour toutes les images */
    margin: 0;
    overflow: hidden;
    position: relative;
}

/* Style de l'image */
.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Garde les proportions de l'image */
    object-position: center; /* Centre l'image */
}

/* Contenu de la carte */
.portfolio-content {
    padding: 20px;
    background: #fff;
    height: 120px; /* Hauteur fixe pour le contenu */
    overflow: hidden;
}

.portfolio-content .title {
    margin: 0 0 10px 0;
    font-size: 18px;
    font-weight: 600;
}

.portfolio-content .desc {
    font-size: 14px;
    color: #666;
    line-height: 1.4;
}

/* Style des icônes */
.portfolio-content .icon {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
}

.portfolio-content .icon:hover {
    background: #fff;
    transform: scale(1.1);
}

/* Responsive */
@media (max-width: 768px) {
    .single-portfolio {
        height: 380px;
    }
    
    .portfolio-image {
        height: 260px;
    }
    
    .portfolio-content {
        height: 120px;
    }
}

/* Container pour la grille */
.portfolio-wrapper {
    padding: 15px 0;
}

.portfolio-wrapper .row {
    margin-right: -15px;
    margin-left: -15px;
}

/* Égalisation des colonnes */
.col-md-6, .col-lg-4 {
    padding: 15px;
}
</style>
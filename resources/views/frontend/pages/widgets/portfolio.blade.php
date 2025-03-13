<!-- Ajoutez ces liens dans votre head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="portfolio-area section-padding-top" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ $portfolioTitle ? $portfolioTitle->title: '' }}</h3>
                    <div class="desc">
                        {{ $portfolioTitle ? $portfolioTitle->sub_title: '' }}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <ul class="filter-menu">
                    <li class="active" data-filter="all">Quelques uns de mes projets</li>
                    @foreach ($portfolioCategories as $category)
                    <li data-filter="{{$category->slug}}">{{$category->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="portfolio-wrapper">
            <div class="swiper portfolioSwiper">
                <div class="swiper-wrapper">
                    @foreach ($portfolioItems as $item)
                    <div class="swiper-slide" data-category="{{$item->category->slug}}">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="{{asset($item->image)}}" alt="{{$item->title}}">
                                <a href="{{asset($item->image)}}" data-lity class="zoom-icon">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                            <div class="portfolio-content">
                                <h4 class="title">
                                    <a href="{{route('show.portfolio', $item->id)}}">{{$item->title}}</a>
                                </h4>
                                <div class="desc">
                                    <p>{!! Str::limit(strip_tags($item->description), 100)!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<style>
.portfolio-area {
    padding: 80px 0;
    background: #f8f9fa;
}

.filter-menu {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 40px;
    flex-wrap: wrap;
    padding: 0;
    list-style: none;
}

.filter-menu li {
    cursor: pointer;
    padding: 8px 20px;
    border-radius: 25px;
    background: white;
    color: red;
    transition: all 0.3s ease;
    font-weight: 500;
}

.filter-menu li.active,
.filter-menu li:hover {
    background: red;
    color: white;
}

.portfolio-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 450px;
    margin: 15px;
}

.portfolio-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.zoom-icon {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #190844;
    text-decoration: none;
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(-10px);
}

.portfolio-card:hover .zoom-icon {
    opacity: 1;
    transform: translateY(0);
}
.zoom-icon :hover{
   color:red;
}

.portfolio-content {
    padding: 25px;
}

.portfolio-content .title {
    margin-bottom: 15px;
    font-size: 20px;
    font-weight: 600;
}

.portfolio-content .title a {
    color: #190844;
    text-decoration: none;
    transition: color 0.3s ease;
}

.portfolio-content .title a:hover {
    color: red;
}

.portfolio-content .desc {
    color: #666;
    font-size: 15px;
    line-height: 1.6;
}

/* Swiper custom styles */
.portfolioSwiper {
    padding: 20px 10px;
}

.swiper-button-next,
.swiper-button-prev {
    color: red;
}

.swiper-pagination-bullet-active {
    background:red;
}

@media (max-width: 768px) {
    .filter-menu {
        gap: 10px;
    }
    
    .filter-menu li {
        padding: 6px 15px;
        font-size: 14px;
    }
    
    .portfolio-card {
        height: 400px;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
// Initialisation de Swiper
const portfolioSwiper = new Swiper('.portfolioSwiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

// Gestion des filtres
document.querySelectorAll('.filter-menu li').forEach(filter => {
    filter.addEventListener('click', function() {
        // Mise à jour de la classe active
        document.querySelector('.filter-menu li.active').classList.remove('active');
        this.classList.add('active');
        
        const category = this.getAttribute('data-filter');
        
        // Filtrer les slides
        const slides = document.querySelectorAll('.swiper-slide');
        slides.forEach(slide => {
            if (category === 'all' || slide.getAttribute('data-category') === category) {
                slide.style.display = '';
            } else {
                slide.style.display = 'none';
            }
        });
        
        // Mettre à jour Swiper
        portfolioSwiper.update();
        portfolioSwiper.slideTo(0);
    });
});
</script>
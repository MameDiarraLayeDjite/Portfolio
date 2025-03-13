<section class="blog-area section-padding-top" id="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ $blogTitle ? $blogTitle->title: '' }}</h3>
                    <div class="desc">
                        {{ $blogTitle ? $blogTitle->sub_title: '' }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="swiper blogSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($blogs as $blog)
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-image">
                                    <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">
                                </div>
                                <div class="blog-content">
                                    <h3 class="title">
                                        <a href="{{route('show.blog', $blog->id)}}">{{$blog->title}}</a>
                                    </h3>
                                    <div class="desc">
                                        <p>{!!Str::limit($blog->description, 150, '...')!!}</p>
                                    </div>
                                    <a href="{{route('show.blog', $blog->id)}}" class="read-more">
                                        En savoir plus
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
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
    </div>
</section>

<style>
.blog-area {
    padding: 80px 0;
    background: #f8f9fa;
}

.section-title {
    margin-bottom: 50px;
    margin-top:75px;
}

.section-title .title {
    color: #190844;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 15px;
}

.section-title .desc {
    color: #666;
    font-size: 16px;
}

.blog-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 500px;
    margin: 15px;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-5px);
}

.blog-image {
    height: 250px;
    overflow: hidden;
    position: relative;
}

.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.blog-card:hover .blog-image img {
    transform: scale(1.05);
}

.blog-content {
    padding: 25px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.blog-content .title {
    margin: 0 0 15px;
    font-size: 18px;
    font-weight: 600;
    line-height: 1.4;
}

.blog-content .title a {
    color: #190844;
    text-decoration: none;
    transition: color 0.3s ease;
}

.blog-content .title a:hover {
    color: red;
}

.blog-content .desc {
    color: #666;
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 20px;
    flex: 1;
    overflow: hidden;
}

.read-more {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #190844;
    text-decoration: none;
    font-weight: 500;
    padding: 12px 25px;
    border-radius: 25px;
    border: 2px solid #190844;
    transition: all 0.3s ease;
    margin-top: auto;
    width: fit-content;
}

.read-more:hover {
    background:red;
    color: white;
}

.read-more i {
    transition: transform 0.3s ease;
}

.read-more:hover i {
    transform: translateX(5px);
}

/* Swiper custom styles */
.blogSwiper {
    padding: 20px 10px;
}

.swiper-button-next,
.swiper-button-prev {
    color: red;
}

.swiper-pagination-bullet-active {
    background: red;
}

@media (max-width: 768px) {
    .blog-card {
        height: 450px;
    }
    
    .blog-image {
        height: 200px;
    }
    
    .blog-content .title {
        font-size: 18px;
    }
    
    .read-more {
        padding: 10px 20px;
        font-size: 14px;
    }
}
</style>

<!-- Ajoutez le script Swiper avant la fermeture de body -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const blogSwiper = new Swiper('.blogSwiper', {
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
</script>
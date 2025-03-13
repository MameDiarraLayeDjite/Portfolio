<section class="experience-area section-padding">
    <div class="container">
    <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3 class="title" style="text-align:center;">Expérience</h3>
                            <div class="desc">
                                <p style="text-align:center;">Découvrez les projets qui témoignent de mon expertise.</p>
                            </div>
                        </div>
                    </div>
    </div>
        <div class="swiper experienceSwiper">
            <div class="swiper-wrapper">
                @foreach($experiences as $experience)
                <div class="swiper-slide">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="{{$experience->image ? asset($experience->image) : asset('images/default-image.jpg')}}" 
                                 alt="{{ $experience->title }}"
                                 class="img-fluid">
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">{{ $experience->title }}</h3>
                            <div class="project-description">
                                {!! $experience->description !!}
                            </div>
                            <div class="contact-links">
                                @if($experience->phone)
                                <a href="tel:{{ $experience->phone }}" class="contact-link">
                                    <i class="fas fa-phone-alt"></i>
                                    <span>{{ $experience->phone }}</span>
                                </a>
                                @endif
                                
                                @if($experience->email)
                                <a href="mailto:{{ $experience->email }}" class="contact-link">
                                    <i class="fas fa-envelope"></i>
                                    <span>{{ $experience->email }}</span>
                                </a>
                                @endif
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
</section>

<style>
.experience-area {
    padding: 80px 0;
    background-color: #ffff;
}

.project-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 600px;
    display: flex;
    flex-direction: column;
    margin: 20px;
    margin-bottom:40px
}

.project-image {
    height: 250px;
    overflow: hidden;
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.project-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.project-title {
    color: #190844;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 15px;
}

.project-description {
    color: #666;
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
    overflow-y: auto;
}

.contact-links {
    display: flex;
    gap: 15px;
    margin-top: auto;
}

.contact-link {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #190844;
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 6px;
    background: #f8f9fa;
    transition: all 0.3s ease;
    font-size: 14px;
}

.contact-link:hover {
    background: red;
    color: white;
}

/* Swiper custom styles */
.swiper-button-next,
.swiper-button-prev {
    color: red;
}

.swiper-pagination-bullet-active {
    background: red;
}

.swiper-slide {
    height: auto;
}

@media (max-width: 768px) {
    .project-card {
        height: 500px;
    }
    
    .project-image {
        height: 200px;
    }
    
    .project-title {
        font-size: 20px;
    }
}
</style>

<!-- Ajoutez ce script avant la fermeture de body -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.experienceSwiper', {
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
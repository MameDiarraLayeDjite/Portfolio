<section class="about-area section-padding-top">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <figure class="about-image">
                    <img src="{{ $about && $about->image ? asset($about->image) : asset('images/default-image.jpg')}}" alt="" class="wow fadeInUp" data-wow-delay="0.3s">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <h3 class="about-title" data-wow-delay="0.3s">{{ $about ? $about->title: '' }}</h3>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                    {!! $about ? $about->description: '' !!}
                    </div>
                    <a href="{{route('admin.resume.download')}}" class="button-primary-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                        <span class="icon"><i class="fal fa-download"></i></span>
                        <span class="text">Télécharger le CV</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<style>

.about-title {
  color: #190844;
  font-size: 23px;
  font-weight: 700;
  margin-bottom: 15px;
}

</style>
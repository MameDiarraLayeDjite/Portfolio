<section class="service-area section-padding-top" id="about-page">
  <div class="container">
  <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h3 class="title" style="text-align:center;">Services</h3>
                            <div class="desc">
                                <p style="text-align:center;">Des solutions digitales sur mesure pour vos besoins.</p>
                            </div>
                        </div>
                    </div>
    </div>
    <div class="row g-4">
      @foreach ($services as $service)
      <div class="col-lg-4">
        <div class="service-card h-100">
          <div class="service-content">
            <div class="service-header">
              <div class="service-icon">
                <span class="line"></span>
              </div>
              <h3 class="title wow fadeInRight" data-wow-delay="0.3s">
                {{$service->name}}
              </h3>
            </div>
            <div class="service-body wow fadeInRight" data-wow-delay="0.4s">
              <p>{{$service->description}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<style>
.service-area {
  padding: 80px 0;
  background-color: #f8f9fa;
}

.service-card {
  background: #ffffff;
  border-radius: 10px;
  padding: 30px;
  transition: all 0.3s ease;
  height: 100%;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.service-header {
  margin-bottom: 20px;
  position: relative;
}

.service-icon .line {
  display: inline-block;
  width: 30px;
  height: 3px;
  background-color: #ff0000;
  margin-bottom: 15px;
}

.title {
  color: #190844;
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 15px;
}

.service-body p {
  color: #666;
  font-size: 16px;
  line-height: 1.6;
  margin: 0;
}

/* Assure une hauteur égale pour toutes les cartes */
.row {
  display: flex;
  flex-wrap: wrap;
}

.col-lg-4 {
  display: flex;
}

/* Espacement responsive */
@media (max-width: 991px) {
  .col-lg-4:not(:first-child) {
    margin-top: 30px;
  }
}
</style>
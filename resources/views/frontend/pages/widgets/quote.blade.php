<section class="quote-area section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="quote-box">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="quote-content">
                <h3 class="title">Développeuse Web Junior, Passionnée & Créative</h3>
                <div class="desc">
                  <p>Fraîchement diplômée en développement web full stack, 
                     je combine créativité et rigueur technique pour donner vie à vos projets.
                     Découvrez mon parcours et mes réalisations académiques.</p>
                </div>
                <div class="cta-group">
                  <a href="{{route('portfolio')}}" class="button-orange mouse-dir">Explorer mes projets <span class="dir-part"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Variables pour la cohérence des couleurs et transitions */
:root {
  --primary-color: #2D3047;
  --accent-color: #FF6B6B;
  --bg-color: #F8F9FA;
  --text-color: #4A4A4A;
  --transition: all 0.3s ease-in-out;
}

/* Style de la section */
.quote-area {
  padding: 6rem 0;
  background-color: var(--bg-color);
}

/* Box design avec ombre subtile */
.quote-box {
  background: white;
  border-radius: 12px;
  padding: 3.5rem 2rem;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
  transition: var(--transition);
}

.quote-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
}

/* Style du contenu */
.quote-content {
  text-align: center;
}

.quote-content .title {
  color: var(--primary-color);
  font-size: 2.2rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
  line-height: 1.3;
}

.quote-content .desc {
  color: var(--text-color);
  font-size: 1.1rem;
  line-height: 1.7;
  margin-bottom: 2rem;
}

/* Style du bouton */
.button-orange {
  display: inline-block;
  padding: 1rem 2rem;
  background: red;
  color: white;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  font-size: 1.1rem;
  transition: var(--transition);
  position: relative;
  overflow: hidden;
}

.button-orange:hover {
  background: #ff5252;
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
}

/* Animation subtile du bouton */
.button-orange::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 120%;
  height: 120%;
  background: rgba(255, 255, 255, 0.2);
  transform: translate(-50%, -50%) scale(0);
  border-radius: 50%;
  opacity: 0;
  transition: transform 0.5s ease-out, opacity 0.3s ease-out;
}

.button-orange:hover::after {
  transform: translate(-50%, -50%) scale(1);
  opacity: 1;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .quote-area {
    padding: 4rem 0;
  }
  
  .quote-box {
    padding: 2rem 1rem;
  }
  
  .quote-content .title {
    font-size: 1.8rem;
  }
  
  .quote-content .desc {
    font-size: 1rem;
  }
  
  .button-orange {
    padding: 0.8rem 1.5rem;
    font-size: 1rem;
  }
}
</style>
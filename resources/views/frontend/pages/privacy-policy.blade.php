@extends('frontend.layouts.master')
@section('title', 'Politique de Confidentialité')
@section('content')

<header class="site-header parallax-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-7">
                <h1 class="title">Politique de Confidentialité</h1>
            </div>
            <div class="col-sm-5 text-end">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li>Politique de Confidentialité</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="terms-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="terms-wrapper">
                    <div class="terms-item">
                        <h3>1. Collecte des données</h3>
                        <p>
                            Nous recueillons vos informations personnelles uniquement lorsque cela est nécessaire pour fournir des services 
                            personnalisés tels que la conception web ou la communication avec vous. Ces données incluent votre nom, votre email 
                            et les détails spécifiques à votre projet.
                        </p>
                    </div>

                    <div class="terms-item">
                        <h3>2. Utilisation des données</h3>
                        <p>
                            Vos données sont utilisées exclusivement pour exécuter vos demandes et pour améliorer l'expérience utilisateur. 
                            Elles ne sont ni vendues ni partagées avec des tiers sans votre consentement explicite.
                        </p>
                    </div>

                    <div class="terms-item">
                        <h3>3. Sécurité des données</h3>
                        <p>
                            Nous appliquons des mesures de sécurité avancées pour protéger vos informations contre tout accès non autorisé, 
                            modification ou divulgation.
                        </p>
                    </div>

                    <div class="terms-item">
                        <h3>4. Droits des utilisateurs</h3>
                        <p>
                            Vous avez le droit de demander l'accès, la modification ou la suppression de vos données à tout moment. Contactez-nous 
                            pour toute question relative à vos informations personnelles.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>
    /* Variables globales */
:root {
  --primary-color: #2d3436;
  --secondary-color: #0984e3;
  --accent-color: red;
  --text-primary: #2d3436;
  --text-secondary: #636e72;
  --background-light: #f8f9fa;
  --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Header moderne */
.site-header {
  background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
  padding: 120px 0 100px;
  position: relative;
  overflow: hidden;
}

.site-header::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.site-header .title {
  font-size: 3.5rem;
  font-weight: 800;
  color: white;
  margin-bottom: 1.5rem;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Breadcrumbs stylisés */
.breadcrumbs {
  display: flex;
  justify-content: flex-end;
}

.breadcrumbs ul {

}

.breadcrumbs ul li {
  color: rgba(255, 255, 255, 0.9);
  font-weight: 500;
}

.breadcrumbs ul li a {
  color: white;
  text-decoration: none;
  position: relative;
}

.breadcrumbs ul li a::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  height: 1px;
  background: white;
  transform: scaleX(0);
  transition: var(--transition);
}

.breadcrumbs ul li a:hover::after {
  transform: scaleX(1);
}

/* Section principale */
.terms-area {
  background: var(--background-light);
  padding: 80px 0;
}

/* Grid container */
.terms-wrapper {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
  padding: 0;
  background: none;
  box-shadow: none;
}

/* Cards design */
.terms-item {
  background: white;
  padding: 40px;
  border-radius: 20px;
  box-shadow: var(--card-shadow);
  transition: var(--transition);
  position: relative;
  overflow: hidden;
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.terms-item::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 0;
  background: var(--accent-color);
  transition: var(--transition);
}

.terms-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px 190844;
  background: white;
  border-left: none;
  padding-left: 40px;
}

.terms-item:hover::before {
  height: 100%;
}

.terms-item h3 {
  color: 190844;
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
  position: relative;
  padding-bottom: 15px;
}

.terms-item h3::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 40px;
  height: 3px;
  background: var(--accent-color);
  border-radius: 2px;
}

.terms-item p {
  color: var(--text-secondary);
  line-height: 1.8;
  font-size: 1.05rem;
  margin: 0;
}

/* Responsive design */
@media (max-width: 992px) {
  .terms-wrapper {
    grid-template-columns: 1fr;
  }
  
  .site-header .title {
    font-size: 2.5rem;
  }
}

@media (max-width: 768px) {
  .site-header {
    padding: 80px 0;
  }
  
  .terms-item {
    padding: 30px;
  }
  
  .terms-item h3 {
    font-size: 1.3rem;
  }
  
  .terms-item p {
    font-size: 1rem;
  }
}

/* Animations */
@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.terms-item {
  animation: slideUp 0.6s ease-out forwards;
}

.terms-item:nth-child(1) { animation-delay: 0.1s; }
.terms-item:nth-child(2) { animation-delay: 0.2s; }
.terms-item:nth-child(3) { animation-delay: 0.3s; }
.terms-item:nth-child(4) { animation-delay: 0.4s; }
</style>
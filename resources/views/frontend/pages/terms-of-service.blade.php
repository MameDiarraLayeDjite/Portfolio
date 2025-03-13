@extends('frontend.layouts.master')
@section('title','Conditions d\'utilisation')
@section('content')
    <header class="site-header parallax-bg">
        <div class="header-overlay"></div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-7">
                    <h2 class="title">Conditions d'utilisation</h2>
                </div>
                <div class="col-sm-5">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li>Conditions d'utilisation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="terms-area">
        <div class="floating-shapes">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="shape-3"></div>
        </div>

        <div class="container">
            <div class="intro-section">
                <div class="intro-content">
                    <span class="intro-subtitle">Documentation Légale</span>
                    <p>Bienvenue sur mon portfolio. Ce document présente les conditions d'utilisation 
                    et mentions légales de ce site personnel présentant mes travaux et services 
                    en tant que développeuse web freelance.</p>
                </div>
            </div>

            <div class="terms-grid">
                <section class="terms-card" data-aos="fade-up">
                    <div class="card-header">
                        <div class="number-badge">01</div>
                        <h3>Identité</h3>
                    </div>
                    <div class="card-content">
                        <div class="content-wrapper">
                            <p>Ce site est édité et maintenu par :</p>
                            <ul>
                                <li><span class="list-label">Nom :</span> Mame Diarra Laye DJITE</li>
                                <li><span class="list-label">Activité :</span> Développeuse Web Freelance</li>
                                <li><span class="list-label">Email :</span> mamediarralayedjite@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="terms-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-header">
                        <div class="number-badge">02</div>
                        <h3>Propriété Intellectuelle</h3>
                    </div>
                    <div class="card-content">
                        <div class="content-wrapper">
                        <p>Les projets, codes, et designs présentés sur ce site illustrent mon parcours, mes compétences et ma passion pour le développement web. 
                        Chaque réalisation a été soigneusement élaborée ou adaptée pour mettre en avant ma créativité et mon expertise technique.</p>
                        <p>La reproduction ou l’utilisation des contenus est autorisée uniquement à des fins personnelles ou éducatives, avec mention de la source.</p>
                        </div>
                    </div>
                </section>

                <section class="terms-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-header">
                        <div class="number-badge">03</div>
                        <h3>Collaboration</h3>
                    </div>
                    <div class="card-content">
                        <div class="content-wrapper">
                            <p>Pour toute demande de collaboration, vous pouvez me contacter directement 
                            par email. Chaque projet fait l'objet d'une discussion préalable et d'un 
                            devis personnalisé selon vos besoins.</p>
                        </div>
                    </div>
                </section>

                <section class="terms-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-header">
                        <div class="number-badge">04</div>
                        <h3>Confidentialité</h3>
                    </div>
                    <div class="card-content">
                        <div class="content-wrapper">
                            <p>En conformité avec le RGPD, aucune donnée personnelle n'est collectée 
                            sur ce site hormis les informations que vous pourriez me transmettre 
                            via le formulaire de contact.</p>
                            <p>Ces informations sont utilisées uniquement pour répondre à vos demandes 
                            et ne sont en aucun cas transmises à des tiers.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection

<style>
:root {
    --color-primary: #2563eb;
    --color-secondary: #4f46e5;
    --color-accent: #f59e0b;
    --color-text: #1e293b;
    --color-text-light: #64748b;
    --color-bg: #ffffff;
    --color-bg-alt: #f8fafc;
    --color-border: #e2e8f0;
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 20px 25px -5px rgb(0 0 0 / 0.1);
}

/* Header Styles */
.site-header {
    position: relative;
    background-color: var(--color-primary);
    background-image: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
    padding: 120px 0 80px;
    overflow: hidden;
}

.header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54.627 0l.83.828-1.415 1.415L51.8 0h2.827zM5.373 0l-.83.828L5.96 2.243 8.2 0H5.374zM48.97 0l3.657 3.657-1.414 1.414L46.143 0h2.828zM11.03 0L7.372 3.657 8.787 5.07 13.857 0H11.03zm32.284 0L49.8 6.485 48.384 7.9l-7.9-7.9h2.83zM16.686 0L10.2 6.485 11.616 7.9l7.9-7.9h-2.83zM22.343 0L13.857 8.485 15.272 9.9l9.9-9.9h-2.83zM32 0l-3.486 3.485-1.414 1.414L40.97 0H32zM0 5.373l.828-.83L2.243 5.96 0 8.2V5.374zm0 5.656l.828-.829L5.657 15.03 0 20.686v-9.657zm0 5.657l.828-.828L8.485 13.03 0 21.515v-4.829zM0 16.686l.828-.828L13.03 8.485 0 21.515v-4.829zm0 5.657l.828-.828L18.687 8.485 0 27.172v-4.829zM0 27.172L.828 26.344 24.344 2.828 0 27.172zm0 5.656L.828 32 27.172 5.656 0 32.828V32.828zM0 38.485L.828 37.657 29.657 8.828 0 38.485zm0 5.656l.828-.828L32.485 8.485 0 44.141V44.14zm0 5.657l.828-.828L35.313 8.485 0 49.798v-4.829zm0 5.657l.828-.828L38.142 8.485 0 55.455v-4.829zm0 5.657l.828-.828L40.97 8.485 0 61.112v-4.829zM5.373 60L60 5.373v2.827L8.2 60H5.374zm5.657 0L60 11.03v2.828L13.857 60h-2.827zm5.657 0L60 16.686v2.83L19.514 60h-2.827zm5.657 0L60 22.343v2.83L25.171 60h-2.827zm5.657 0L60 28v2.828L30.828 60h-2.828zm5.657 0L60 33.657v2.83L36.485 60h-2.828zm5.657 0L60 39.314v2.83L42.142 60h-2.828zm5.657 0L60 44.971v2.83L47.8 60h-2.828zm5.657 0L60 50.628v2.83L53.456 60h-2.828z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
}

.site-header .title {
    color: white;
    font-size: 3.5rem;
    font-weight: 700;
    margin: 0;
}

.breadcrumbs ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 1rem;
    color: rgba(255, 255, 255, 0.8);
}

.breadcrumbs li:not(:last-child)::after {
    content: '/';
    margin-left: 1rem;
    opacity: 0.5;
}

.breadcrumbs a {
    color: white;
    text-decoration: none;
    transition: opacity 0.3s ease;
}

.breadcrumbs a:hover {
    opacity: 0.8;
}

/* Terms Area Styles */
.terms-area {
    padding: 100px 0;
    position: relative;
    background: var(--color-bg);
    overflow: hidden;
}

.floating-shapes div {
    position: absolute;
    border-radius: 50%;
    opacity: 0.05;
    z-index: 0;
}

.shape-1 {
    width: 500px;
    height: 500px;
    background: var(--color-primary);
    top: -250px;
    right: -100px;
}

.shape-2 {
    width: 300px;
    height: 300px;
    background: var(--color-secondary);
    bottom: -150px;
    left: -150px;
}

.shape-3 {
    width: 200px;
    height: 200px;
    background: var(--color-accent);
    top: 50%;
    right: -100px;
}

.intro-section {
    text-align: center;
    margin-bottom: 80px;
    position: relative;
    z-index: 1;
}

.intro-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

.intro-subtitle {
    display: inline-block;
    font-size: 0.875rem;
    font-weight: 600;
    color: #190844;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 1.5rem;
}

.intro-content p {
    font-size: 1.25rem;
    color: var(--color-text-light);
    line-height: 1.8;
}

.terms-grid {
    display: grid;
    gap: 2rem;
    position: relative;
    z-index: 1;
}

.terms-card {
    background: var(--color-bg);
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: all 0.3s ease;
}

.terms-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.card-header {
    background: var(--color-bg-alt);
    padding: 2rem;
    border-bottom: 1px solid var(--color-border);
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.number-badge {
    background: red;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 0.875rem;
}

.card-header h3 {
    margin: 0;
    font-size: 1.5rem;
    font-weight: 600;
    color: #190844;
}

.card-content {
    padding: 2rem;
}

.content-wrapper {
    color: var(--color-text-light);
    line-height: 1.8;
}

.content-wrapper ul {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
}

.content-wrapper li {
    display: flex;
    margin-bottom: 1rem;
}

.list-label {
    font-weight: 600;
    color: var(--color-text);
    margin-right: 0.5rem;
}

@media (max-width: 768px) {
    .site-header {
        padding: 80px 0 60px;
    }

    .site-header .title {
        font-size: 2.5rem;
    }

    .intro-content p {
        font-size: 1.125rem;
    }

    .card-header {
        padding: 1.5rem;
    }

    .card-content {
        padding: 1.5rem;
    }
}
</style>
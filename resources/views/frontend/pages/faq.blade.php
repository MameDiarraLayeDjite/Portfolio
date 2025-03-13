@extends('frontend.layouts.master')
@section('title','FAQ')
@section('content')
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-7">
                    <h2 class="title">FAQ</h2>
                </div>
                <div class="col-sm-5">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="faq-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="faq-wrapper">
                        <div class="faq-item">
                            <h3>Quels services proposez-vous en tant que développeuse web ?</h3>
                            <p>Je propose des services de développement web full stack, incluant la création de sites vitrines, d'applications web personnalisées et l'intégration de fonctionnalités spécifiques.</p>
                        </div>

                        <div class="faq-item">
                            <h3>Quelles technologies maîtrisez-vous ?</h3>
                            <p>Je maîtrise les technologies web modernes comme HTML5, CSS3, JavaScript, ainsi que des frameworks comme Laravel,Vue.js, React.js et autres. Je continue à me former régulièrement pour rester à jour.</p>
                        </div>

                        <div class="faq-item">
                            <h3>Comment se déroule un projet avec vous ?</h3>
                            <p>Chaque projet commence par une phase de discussion pour comprendre vos besoins, suivie d'une proposition détaillée. Je maintiens une communication régulière tout au long du développement.</p>
                        </div>

                        <div class="faq-item">
                            <h3>Proposez-vous des services de maintenance ?</h3>
                            <p>Oui, je propose des services de maintenance et de mise à jour pour assurer le bon fonctionnement de votre site web après sa mise en ligne.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
   /* Variables pour une personnalisation facile */
:root {
    --primary-color: red;
    --primary-hover: #4f46e5;
    --bg-color: #f8fafc;
    --card-bg: #ffffff;
    --text-primary: #1e293b;
    --text-secondary: #64748b;
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}

/* Style global */
body {
    background-color: var(--bg-color);
    color: var(--text-primary);
}

.section-padding {
    padding: 100px 0;
    background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
}

/* Header stylisé */
.site-header {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
    padding: 80px 0;
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
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
    opacity: 0.1;
}

.site-header .title {
    color: white;
    font-size: 3rem;
    font-weight: 700;
    margin: 0;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.breadcrumbs ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
}

.breadcrumbs ul li {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1rem;
}

.breadcrumbs ul li:not(:last-child)::after {
    content: '/';
    margin: 0 10px;
    color: rgba(255, 255, 255, 0.6);
}

.breadcrumbs ul li a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    transition: var(--transition);
}

.breadcrumbs ul li a:hover {
    color: white;
}

/* Style des cartes FAQ */
.faq-wrapper {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: var(--card-bg);
    border-radius: 16px;
    padding: 30px;
    margin-bottom: 24px;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    border: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
}

.faq-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: var(--primary-color);
    transform: scaleY(0);
    transition: var(--transition);
    transform-origin: bottom;
}

.faq-item:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.faq-item:hover::before {
    transform: scaleY(1);
}

.faq-item h3 {
    color: #190844;
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 16px;
    padding-left: 16px;
}

.faq-item p {
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0;
    padding-left: 16px;
}

/* Responsive */
@media (max-width: 768px) {
    .site-header {
        padding: 60px 0;
    }

    .site-header .title {
        font-size: 2rem;
    }

    .faq-item {
        padding: 24px;
        margin-bottom: 16px;
    }

    .section-padding {
        padding: 60px 0;
    }
}

/* Animation d'apparition au scroll */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.faq-item {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
}

.faq-item:nth-child(1) { animation-delay: 0.1s; }
.faq-item:nth-child(2) { animation-delay: 0.2s; }
.faq-item:nth-child(3) { animation-delay: 0.3s; }
.faq-item:nth-child(4) { animation-delay: 0.4s; }
</style>
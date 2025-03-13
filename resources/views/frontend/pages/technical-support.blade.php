@extends('frontend.layouts.master')
@section('title','Support Technique')
@section('content')
    <header class="site-header parallax-bg">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-7">
                    <h2 class="title">Support Technique</h2>
                </div>
                <div class="col-sm-5">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li>Support Technique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="support-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="support-wrapper">
                        <div class="contact-info text-center mb-5">
                            <h3>Besoin d'aide ?</h3>
                            <p>Je suis disponible pour vous aider avec tout problème technique.</p>
                            <div class="contact-methods mt-4">
                                <p><i class="fas fa-envelope"></i> support@votresite.com</p>
                                <p><i class="fas fa-clock"></i> Délai de réponse : 24-48h</p>
                            </div>
                        </div>

                        <div class="support-form">
                            <h3 class="text-center mb-4">Formulaire de contact</h3>
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre nom">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre email">
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Type de problème</option>
                                        <option>Problème technique</option>
                                        <option>Question sur le service</option>
                                        <option>Autre</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Décrivez votre problème"></textarea>
                                </div>
                                <button type="submit" style="background:red;" class="btn btn-primary w-100">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    /* Styles communs pour les pages légales et support */
.section-padding {
    padding: 80px 0;
}

/* Style des items */
.faq-item, .privacy-item, .support-item, .terms-item {
    background: #fff;
    padding: 25px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.faq-item:hover, .privacy-item:hover, .terms-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Titres */
.faq-item h3, .privacy-item h3, .support-item h3, .terms-item h3 {
    color: #333;
    font-size: 1.3rem;
    margin-bottom: 15px;
    font-weight: 600;
}

/* Texte */
.faq-item p, .privacy-item p, .support-item p, .terms-item p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Formulaire de support */
.support-form {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.form-control {
    border: 1px solid #ddd;
    padding: 12px 15px;
    margin-bottom: 20px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Contact info */
.contact-methods {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
}

.contact-methods p {
    margin: 10px 0;
}

.contact-methods i {
    color: #007bff;
    margin-right: 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .section-padding {
        padding: 60px 0;
    }
    
    .faq-item, .privacy-item, .support-item, .terms-item {
        padding: 20px;
    }
}
</style>
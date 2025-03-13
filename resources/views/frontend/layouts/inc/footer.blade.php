@php
    $footerInfo = \App\Models\FooterInfo::first();
    $footerIcons = \App\Models\FooterSocialLink::all();
    $footerUsefulLinks = \App\Models\FooterUsefulLink::all();
    $footerContact = \App\Models\FooterContactInfo::first();
    $footerHelpLinks = \App\Models\FooterHelpLink::all();
@endphp

<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <!-- <figure class="footer-logo">
                        <img src="{{$generalSetting && $generalSetting->footer_logo ? asset($generalSetting->footer_logo) : asset('images/default-image.jpg')}}" alt="">
                    </figure> -->
                    <h3 class="widget-title">À mon sujet</h3>
                    <p>{{ $footerInfo ? $footerInfo->info: '' }}</p>
                    <ul class="d-flex flex-wrap">
                        @foreach ($footerIcons as $icon)
                            <li><a href="{{$icon->url}}" class="footer-icon"><i class="{{$icon->icon}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Liens utiles</h3>
                <ul class="nav-menu">
                    @foreach ($footerUsefulLinks as $usefulLink)
                        <li><a href="{{$usefulLink->url}}">{{$usefulLink->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Coordonnées</h3>
                <ul>
                    <li>{{ $footerContact ? $footerContact->address: '' }}</li>
                    <li><a href="#">{{ $footerContact ? $footerContact->phone: '' }}</a></li>
                    <li><a href="#">{{ $footerContact ? $footerContact->email: '' }}</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Aide</h3>
                <ul class="nav-menu">
                    @foreach ($footerHelpLinks as $footerHelpLink)
                    <li><a href="{{$footerHelpLink->url}}">{{$footerHelpLink->name}}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>{{ $footerInfo ? $footerInfo->copy_right: '' }}</p>
                        <p>{{ $footerInfo ? $footerInfo->powered_by: '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-icon i {
    position: relative;
    display: inline-block;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.footer-icon i:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50px; /* Taille du cercle */
    height: 50px;
    background-color: transparent; /* Couleur par défaut */
    border-radius: 50%;
    z-index: -1; /* Derrière l'icône */
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.footer-icon:active i:after, /* Lors du clic */
.footer-icon:hover i:after { /* Ou au survol si nécessaire */
    background-color: red; /* Couleur rouge pour l'harmonie */
    transform: translate(-50%, -50%) scale(1.1); /* Animation légère */
}

</style>

@php

$allfooter = App\Models\Footer::find(1);

@endphp


 <footer class="footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Contact us</h5>
                                <h4 class="title">{{ $allfooter->number }}</h4>
                            </div>
                            <div class="footer__widget__text">
                                <p>{{ $allfooter->short_description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">my address</h5>
                                <h4 class="title">Kurdistan</h4>
                            </div>
                            <div class="footer__widget__address">
                                <p>{{ $allfooter->adress }}</p>
                                <a href="mailto:{{ $allfooter->email }}" class="mail">{{ $allfooter->email }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Follow me</h5>
                                <h4 class="title">socially connected</h4>
                            </div>
                            <div class="footer__widget__social">
                                <p>You can see my social media via</p>
    <ul class="footer__social__list">
        <li><a href="https://www.facebook.com/kara.kamaran.184"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.linkedin.com/in/kara-kamaran-86a081238/"><i class="fab fa-linkedin-in"></i></a></li>
      
    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright__wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright__text text-center">
                                <p>{{ $allfooter->copyright }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
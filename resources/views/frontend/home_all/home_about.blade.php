@php

$aboutpage = App\Models\About::find(1);
$allMultiImage = App\Models\MultiImage::all();
@endphp

<section id="aboutSection" class="about">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <ul class="about__icons__wrap">
        @foreach($allMultiImage as $item)
    <li>
    <img class="light" src="{{ asset($item->multi_image ) }}" alt="XD"> 
    </li>
            @endforeach

    </ul>
    </div>
    <div class="col-lg-6">
    <div class="about__content">
    <div class="section__title">
    <span class="sub-title">01 - About me</span>
    <h2 class="title">{{ $aboutpage->title }}</h2>
    </div>
    <div class="about__exp">
    <div class="about__exp__icon">
    <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
    </div>
    <div class="about__exp__content">
    <p>{{ $aboutpage->short_title }}</p>
    </div>
    </div>
    <p class="desc">{{ $aboutpage->short_description }}</p>
    <a href="https://mega.nz/file/gr4HXaaT#CSw6SD8TeyWPSs9mr9tM9BmRY1Eus9mUkBvT_9RboNg" class="btn">Download my resume</a>
    </div>
    </div>
    </div>
    </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <section class="homeContact">
        <div class="container">
        <div class="homeContact__wrap">
        <div class="row">
        <div class="col-lg-6">
            <div class="section__title">
                <span class="sub-title"> Say hello</span>
                <h2 class="title">Any questions? Feel free <br> to contact</h2>
            </div>
            <div class="homeContact__content">
             
                <h2 class="mail"><a href="mailto:karaa.kamaran@gmail.com">karaa.kamaran@gmail.com</a></h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="homeContact__form">
                <form action="#">
                    <input type="text" placeholder="Enter name*">
                    <input type="email" placeholder="Enter mail*">
                    <input type="number" placeholder="Enter number*">
                    <textarea name="message" placeholder="Enter Massage*"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- contact-area-end -->
        
@extends('layouts.app')

@section('title')
GOJAPAN
@endsection

@section ('content')
    <!-- Header -->
    <header class="text-center">
        <h1> Explore the Beautiful Japan
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            Travel is he only thing you buy
            <br>
            that makes you richer
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Cities</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div 
                         class="card-travel text-center d-flex flex-column"
                         style="background-image: url('{{ $item->galleries->count() ? Storage::url
                         ($item->galleries->first()->image) : '' }}');"
                        >
                            <div class="travel-cities">{{ $item->title }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Partners</h2>
                        <p>
                            Companies are trused us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Trusting Us</h2>
                        <p>
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-contet">
                                <img src="/frontend/images/testimonial-1.png" alt="User"
                                class="mb-4 rounded circle">
                                <h3 class="mb-4">Crislie Santoso</h3>
                                <p class="testimonial">
                                    "Pengalaman berlibur ke
                                    Jepang yang sangat
                                    menyenangkan dan tidak
                                    terlupakan.
                                    Thankyou"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Tokyo
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-contet">
                                <img src="/frontend/images/testimonial-2.png" alt="User"
                                class="mb-4 rounded circle">
                                <h3 class="mb-4">Alice Smith</h3>
                                <p class="testimonial">
                                    "Pertama kali ke Jepang
                                    dan saya merasa sangat
                                    senang menggunakan
                                    travel ini"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Kyoto
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-contet">
                                <img src="/frontend/images/testimonial-3.png" alt="User"
                                class="mb-4 rounded circle">
                                <h3 class="mb-4">Evan Johnson</h3>
                                <p class="testimonial">
                                    "Pelayanan travel yang
                                    sangat baik. Terimakasih
                                    sudah memberikan
                                    pengalaman yang
                                    luar biasa!"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Osaka
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            Help Center
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
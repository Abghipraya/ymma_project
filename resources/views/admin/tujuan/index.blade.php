@extends('artikel/template/app')

@isset($tag_dipilih)
     @section('title')
        Tag : {{$tag_dipilih->nama}}
    @endsection
@endisset

@isset($kategori_dipilih)
    @section('title')
        Kategori : {{$kategori_dipilih->nama}}
    @endsection
    @section('kategori', 'active')
@endisset

@isset($author_dipilih)
    @section('title')
        Author : {{$author_dipilih->name}}
    @endsection
    @section('author', 'active')
@endisset

@isset($home)
    @section('title', 'Berita Yayasan Mentari Meraki Asa Sumatera Utara')
    @section('home', 'active')
@endisset

@section('content')
   @isset($banner)
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            
            <div class="carousel-inner">
                @foreach ($banner as $row)
                    <div class="carousel-item {{($loop->first) ? 'active' : ''}}">
                        <a href="/tujuan/{{$row->slug}}"><img src="/upload/banner/{{$row->sampul}}"  class="d-block w-100 img-size" alt="..."></a>
                        <div class="carousel-caption ">
                            <h3 class="mb-3">{{$row->judul}}</h3>
                            <p>{!!$row->konten!!}</p>
                            <a href="#" class="button btn-call ">Hubungi sekarang  <ion-icon name="logo-whatsapp" class="icon-size"></ion-icon></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
   @endisset


<!-- Start Schedule Area -->
<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>Lorem Amet</span>
										<h4>Emergency Cases</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
                                    <i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>Fusce Porttitor</span>
										<h4>Doctors Timetable</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- single-schedule -->
							<div class="single-schedule last">
                            <div class="inner">
									<div class="icon">
                                    <i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>Fusce Porttitor</span>
										<h4>Doctors Timetable</h4>
										<p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
										<a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Start schedule Area -->


        <!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Dukungan dan Bantuan Untuk Seluruh Masyarakat</h2>
							<img src="/upload/assets/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
                            <i class="fa-solid fa-truck-medical"></i>
							</div>
							<h3>Emergency Help</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
                            <i class="fa-solid fa-mortar-pestle"></i>
							</div>
							<h3>Enriched Pharmecy</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
                            <i class="fa-solid fa-stethoscope"></i>
							</div>
							<h3>Medical Treatment</h3>
							<p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
						</div>
						<!-- End Single features -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Feautes -->

        <div id="fun-facts" class="fun-facts section overlays">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-fun">
						<i class="fa-solid fa-hospital"></i>
						<div class="content">
							<span class="counter">3468</span>
							<p>Hospital Rooms</p>
						</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-fun">
						<i class="fa-solid fa-user-doctor"></i>
						<div class="content">
							<span class="counter">3468</span>
							<p>Specialist Doctors</p>
						</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-fun">
						<i class="fa-solid fa-bed"></i>
						<div class="content">
							<span class="counter">3468</span>
							<p>Happy Patients</p>
						</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
						<i class="fa-solid fa-calendar-days"></i>
							<div class="content">
								<span class="counter">32</span>
								<p>Years of Experience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>


		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Profile Yayasan Mentari Meraki Asa Sumatera Utara</h2>
							<img src="/upload/assets/section-img.png" alt="#">
							<p>Yayasan Mentari Meraki Asa berdedikasi untuk menciptakan dampak positif dalam masyarakat Sumatera Utara.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Tentang Kami</h3>
							<p>Yayasan Mentari Meraki Asa didirikan atas kesepahaman bersama melalui penggabungan beberapa perwakilan pelaksana program penanggulangan TBC berbasis komunitas.</p>
							<p>Sejak tahun 2016 pada tingkat provinsi dan kota/kabupaten, melalui 
								SR-SSR TBC-HIV Care Aisyiyah Sumatera Utara, para pengurus Yayasan i
								ni sekaligus pelaksana program, sudah menjalankan berbagai program 
								berbasis komunitas masyarakat yang bergerak pada isu advokasi sosial, 
								kesehatan masyarakat, pendidikan non formal, dan pemberdayaan 
								masyarakat desa dengan kategori berhasil berdasarkan standar mitra.
							</p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->

<!-- Start Call to action -->
<section class="call-action overlays" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->

		<!-- Start portfolio -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Tim Yayasan Mentari Meraki Asa Sumatera Utara</h2>
							<img src="/upload/assets/section-img.png" alt="#">
							<p>Tim Yayasan Mentari Meraki Asa Sumatera Utara, bertekad untuk menginspirasi 
dan membawa perubahan positif bagi masyarakat.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="/upload/banner/pf1.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="/upload/banner/pf2.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="/upload/banner/pf3.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="/upload/banner/pf4.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="/upload/banner/pf1.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="/upload/banner/pf2.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="/upload/banner/pf3.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
							<div class="single-pf">
								<img src="/upload/banner/pf4.jpg" alt="#">
								<a href="portfolio-details.html" class="btn">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		

		<!-- Start clients -->
		<div class="clients overlays">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="/upload/banner/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="/upload/banner/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="/upload/banner/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="/upload/banner/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="/upload/banner/client1.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="/upload/banner/client2.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="/upload/banner/client3.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="/upload/banner/client4.png" alt="#">
							</div>
							<div class="single-clients">
								<img src="/upload/banner/client1.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Ens clients -->


		
		<!-- Start Blog Area -->
		<div class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>@yield('title')</h2>
							<img src="/upload/assets/section-img.png" alt="#">
							<p>Yayasan mentari meraki asa telah banyak mengikuti beberapa kegiatan dan bermitra  untuk membahas penanganan tuberkulosis</p>
						</div>
					</div>
				</div>
				<div class="row">
				@foreach ($tujuan as $row)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news mb-5">
							<div class="news-head">
							<a href="/{{ $row->slug }}"><img src="/upload/post/{{$row->sampul}}" alt="#"></a>
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{$row->created_at->format('d F Y')}}</div>
									<h2><a href="/{{ $row->slug }}">{{$row->judul}}</a></h2>
									<p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<section class="why-choose " >
			<div class="container">
				
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Contact Us</h3>
							<h4 class="mb-4">
							Organizers Secretariat
							</h4>
							<p class="mb-4">Jalan Karya Tani Gg.Makmur Kec .Medan Johor Sumatera Utara</p>
							<h4 class="mb-4">
							Contact Person
							</h4>
							<p class="mb-4"><i class="fa-solid fa-check-double mr-2"></i>Admin YMMA +62359353939</p>
							
						</div>
						<!-- End Choose Left -->
						
					</div>
				</div>
			</div>
			<div class="container ">
			<div class="googlemap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.642772792119!2d119.45000907489676!3d-5.161042094816289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee356565b3ba5%3A0xb8bbbc8094a4a9cb!2sYamali%20TB!5e0!3m2!1sid!2sid!4v1698936517109!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-iframe"></iframe>
			</div>
		</div>
		</section>
		<!--/ End Why choose -->
		
    <!-- @isset($rekomendasi)
        @if ($rekomendasi->isNotEmpty())
        <div class="container">
            <h2 class="my-4 text-center">Rekomendasi</h2>

            <div class="row mt-4">
                @foreach ($rekomendasi as $row)
                        <div class="col-md-4 mt-5">
                            <div class="card shadow-sm">
                                <a href="/{{$row->post->slug}}"><img src="/upload/post/{{$row->post->sampul}}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">{{$row->post->judul}}</h5>
                                    <p class="card-text"><small class="text-muted">{{$row->post->created_at->diffForHumans()}}</small></p>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">{{$rekomendasi->links()}}</div>
        @endif
    @endisset

    <h2 class="my-4 text-center">@yield('title')</h2>

    <div class="d-flex justify-content-center">
        <form class="form-inline my-2 my-lg-0" method="GET" action="{{url()->full()}}">
            <input class="form-control mr-sm-2" type="search" placeholder="Search For ..." aria-label="Search" name="search" value="{{$search}}">
            <button class="btn btn-primary my-2 my-sm-0 mx-auto" type="submit">Search</button>
        </form>
    </div>

    @if (session('search'))
        <div class="row mt-4 justify-content-center text-center">
            <div class="col-md-6">
                <div class="alert alert-info" role="alert">
                {{session('search')}}
                </div>
            </div>
        </div>
    @else
        <div class="row mt-4">
            @foreach ($artikel as $row)
                    <div class="col-md-4 mt-5">
                        <div class="card shadow-sm">
                            <a href="/{{$row->slug}}"><img src="/upload/post/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">{{$row->judul}}</h5>
                                <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">{{$artikel->links()}}</div>
        </div>
        @endif -->
   
@endsection







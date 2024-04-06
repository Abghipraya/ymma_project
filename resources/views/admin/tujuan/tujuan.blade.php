@extends('tujuan/template/app')
@section('title', 'Tujuan')

@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlays">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>{{$tujuan->judul}}</h2>
							<ul class="bread-list">
								<li><a href="/">Beranda</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">{{$tujuan->judul}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

        <!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<img src="/upload/post/{{$tujuan->sampul}}" alt="#">
									</div>
									<!-- News Title -->
									<h1 class="news-title"><a href="news-single.html">{{$tujuan->judul}}</a></h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											<span class="author">{{$tujuan->user->name}}</span>
											<span class="date"><i class="fa fa-clock-o"></i>{{$tujuan->created_at->format('d F Y')}}</span>
										</div>
										<div class="meta-right">
											<span class="comments"><a href="/like/{{$tujuan->id}}"> <i class="fa-solid fa-heart"></i>{{$like}} Like</a></span>
											
										</div>
									</div>
									<!-- News Text -->
									<div class="news-text">
										<p>{!!$tujuan->konten!!}</p>
										<div class="image-gallery">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-12">
													<div class="single-image mb-3">
														<img src="/upload/post/{{$tujuan->sampul}}" alt="#" width="320px" height="214px">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="single-image">
														<img src="/upload/post/{{$tujuan->sampul}}" alt="#" width="320px" height="214px">
													</div>
												</div>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse</p>
									</div>
									<span class="text-dark"> Kategori:<a href="/tujuan-kategori/{{$tujuan->kategori->slug}}"></span><span class="kategori-nama mb-3">{{$tujuan->kategori->nama}}</a></span>
                                    <span class="text-dark">Tag :</span>
                                    @foreach ($tujuan->tag as $row)
                                        @if ($loop->last)
                                            <span class="text-muted"><a href="/tujuan-tag/{{$row->slug}}">{{$row->nama}}</a></span>
                                        @else
                                            <span class="text-muted"><a href="/tujuan-tag/{{$row->slug}}">{{$row->nama}},</a></span>
                                        @endif
                                    @endforeach
								</div>
							</div>
							
							
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Kategori Berita</h3>
								<ul class="categor-list">
                                @foreach ($kategori as $row)
									<li><a href="{{ route('kategori', $row->slug) }}">{{$row->nama}}</a></li>
                                    @endforeach
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Berita Terbaru</h3>
								<!-- Single Post -->
                                @foreach ($recentPosts as $post)
								<div class="single-post">
									<div class="image">
										<img src="/upload/post/{{$post->sampul}}" alt="#">
									</div>
									<div class="content">
										<h5><a href="/{{ $post->slug }}">{{$post->judul}}</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>{{$post->created_at->format('d F Y')}}</li>
											<!-- <li><a href="/like/{{$tujuan->id}}"><i class="fa-solid fa-heart" aria-hidden="true"></i>{{$like}}</li> -->
										</ul>
									</div>
								</div>
                                @endforeach
								<!-- End Single Post -->
								<!-- Single Post -->
								
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
                                @foreach ($tag as $row)
                                <li><a href="#">{{$row->nama}}</a></li>
                                @endforeach
								</ul>
							</div>
                            
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->

   <!-- <div class="card shadow-sm mt-1" >
        <img src="/upload/post/{{$tujuan->sampul}}" height="400px" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{$tujuan->judul}}</h3>
            <small class="card-text">
                <span class="text-muted"><a href="/tujuan-kategori/{{$tujuan->kategori->slug}}">{{$tujuan->kategori->nama}}</a></span>
                -
                <span class="text-muted">{{$tujuan->created_at->diffForHumans()}}</span>
                -
                <span class="text-muted">Tag :</span>
                @foreach ($tujuan->tag as $row)
                    @if ($loop->last)
                        <span class="text-muted"><a href="/tujuan-tag/{{$row->slug}}">{{$row->nama}}</a></span>
                    @else
                        <span class="text-muted"><a href="/tujuan-tag/{{$row->slug}}">{{$row->nama}},</a></span>
                    @endif
                @endforeach
            </small>
            <br>

            <small>Author : <span class="text-muted"><a href="/tujuan-author/{{$tujuan->user->id}}">{{$tujuan->user->name}}</a></span></small>
            <hr>

            <p class="card-text">{!!$tujuan->konten!!}</p>

            <a href="/like/{{$tujuan->id}}" class="text-danger"><i class="fas fa-heart"></i> {{$like}} Like</a>
        </div>
    </div> -->
    <div class="container">
    <div id="disqus_thread" class="mt-4 mb-5"></div>
    </div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://blog-wwe7ssfgas.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection
<x-guest-layout>
    <!-- =======================
Page Banner START -->
<section class="bg-light py-5">
	<div class="container">
		<div class="row g-4 g-md-5 position-relative">
			<!-- SVG decoration -->
			<figure class="position-absolute top-0 start-0 d-none d-sm-block">
				<svg width="22px" height="22px" viewBox="0 0 22 22">
					<polygon class="fill-purple" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
				</svg>
			</figure>

			<!-- Title and Search -->
			<div class="col-lg-10 mx-auto text-center position-relative">
				<!-- SVG decoration -->
				<figure class="position-absolute top-50 end-0 translate-middle-y">
					<svg width="27px" height="27px">
						<path class="fill-orange" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
					</svg>
				</figure>
				<!-- Title -->
				<h1 class="display-6">Apa yang ingin kamu tanyakan?</h1>
				<!-- Search bar -->
				<div class="col-lg-8 mx-auto text-center mt-4">
					<form class="bg-body shadow rounded p-2" action="{{route('questionStore')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="input-group">
							<input class="form-control border-0 me-1" type="text" name="ask" placeholder="Silahkan bertanya..">
							<button type="submit" class="btn btn-blue mb-0 rounded">Kirim</button>
						</div>
					</form>
				</div>
			</div>

			<!-- Category START -->
      <div class="col-12">
				<div class="row g-4 text-center">
				  <p class="mb-0">Choose a category to quickly find the help you need</p>
					<!-- Category item -->
					<div class="col-sm-6 col-md-3">
						<div class="card card-body card-border-hover p-0">
							<a href="#" class="p-3">
								<h2><i class="fas fa-street-view transition-base"></i></h2>
								<h6 class="mb-0">User Guide</h6>
							</a>
						</div>
					</div>

					<!-- Category item -->
					<div class="col-sm-6 col-md-3">
						<div class="card card-body card-border-hover p-0">
							<a href="#" class="p-3">
								<h2><i class="fas fa-hands-helping transition-base"></i></h2>
								<h6 class="mb-0">Assistance</h6>
							</a>
						</div>
					</div>

					<!-- Category item -->
					<div class="col-sm-6 col-md-3">
						<div class="card card-body card-border-hover p-0">
							<a href="#" class="p-3">
								<h2><i class="fas fa-exclamation-circle transition-base"></i></h2>
								<h6 class="mb-0">General guide</h6>
							</a>
						</div>
					</div>

					<!-- Category item -->
					<div class="col-sm-6 col-md-3">
						<div class="card card-body card-border-hover p-0">
							<a href="#" class="p-3">
								<h2><i class="fas fa-flag transition-base"></i></h2>
								<h6 class="mb-0">Getting started</h6>
							</a>
						</div>
					</div>
				</div> <!-- Row END -->
      </div>
			<!-- Category END -->
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-5 pb-0 pb-lg-5">
	<div class="container">

		<div class="row g-4 g-md-5">
			<!-- Main content START -->
			<div class="col-lg-8">
				<!-- Title -->
				<h3 class="mb-4">Frequently Asked Questions</h3>

				<!-- FAQ START -->
				<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
					<!-- Item -->
					@foreach ($faq as $item)
						<div class="accordion-item mb-3">
							<h6 class="accordion-header font-base" id="heading-{{ $item->id }}">
								<button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $item->id }}" aria-expanded="false" aria-controls="collapse-{{ $item->id }}">
									{{ $item->ask }}
								</button>
							</h6>
							@if ( $item->id == 1)
								<div id="collapse-{{ $item->id }}" class="accordion-collapse show" aria-labelledby="heading-{{ $item->id }}" data-bs-parent="#accordionExample{{ $item->id }}">
							@else
								<div id="collapse-{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $item->id }}" data-bs-parent="#accordionExample{{ $item->id }}">
							@endif
							{{-- <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $item->id }}" data-bs-parent="#accordionExample{{ $item->id }}"> --}}
							<div class="accordion-body mt-3">
								{{ $item->answer }}
							</div>
						</div>
					</div>
					@endforeach
					

				</div>
				<!-- FAQ END -->
			</div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-lg-4">
				<div class="row mb-5 mb-lg-0">
					<div class="col-12 col-sm-6 col-lg-12">
						<!-- Category START -->
						<div class="mb-4">
							<div class="d-flex justify-content-between align-items-center bg-info bg-opacity-10 rounded p-2 position-relative mb-3">
								<h6 class="m-0 text-info">Pertanyaan terakhir</h6>
								<a href="#" class="badge text-white bg-info stretched-link">{{ $beda }}</a>
							</div>
							<div class="d-flex justify-content-between align-items-center bg-danger bg-opacity-10 rounded p-2 position-relative mb-3">
								<h6 class="m-0 text-danger">Total Pertanyaan</h6>
								<a href="#" class="badge text-white bg-danger stretched-link">{{ $question }}</a>
							</div>
							<div class="d-flex justify-content-between align-items-center bg-success bg-opacity-10 rounded p-2 position-relative mb-3">
								<h6 class="m-0 text-success">Answer</h6>
								<a href="#" class="badge text-white bg-success stretched-link">{{ $answer }}</a>
							</div>
						</div>
						<!-- Category END -->

						<!-- Related Topic START -->
						<div class="card card-body shadow p-4 mb-4">
							<!-- Title -->
							<h4 class="mb-3">Related Topic</h4>
							<!-- Item -->
							<div class="d-flex justify-content-between align-items-center mb-2">
								<a href="#" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>Business</a>
								<span class="small">(21)</span>
							</div>
							<!-- Item -->
							<div class="d-flex justify-content-between align-items-center mb-2">
								<a href="#" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>Development</a>
								<span class="small">(86)</span>
							</div>
						</div>
						<!-- Related Topic END -->
					</div>

					<div class="col-12 col-sm-6 col-lg-12">
						<!-- Tags START -->
						<div class="card card-body shadow p-4">
							<h4 class="mb-3">Popular Tags</h4>
							<ul class="list-inline mb-0">
								<li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">blog</a></li>
								<li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">business</a></li>
								<li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">theme</a></li>
								<li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">bootstrap</a></li>
								<li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">data science</a></li>
								<li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">web development</a></li>
								<li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">tips</a></li>
								<li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">machine learning</a></li>
							</ul>
						</div>
						<!-- Tags END -->
					</div>
				</div><!-- Row End -->
			</div>
			<!-- Right sidebar END -->
		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->
</x-guest-layout>

<x-app-layout>
    <!-- =======================
Page Banner START -->
@include('partials.banner-dashboard')
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

			<!-- Right sidebar START -->
			@include('partials.sidebar-dashboard')
			<!-- Right sidebar END -->

			<!-- Main content START -->
			<div class="col-xl-9">

				<div class="card border rounded-3">
					<!-- Card header START -->
					<div class="card-header border-bottom">
						<h3 class="mb-0">Data Banner Kampus Gratis</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">

						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<div class="col-md-8">
								<form class="rounded position-relative">
									<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
									<button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
								</form>
							</div>

							<!-- Select option -->
							<div class="col-md-3">
								<!-- Short by filter -->
								<form>
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
										<option value="">Sort by</option>
										<option>Free</option>
										<option>Newest</option>
										<option>Most popular</option>
										<option>Most Viewed</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Search and select END -->

						<!-- Course list table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Banner</th>
										<th scope="col" class="border-0">Description</th>  
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												<div class="w-100px">
													<img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6><a href="#">Building Scalable APIs with GraphQL</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td>40</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Ubah</a>
											<a href="#" class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0"><i class="bi bi-arrow-repeat me-1"></i>Hapus</a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												<div class="w-100px">
													<img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6><a href="#">Building Scalable APIs with GraphQL</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td>40</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Ubah</a>
											<a href="#" class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0"><i class="bi bi-arrow-repeat me-1"></i>Hapus</a>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												<div class="w-100px">
													<img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6><a href="#">Building Scalable APIs with GraphQL</a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td>40</td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Ubah</a>
											<a href="#" class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0"><i class="bi bi-arrow-repeat me-1"></i>Hapus</a>
										</td>
									</tr>
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Course list table END -->

						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
							<!-- Content -->
							<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
							<!-- Pagination -->
							<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
									<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
									<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
									<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
						<!-- Pagination END -->
					</div>
					<!-- Card body START -->
				</div>
			<!-- Main content END -->
			</div><!-- Row END -->
		</div>
	</div>	
</section>
<!-- =======================
Page content END -->

</x-app-layout>
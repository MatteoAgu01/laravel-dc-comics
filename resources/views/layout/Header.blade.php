<header class="w-100">
		<!-- MAIN NAV BAR -->
		<div class="w-75 d-flex align-items-center px-5 py-3 m-auto">
				<!-- logo -->
				<div class="w-25">
						<img class="w-50 h-50" src="images/dc-logo.png" alt="logoDc">
				</div>
				<!-- //logo -->

				<!-- nav bar link -->
				<div class="w-75">
						<ul class="d-md-flex flex-wrap justify-content-center m-0 d-none p-0">
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="{{route('comics.create')}}"> <strong> add new comic </strong></a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
								<li class="d-flex flex-column align-items-center gap-5 mx-2 my-li-link">
										<a href="#">characters</a>
										<div class="d-flex justify-self-end my-bg-blue">

										</div>
								</li>
						</ul>
				</div>
				<!--// nav bar link -->
		</div>
		<!-- //MAIN NAV BAR -->

		<div class="my-jumbo">
				<div>
						<h3 class="bg-primary text-white text-uppercase my-title ">
								courrents series
						</h3>
				</div>
		</div>
</header>

<style lang="scss" scoped>
		.my-bg-blue {
				opacity: 0;
				background-color: rgb(53, 53, 253);
				height: 5px;
				width: 80%;
				cursor: pointer;
				transition: 0.4s;
		}

		.my-text-blue {
				color: black;
				text-transform: uppercase;
				text-decoration: none;
				transition: 0.4;
		}

		.my-li-link:hover .my-bg-blue {
				opacity: 1;

		}

		.my-li-link:hover .my-text-blue {
				color: rgb(53, 53, 253);
		}

		.my-li-link {
				cursor: pointer;
		}

		.my-jumbo {
				background-image: url(../../public/img/jumbotron.jpg);
				background-size: cover;
				background-repeat: no-repeat;
				min-height: 250px;
				position: relative;
		}

		.my-title {
				position: relative;
				bottom: -230px;
				display: inline-block;
				padding: 0.6%;
				border-radius: 2px;
				margin: 0 0 0 25px;
		}
</style>

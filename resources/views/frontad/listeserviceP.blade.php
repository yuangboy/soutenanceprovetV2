
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION ELEVE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title -->
        <title>Hopital general de djiri.</title>

		<!-- Favicon -->
        <link rel="icon" href="{{ asset('frontend/assetsimg/favicon.png')}}">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">

		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/style.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css')}}">

</head>
  <style type="text/css">


.menuss {
    height: 100vh; /* Définir la hauteur du menu à 100% */
    width: 15%; /* Ajustez la largeur du menu selon vos besoins */
    background-color: #070707;
    float: left; /* Ajouter float:left pour que le menu reste sur le côté gauche */
}

.menuss ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.menuss ul li {
    padding: 8px 0;
}

.menuss ul li a {
    display: block;
    text-decoration: none;
    color: #fffdfd;
}

.menuss ul li a:hover {
    color: #f4f3f3;
}

.rigth {
    width: 85%;
   float: right;
}

</style>

  <body>

    <div class="row">
        <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logoSoutenace.png')}}" alt="">
        <span class="d-none d-lg-block">Administrateur</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <!-- End Notification Icon -->

          <!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->
    <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('assets/img/vvv.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><div>{{ Auth::user()->name }}</div></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h1 style="color: #ffffff;"> <div>{{ Auth::user()->name }}</div></h1>
              <span>Information du Profil</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
               <li>
                    <a class="dropdown-item d-flex align-items-center" href="/userprofil">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a  href="#">

                <span><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-right"></i>
                                {{ __('Se déconnecter') }}
                            </x-dropdown-link>
                        </form></span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->
</header>

         <div class="menuss" style="height: 100vh" >
                    <ul>
                        <li><a href="/admin/dashboard/listeserviceP">Liste Services</a></li>
                        <li><a href="/admin/dashboard/listepraticiensP">Liste Praticiens</a></li>
                        <li><a href="#">Liste Patients</a></li>
                        <li><a href="/admin/dashboard/">Liste Praticiens</a></li>
                        <li><a href="#">Liste Rendez-vous</a></li>
                        <!-- Ajoutez d'autres liens pour chaque page -->
                    </ul>
        </div>
        <div class="rigth">
            <header class="header" >

			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="{{ asset('frontend/assets/img/logoSoutenace.png')}}" alt="#" width="70px"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="#">Accieul <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="index.html">Accieul 1</a></li>
												</ul>
											</li>
                                            <li>
                                                <a href="/users">
                                                <i class="bi bi-circle"></i><span>Liste utilisateurs</span>
                                                </a>
                                            </li>
											<li><a href="/listepraticiensP">Praticiens </a></li>
											<li><a href="/listeservicep">Services </a></li>

											<li><a href="#">Actualités <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="blog-single.html">Actualité Details</a></li>
												</ul>
											</li>
											<li><a href="contact.html">Contacts</a></li>

										</ul>

									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>

						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
                <h3>BIENVENU SUR LA LISTE DE SERVICES </h3><br><br>
                    <table class="table">
                        <thead>
                            <th><a href="/ajouter" class = "btn btn-primary">Ajouter un service</a></th>
                            <tr>
                                <th>Id</th>
                                <th>Nom service</th>
                                <th>Description du service</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{route()}}">
                                @foreach ($service as $services)
                                            <tr>
                                                <td>{{$services->id}}</td>
                                                <td>{{$services->libelle}}</td>
                                                <td>{{$services->description}}</td>
                                                <td>
                                                    <button type="submit">Modifier</button>

                                    <a href="/delete-service/{{ $services->id}}" class="btn btn-danger">Delete</a>
                                </td>

                                            </tr>
                                    @endforeach
                                </form>
                        </tbody>

                    </table>
            </div>

        {{-- Fin service --}}

        {{--users--}}

        {{--endeusers--}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


@extends('layouts.master')

@section('content')

		<!-- MAIN -->
		<div class="main">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
                                        <img src="{{ asset('gambar/profile.jpg') }}" width="200" height="250" class="d-inline-block align-top" alt="">
										<h3 class="name">{{ Auth::user()->name }}</h3>
                                        <span class="online-status status-available">Manajer Pemasaran</span>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail"></div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading"> MY PROFILE</h4>
								<!-- PROFILE -->
                                     <div class="profile-info">
										<h4>About</h4>
										<p>Interactively fashion excellent information after distinctive outsourcing.</p>
									</div>

								    <div class="profile-info">
										<ul class="list-unstyled list-justify">
											<li>Birthdate <span>30 Dec, 1995</span></li>
											<li>Mobile <span>(124) 823409234</span></li>
											<li>Email <span>{{ Auth::user()->email }}</span></li>
										</ul>
									</div>

                                    <div class="profile-info">
										<h4>Social</h4>
										<ul class="list-inline social-icons">
											<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" class="github-bg"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
                                    
                                    <div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div>
								<!-- END PROFILE -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
		</div>
		<!-- END MAIN -->
@stop
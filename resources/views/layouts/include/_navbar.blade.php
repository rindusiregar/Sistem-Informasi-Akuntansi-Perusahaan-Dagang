<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
		<nav class="navbar navbar-light">
			<a class="navbar-brand" href="#">
				<img src="{{ asset('gambar/letter.jpg') }}" width="40" height="40" class="d-inline-block align-top" alt="">
				RR COMPANY
			</a>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						  <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('gambar/butterfly.png') }}" class="img-circle" alt="Avatar"> <i class="icon-submenu lnr lnr-chevron-down"></i>
								{{ Auth::user()->name }}
							</a>
							<ul class="dropdown-menu">
								<li><a href="/profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp



<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">KomStore</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Menu
					</li>

					<li class="{{checkRouteActive('admin/dashboard')}}">
						<a class="sidebar-link" href="{{url('admin/dashboard')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="{{checkRouteActive('admin/article')}}">
						<a class="sidebar-link" href="{{url('admin/article')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Article</span>
            </a>
					</li>

					<li class="{{checkRouteActive('admin/coment')}}">
						<a class="sidebar-link" href="{{url('admin/coment')}}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Coment</span>
            </a>
					</li>

						<li class="{{checkRouteActive('admin/user')}}">
						<a class="sidebar-link" href="{{url('admin/user')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">User</span>
            </a>
					</li>
					<li class="{{checkRouteActive('home')}}">
						<a class="sidebar-link" href="{{url('home')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Blog</span>
            </a>
					</li>

					</ul>
			</div>
		</nav>
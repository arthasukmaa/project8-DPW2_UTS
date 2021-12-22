<!DOCTYPE html>
<html lang="en">

<head>
	
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Admin</title>

	@include("template.admin.section.assets")
</head>

<body>
	<div class="wrapper">
		@include("template.admin.section.sidebar")

		<div class="main">
			@include("template.admin.section.header")

			<main class="content">
				<div class="container-fluid p-0">
					@include('template.admin.utils.notif')
					@yield('content')
					
				</div>
			</main>

			@include("template.admin.section.footer")
		</div>
	</div>

	@include("template.admin.section.js")

</body>

</html>
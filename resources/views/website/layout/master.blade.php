<!DOCTYPE html>
<html lang="en">
@include('website.partials.head')
<body id="body">
	@include('website.partials.popup_login')
	{{-- header --}}
	@include('website.partials.header')
	{{-- content --}}
	@yield('content')
	{{-- footer --}}
	@include('website.partials.footer')
	{{-- Script --}}
	@include('website.partials.script')
</body>
</html>
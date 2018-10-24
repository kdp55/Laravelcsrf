<!doctype html>
<html lang="en">

@include('includes.head')


<body>
<div cl="container">
<header>
@include('includes.menu')
</header>
<main roles="main">

    @yield('content')
</main>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

@include('includes.jsfooter')
<footer>
@include('includes.footer')
</footer>

</div>
</body>
</html>
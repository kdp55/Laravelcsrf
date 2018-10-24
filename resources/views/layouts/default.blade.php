<!doctype html>
<html lang="en">

@include('includes.head')


<body>

@include('includes.menu')

<main roles="main">

    @yield('content')
</main>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

@include('includes.jsfooter')

@include('includes.footer')

</body>
</html>
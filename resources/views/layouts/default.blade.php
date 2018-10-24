<!doctype html>
<html lang="en">

@include('includes.head')
<body>
<br>
<br>

<div class="container mt-lg-5">
    <header>
        @include('includes.mainNav')

    </header>

    <main role="main">
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>

</div>
</body>

</html>
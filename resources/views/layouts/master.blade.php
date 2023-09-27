<!-- resources/views/layouts/master.blade.php -->
@include('include/header')
@include('include/navbar')
@include('include/sidebar')

<main>
    @yield('content')
</main>

@include('include/modal')
@include('include/footer')

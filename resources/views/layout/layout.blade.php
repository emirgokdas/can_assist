<!doctype html>
<html lang="en" data-bs-theme="blue-theme">
    @include('partials.head')
<body>
    @include('partials.header')
    @include('partials.aside')
    <main class="main-wrapper">
        @yield('content')
    </main>
    
    @include('partials.footer')
    @include('partials.startCart')
    @include('partials.switcher')
    @include('partials.script')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
@include('frontend.theme.ui.head')
<body>

@include('frontend.theme.ui.navbar')

@yield('content')


@stack('scripts')

</body>
</html>

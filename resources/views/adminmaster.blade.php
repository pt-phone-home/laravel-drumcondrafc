<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <title>@yield('title')</title>
</head>
<body onLoad="iFrameOn();">
    <div class="container">
        @include('components.banner') 
        @include('components.admin-header')
        @yield('content')




        @include('components.footer')
    </div>
    
    <script src="/js/app.js"></script>
    @include('components.scripts')
    <script>
            CKEDITOR.replace('content');
        </script>
</body>
</html>
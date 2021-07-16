<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')

    <title>@yield("title") | Landing Page</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="" />
    <link rel="shortcut icon" href="image/x-icon" />

    @method("before-style")
    <!-- style -->
    @include("includes.style")
    @method("after-style")
</head>

<body>
    @include("includes.header")
    @yield("content")
    @include("includes.footer")

    @method("before-script")
    {{-- Script --}}
    @include("includes.script")
    @method("after-script")
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    @include('Frontend.layout.header.css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('Frontend.layout.header.header')
    <!-- Header End -->

    <!-- Hero Section Begin -->
   @include('Frontend.layout.Section.hero')
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    @include('Frontend.layout.Section.banner')
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    @include('Frontend.layout.Section.women')
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    @include('Frontend.layout.Section.deal')
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    @include('Frontend.layout.Section.man')
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    @include('Frontend.layout.Section.instagram')
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
   @include('Frontend.layout.Section.latest')
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
    @include('Frontend.layout.Section.partner')
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    @include('Frontend.layout.Footer.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('Frontend.layout.Footer.js')
</body>

</html>
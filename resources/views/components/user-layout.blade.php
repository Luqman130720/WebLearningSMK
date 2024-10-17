<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('assets/js/image-preview.js') }}"></script>
</head>

<body class="bg-subtle-pattern bg-repeat bg-custom-small">

    <x-UserNavbar></x-UserNavbar>

    {{ $slot }}

    <x-UserAspirations></x-UserAspirations>
    <x-Faq></x-Faq>

    <x-UserFooter></x-UserFooter>

</body>

</html>

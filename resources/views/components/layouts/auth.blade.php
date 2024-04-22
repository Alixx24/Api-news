<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @include('customer.layouts.head-tag')
    @yield('head-tag')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @livewireStyles


</head>

<body>
@include('customer.layouts.header')
    <div class="container m-5 p-5">
        <div class="row">
            <div class="col">
                <livewire:auth.register />
                <!--  -->
            </div>
        </div>
    </div>
    @include('customer.layouts.footer')



    @include('customer.layouts.script')
    @yield('script')
    @livewireScripts

</body>
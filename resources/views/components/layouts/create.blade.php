<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('customer.layouts.head-tag')
    @yield('head-tag')
    <livewire:styles />
</head>

<body>
    @include('header')

    <main id="main-body-one-col" class="main-body">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Navbar</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-50" src="large.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50" src="..." alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50" src="..." alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <livewire:panel.ad.create />

        <hr>

        @yield('content')


    </main>




    @yield('script')
    <livewire:scripts />

    @include('customer.layouts.footer')



    @include('customer.layouts.script')
    @yield('script')

    @livewireScripts
</body>

</html>
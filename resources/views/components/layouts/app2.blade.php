<!DOCTYPE html>
<html lang="en">

<head>
    @yield('head-tag')
    <livewireStyle />
</head>

<body>

    @include('customer.layouts.header')

    <main id="main-body-one-col" class="main-body">

        @yield('content')
        <div class="container border m-5 p-5">
            <div class="row">
                <div class="col">
                    @yield('content')

                </div>
            </div>
        </div>
    </main>


    @include('customer.layouts.footer')



    @include('customer.layouts.script')
    @yield('script')

    @livewireScripts
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    @include('customer.layouts.head-tag')
    @yield('head-tag')

    <livewire:styles />

</head>

<body>

    @include('customer.layouts.header')

    <main id="main-body-one-col" class="main-body">
        <div id="showFollower" class="">


        </div>

        
        <h4 class="text-xxl-end bg bg-white">Click on the 'see more' option to check the full news with their details.
        </h4>

        <div x-data="{status : false}" x-intersect="status = true">

            <div x-data="{status : false}" x-intersect="status = true">
                <div x-show="status" x-transition.duration.500ms>
                    <livewire:home.all-resources />
                </div>
            </div>

            <div x-data="{status : false}" x-intersect="status = true">
                <div x-show="status" x-transition.duration.1000ms>
                    <livewire:home.last-news-guardian />
                </div>
            </div>

            <br>
            <div x-data="{status : false}" x-intersect="status = true">
                <div x-show="status" x-transition.duration.1400ms>
                    <livewire:home.last-news-api />
                </div>
            </div>
        </div>
        <br>

        <br>


    </main>


    @include('customer.layouts.footer')



    @include('customer.layouts.script')

    @yield('script')
    <livewire:scripts />

</body>

</html>
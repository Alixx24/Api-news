@extends('customer.layouts.master-one-col-live')


@section('content')


<!-- start ads section -->
<section class="mb-3">
    <section class="container-xxl">
        <!-- two column-->
        <section class="row py-4">

            <section class="col-12 col-md-6 mt-2 mt-md-0">
                <a href="">
                    <img class="d-block rounded-2 w-100" src="" alt="">
                </a>
            </section>


        </section>

    </section>
</section>
<!-- end ads section -->
<!-- start product lazy load -->

<!-- end product lazy load -->



<!-- start product lazy load -->

<!-- end product lazy load -->


@endsection

@section('script')

<script>
    $('.product-add-to-favorite button').click(function() {
        var url = $(this).attr('data-url');
        var element = $(this);
        $.ajax({
            url: url,
            success: function(result) {
                if (result.status == 1) {
                    $(element).children().first().addClass('text-danger');
                    $(element).attr('data-original-title', 'حذف از علاقه مندی ها');
                    $(element).attr('data-bs-original-title', 'حذف از علاقه مندی ها');
                } else if (result.status == 2) {
                    $(element).children().first().removeClass('text-danger')
                    $(element).attr('data-original-title', 'افزودن از علاقه مندی ها');
                    $(element).attr('data-bs-original-title', 'افزودن از علاقه مندی ها');
                } else if (result.status == 3) {
                    $('.toast').toast('show');
                }
            }
        })
    })
</script>

@endsection
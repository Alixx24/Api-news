@extends('customer.layouts.master-one-col')




@section('title')

@stop
@section('description', '{{ $post->summary }}')


<title>title</title>

<meta name="description" content="description should !!">



<style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    /* Styling h1 and links
––––––––––––––––––––––––––––––––– */
    .starrating>input {
        display: none;
    }

    /* Remove radio buttons */

    .starrating>label:before {
        content: "\f005";
        /* Star */
        margin: 2px;
        font-size: 2em;
        font-family: FontAwesome;
        display: inline-block;
    }

    .starrating>label {
        color: #222222;
        /* Start color when not clicked */
    }

    .starrating>input:checked~label {
        color: #ffca08;
    }

    /* Set yellow color when star checked */

    .starrating>input:hover~label {
        color: #ffca08;
    }

    /* Set yellow color when star hover */
</style>

@section('content')



<!-- start description, features and comments -->
<section class="mb-4">
    @section('content')
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('swal-error'))
    <div class="alert alert-danger">
        {{ session('swal-error') }}
    </div>
    @endif
    <section class="container-xxl">
        <section class="row">
            <section class="col">
                <section class="content-wrapper bg-white p-3 rounded-2">
                    <!-- start content header -->
                    <section id="introduction-features-comments" class="introduction-features-comments">
                        <section class="content-header">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#introduction">پست</a></span>
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#features">جزئیات پست</a></span>
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#comments">دیدگاه ها</a></span>
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                    </section>
                    <!-- start content header -->

                    <section class="py-4">

                        <!-- start vontent header -->
                        
                       
    
                        <section class="product-introduction mb-4">

                        </section>


                        <!-- start rating -->
                        <section id="rating" class="content-header mt-2 mb-4">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title content-header-title-small">
                                    امیتاز ها
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>



                    </section>
                </section>

            </section>
        </section>
    </section>
</section>
</section>
<!-- end description, features and comments -->

@endsection

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            @extends('customer.layouts.master')

            @section('head-tag')
            <title>توضیحات</title>
            @endsection

     

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
                    <li class="breadcrumb-item font-size-12"> <a href="#">بخش محتوی</a></li>
                    <li class="breadcrumb-item font-size-12 active" aria-current="page"> منو</li>
                </ol>
            </nav>


            <section class="row">
                <section class="col-12">
                    <section class="main-body-container">
                        <section class="main-body-container-header">
                            <h5>
                                توضیحات
                            </h5>
                        </section>

                        <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                            <a href="{{ route('admin.content.description.create') }}" class="btn btn-info btn-sm">ایجاد توضیحات جدید</a>
                            <div class="max-width-16-rem">
                                <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                            </div>
                        </section>

                        <section class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام توضیح</th>
                                        <th> لینک توضیح</th>
                                        <th>وضعیت</th>
                                        <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($descriptions as $key => $description)
                                    <tr>
                                        <th>{{ $key + 1 }}</th>
                                        <td>{{ $description->name }}</td>
                                        <td>{{ $description->url }}</td>
                                        <td>
                                            <label>
                                                <input id="{{ $description->id }}" onchange="changeStatus({{ $description->id }})" data-url="{{ route('admin.content.description.status', $description->id) }}" type="checkbox" @if ($description->status === 1)
                                                checked
                                                @endif>
                                            </label>
                                        </td>
                                        <td class="width-16-rem text-left">
                                            <a href="{{ route('admin.content.description.edit', $description->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                            <form class="d-inline" action="{{ route('admin.content.description.destroy', $description->id) }}" method="post">
                                                @csrf
                                                {{ method_field('delete') }}
                                                <button class="btn btn-danger btn-sm delete" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </section>

                    </section>
                </section>
            </section>

      


        </h2>

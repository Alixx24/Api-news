<div class="bg-white">gg
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ویرایش پست
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="#" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('panel.home.users.update', $user) }}" method="POST" enctype="multipart/form-data" id="form">
                        @csrf
                        {{ method_field('put') }}
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{ old('name', $user->name) }}">
                                </div>
                                @error('title')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </section>



                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="image">تصویر</label>
                                    <input type="file" class="form-control form-control-sm" name="image" id="image">
                                    {{-- <img src="{{ asset($user->avatar['indexArray'][$user->avatar['currentImage']] ) }}" alt="" width="100" height="50" class="mt-3"> --}}
                                </div>
                                @error('image')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </section>

                            <section class="row">
                                @php
                                $number = 1;
                                @endphp

                                @if($user->avatar)
                                @foreach ($user->avatar['indexArray'] as $key => $value )
                                <section class="col-md-{{ 6 / $number }}">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="currentImage" value="{{ $key }}" id="{{ $number }}" @if($post->image['currentImage'] == $key) checked @endif>
                                        <label for="{{ $number }}" class="form-check-label mx-2">
                                            <img src="{{ asset($value) }}" class="w-100" alt="">
                                        </label>
                                    </div>
                                </section>
                                @php
                                $number++;
                                @endphp
                                @endforeach

                                @else
                                <p>with out image</p>@endIf

                            </section>

                            <section>
                                <label for="email"></label>
                                <input type="email" name="email" value="{{ old('email', $user->email) }}">

                            </section>
                            <section class="col-12">
                                <button class="btn btn-primary btn-sm">ثبت</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>
</div>
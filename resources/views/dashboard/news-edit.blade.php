<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    Edit News </h5>
            </section>


            <section>
                <form action="{{ route('panel.news.update', $result) }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    @method('PUT')
                    <section class="row">

                        <section class="col-12">
                            <div class="form-group">
                                <label for="">Title</label>
                                <textarea name="title" id="title" name="title" class="form-control form-control-sm" rows="6">{{ old('title', $result->title) }}</textarea>
                            </div>
                            @error('title')
                            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                            @enderror
                        </section>


                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">submit</button>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>


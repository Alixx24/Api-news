<div>
    <div>
        <div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Ads</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                   
                </div>
            </nav>
        </div>
        <section>
        <form action="" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    {{ method_field('put') }}
                <p>id = {{ $news->id }}</p>
                <section class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="">Title News</label>
                        <input type="text" class="form-control form-control-sm" name="title" value="{{ old('title', $news->title) }}">
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
                   
                    @error('description')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </section>

                <br>

       
                <br>
              



               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
        </section>

        <script src="<?= asset('admin-assets/js/ckeditor.js') ?>"></script>
        <script src="<?= asset('admin-assets/js/app.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </div>
</div>
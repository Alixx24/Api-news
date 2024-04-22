<div>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ads</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('panel.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('panel.home.users') }}">users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('panel.users.ads') }}">create ad</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Link
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <section>
        <form action="{{ route('panel.users.ads.store') }}" enctype="multipart/form-data" method="post" class="mx-5">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>

          <div>
            <label for="image">Image Banner</label>
            <input type="file" name="image" class="form-control">
          </div>

            <section class="col-12">
                <section class="form-group">
                    <label for="description">Body</label>
                    <textarea class="summernote" name="description" id="description" rows="5" placeholder="description ..."></textarea>
                </section>
                @error('description')
                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                    <strong>
                        {{ $message }}
                    </strong>
                </span>
                @enderror
            </section>

            <select name="from_user_id" id="" class="form-control form-control-sm">
                <option value="">From wich User?</option>
                @foreach ($selectFrom as $postCategory)
                <option value="{{ $postCategory->id }}" @if(old('category_id')==$postCategory->id) selected @endif>{{ $postCategory->name }}</option>
                @endforeach
            </select>
            <br>
            <select name="for_user_id" id="" class="form-control form-control-sm">
                <option value="">For wich User?</option>
                @foreach ($selectFor as $postCategory)
                <option value="{{ $postCategory->id }}" @if(old('category_id')==$postCategory->id) selected @endif>{{ $postCategory->name }}</option>
                @endforeach

            </select>

            <select name="price_id" id="" class="form-control form-control-sm">
                <option value="">Price?</option>
                @foreach ($selectPrice as $price)
                <option value="{{ $price->id }}" @if(old('price_id')==$price->id) selected @endif>{{ $price->price }}</option>
                @endforeach

            </select>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    </section>

    <script src="<?= asset('admin-assets/js/ckeditor.js') ?>"></script>
    <script src="<?= asset('admin-assets/js/app.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</div>
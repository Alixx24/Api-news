<div>
    <div class="regPage">
        <section id="regPage">
            <form action="{{ route('panel.home.users.store') }}" enctype="multipart/form-data" method="post" class="mx-5">
                @csrf
                <div class="mb-3" id="regPage">
                    <label for="exampleInputEmail1" class="form-label">Name (Required!)</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                    @error('name')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label mt-9">email (Required!)</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                    @error('email')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password (Required!)</label>
                    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                    @error('password')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>

                <div>
                    <label for="image">Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Age</label>
                    <input name="age" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                    @error('age')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">about me</label>
                    <textarea class="form-control" name="about_me" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('about_me')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">CV</label>
                    <textarea class="form-control" name="cv" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('cv')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="exampleFormControlTextarea1">persian CV</label>
                    <textarea class="form-control" name="persian_cv" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('persian_cv')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>

            
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">social Links</label>
                    <textarea class="form-control" name="links" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('links')
                    <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                    @enderror
                </div>
<br>
                <a class="btn btn-info" href="{{ route('user.login') }}">already Register?</a>
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
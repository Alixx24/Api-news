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
                            <a class="nav-link active" aria-current="page" href="{{ route('customer.home') }}">Wen site</a>
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

        <table class="table">
            <a href="{{ route('panel.users.ads.create') }}" class="btn btn-success mx-5">Create Ad</a>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title of ads</th>
                    <th scope="col">For</th>
                    <th scope="col">From</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <td scope="col">Optios</td>
                </tr>
            </thead>
            <tbody>
                @foreach($ads as $ad)
                <tr>
                    <th scope="row">{{ $ad->id}}</th>
                    <td>{{ $ad->title }}</td>
                    <td>{{ $ad->forUser->email }}</td>
                    <td>{{ $ad->fromUser->email}}</td>
                    <td>
                        @if($ad->image != null)
                        <img src="{{ asset( $ad->image['indexArray'][$ad->image['currentImage']]) }}" alt="" width="100" height="50">
                        @else
                        <p>havent Image</p>
                        @endif
                    </td>
                    <td>{{ $ad->adPrice->price }}</td>
                    <td>
                        <div>
                            <input type="checkbox" wire:model="ad.status" wire:click="updateStatus({{ $ad->id }})" @if($ad->status == 1) ? checked : false @endif/>
                        </div>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('panel.users.ads.edit', $ad) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</div>
<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>File Manager</title>
    </head>

    <body>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <table class="table table-dark">

            <thead>
                <tr>

                    <th scope="col">Title</th>
                    <th scope="col">Source</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newses as $news)
                <tr>
                    <th scope="row">{{$news->title}}</th>
                    <th scope="row">{{$news->source}}</th>
                    <th scope="row">{{$news->updated_at}}</th>
                    <th>
                        <form wire:submit.prevent="deleteRecord({{ $news->id }})" onclick="return confirm('Are you sure?')">
                            @csrf
                            {{ method_field('delete') }}
                            <button type="submit">Delete</button>
                        </form>
                        <a href="{{ route('panel.home.users.edit', $news->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>

                    </th>
                </tr>
              
                @endforeach
            </tbody>
        </table>
    </body>

    </html>
</div>
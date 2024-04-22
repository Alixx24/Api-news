<div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ Str::limit($post->body,10)}}</td>
                <td>@twitter</td>

            </tr>
            @endforeach
        </tbody>
        <div class="row mt-3">
            <div class="col">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item @if($page == 1) disabled @endif">
                            <a class="page-link" href="#" wire:click.prevent="previousPage">قبلی</a>

                        </li>
                        <li class="page-item @if($page * $perPage >= $totalPosts) disabled @endif">
                            <a class="page-link" href="#" wire:click.prevent="nextPage">بعدی</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div x-cloack x-data="{show : true}" x-show="show" x-transition>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error iste doloremeprehenderit impedit, us!</p>
       
        <button @click="show = false">
            <i>close</i>
        </button>
        </div>
    </table>
</div>
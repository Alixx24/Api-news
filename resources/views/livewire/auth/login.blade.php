<div class="inputLog" >
    <form wire:submit.prevent="submit" class="inputLog" >
        <div>
            <label for="email">Email</label><br>
            <input type="email" id="email" wire:model="email">
            @error('email')
            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
            @enderror
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" id="password" wire:model="password">
           @error('password')
           <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
            <strong>
                {{ $message }}
            </strong>
            @enderror
           </span>
        </div>
        <button class="btn btn-info" id="btnLoging" type="submit">Login</button>
    </form>
</div>
<div>
    @if (Session::get('fail'))
        <div class="alert alert-danger">
            {!! Session::get('fail') !!}
        </div>
    @endif

    @if (Session::get('success'))
        <div class="alert alert-success">
            {!! Session::get('success') !!}
        </div>
    @endif

    <form action="./" method="post" autocomplete="off" novalidate="" wire:submit.prevent='ResetHandler()'>
        <div class="mb-3">
            <label class="form-label">Địa chỉ email</label>
            <input type="email" class="form-control" autocomplete="off" wire:model='email' disabled>
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-2">
            <label class="form-label">
                Mật khẩu mới
            </label>
            <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="Mật khẩu mới" autocomplete="off"
                    wire:model='new_password'>
                <span class="input-group-text">
                    <a h ref="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password"
                        data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                            </path>
                        </svg>
                    </a>
                </span>
            </div>
            <span class="text-danger">
                @error('new_password')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div>
            <label class="form-label">
                Nhập lại mật khẩu
            </label>
            <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" autocomplete="off"
                    wire:model='confirm_new_password'>
                <span class="input-group-text">
                    <a h ref="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password"
                        data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                            </path>
                        </svg>
                    </a>
                </span>
            </div>
            <span class="text-danger">
                @error('confirm_new_password')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-footer text-center">
            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
            <label class="mt-2">
                <a href="{{ route('author.login') }}">Trở về trang đăng nhập</a>
            </label>
        </div>
    </form>
</div>

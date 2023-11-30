<div>
    <form method="post" wire:submit.prevent='changePassword()'>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Mật khẩu cũ</label>
                    <input type="password" class="form-control" name="example-text-input" placeholder="Nhập mật khẩu cũ"
                        wire:model='current_password'>
                    <span class="text-danger">
                        @error('current_password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Mật khẩu mới</label>
                    <input type="password" class="form-control" name="example-text-input"
                        placeholder="Nhập mật khẩu mới" wire:model='new_password'>
                    <span class="text-danger">
                        @error('new_password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" name="example-text-input"
                        placeholder="Nhập lại mật khẩu mới" wire:model='confirm_new_password'>
                    <span class="text-danger">
                        @error('confirm_new_password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </div>
    </form>
</div>


{{-- 
<script>
    document.addEventListener('livewire:load', function() {
        Livewire.on('show-toast-change-password', function(data) {
            Toastify({
                text: data.message,
                duration: 3000,
                gravity: 'top',
                position: 'right',
                stopOnFocus: true,
                backgroundColor: 'linear-gradient(to right, #a8ff78, #78ffd6)',
                className: 'info',
            }).showToast();
        });
    });
</script> --}}

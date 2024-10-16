<div class="modal fade" id="ModalEdit{{ $user->id }}" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalEditLabel">{{ __('Edit User') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="col-form-label">Nombre</label>
                        <input type="text" name="name" value="{{ $user->name }}" placeholder="Name"
                            class="form-control" required>

                    </div>
                    <div class="mb-3">
                        <label for="mail" class="col-form-label">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" placeholder="Email"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Contraseña</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="col-form-label">Confirmar contraseña</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

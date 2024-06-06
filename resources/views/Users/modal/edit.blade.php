<form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="modal fade" id="ModalEdit{{$user->id}}" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ModalEditLabel">{{ __('Edit User') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <div class="mb-3">
                            <label for="username" class="col-form-label">Nombre</label>
                            <input type="text" name="name" value="{{ $user->name }}"  placeholder="Name" class="form-control" id="username" required>
                           
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="col-form-label">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}"  placeholder="Email" class="form-control" id="mail" required>                            
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label">Contraseña</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" id="password">                            
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="col-form-label">Confirmar contraseña</label>
                            <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control" id="confirm-password">
                        </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</form>

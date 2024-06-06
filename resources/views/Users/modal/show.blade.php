<div class="modal fade" id="ModalShow{{$user->id}}" tabindex="-1" aria-labelledby="ModalShowLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalEditLabel">Detalles del usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="fs-5">Nombre</h2>
                <p>{{ $user->name }}</p>
                <h2 class="fs-5">Email</h2>
                <p>{{ $user->email }}</p>
                {{-- <h2 class="fs-5">Contraseña</h2>
                <p>{{ $user->password }}</p> --}}
                <h2 class="fs-5">Fecha de Creacion</h2>
                <p>{{ $user->created_at->format('d/m/Y H:i:s') }}</p>
                
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

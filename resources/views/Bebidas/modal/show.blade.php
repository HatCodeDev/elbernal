<div class="modal fade" id="ModalShow{{$tostado->id}}" tabindex="-1" aria-labelledby="ModalShowLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalEditLabel">Detalles del Tostado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="fs-5">{{ __('Nombre') }}</h2>
                <p>{{ $tostado->tostado }}</p>
                <h2 class="fs-5">{{ __('Fecha de Creación') }}</h2>
                <p>{{ $tostado->created_at->format('d/m/Y H:i:s') }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cerrar') }}</button>
            </div>
        </div>
    </div>
</div>

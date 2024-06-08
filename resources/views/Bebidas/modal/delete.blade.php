<div class="modal fade" id="ModalDelete{{ $tostado->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('tostados.destroy', $tostado->id) }}" method="post" enctype="multipart/form-data">
                @method('delete')
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Eliminar Tostado') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">{{ __('¿Estás seguro de eliminar') }} <b>{{ $tostado->tostado }}</b>?</div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-danger">{{ __('Eliminar') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

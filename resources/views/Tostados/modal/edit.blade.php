<div class="modal fade" id="ModalEdit{{ $tostado->id }}" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalEditLabel">{{ __('Editar Tostado') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tostados.update', $tostado->id) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf

                    <div class="mb-3">
                        <label for="tostado" class="col-form-label">{{ __('Nombre') }}</label>
                        <input type="text" name="tostado" value="{{ $tostado->tostado }}" placeholder="Nombre"
                            class="form-control" required maxlength="150">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">{{ __('Editar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalEdit{{ $bebida->id }}" tabindex="-1" aria-labelledby="ModalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalEditLabel">{{ __('Editar Bebida') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bebidas.update', $bebida->id) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf

                    <div class="mb-3">
                        <label for="tipo" class="col-form-label">Tipo</label>
                        <input type="text" name="tipo" value="{{ $bebida->tipo }}" placeholder="Tipo"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tostados_id" class="col-form-label">Tostado</label>
                        <select name="tostados_id" class="form-control" required>
                            @foreach($tostados as $tostado)
                                <option value="{{ $tostado->id }}" @if($tostado->id == $bebida->tostados_id) selected @endif>{{ $tostado->tostado }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="col-form-label">Precio</label>
                        <input type="number" name="precio" value="{{ $bebida->precio }}" placeholder="Precio"
                            class="form-control" required step="0.01" min="0" max="999.99">
                        
                        
                    </div>
                    <div class="mb-3">
                        <label for="filtracion" class="col-form-label">Filtración</label>
                        <input type="text" name="filtracion" value="{{ $bebida->filtracion }}" placeholder="Filtración"
                            class="form-control" required maxlength="100">
                    </div>
                    <div class="mb-3">
                        <label for="altura" class="col-form-label">Tamaño</label>
                        <input type="text" name="altura" value="{{ $bebida->altura }}" placeholder="Tamaño"
                            class="form-control" required maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="complementos" class="col-form-label">Complementos</label>
                        <input type="text" name="complementos" value="{{ $bebida->complementos }}" placeholder="Complementos"
                            class="form-control" required maxlength="100">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen">
                    </div>
                    <!-- Agrega más campos según sea necesario -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">{{ __('Editar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

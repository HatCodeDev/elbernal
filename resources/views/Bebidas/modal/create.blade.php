<div class="modal fade text-left" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalCreateLabel">{{ __('Crear Nueva Bebida') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('bebidas.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="tipo" class="col-form-label">Tipo</label>
                        <input type="text" name="tipo" placeholder="Tipo" class="form-control" id="tipo"
                            required maxlength="80">
                    </div>
                    <div class="mb-3">
                        <label for="tostados_id" class="col-form-label">Tostado</label>
                        <select name="tostados_id" class="form-control" required>
                            @foreach ($tostados as $tostado)
                                <option value="{{ $tostado->id }}">{{ $tostado->tostado }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="col-form-label">Precio</label>
                        <input type="number" name="precio" placeholder="Precio" class="form-control" id="precio"
                            required required step="0.01" min="0" max="999.99">
                    </div>
                    <div class="mb-3">
                        <label for="filtracion" class="col-form-label">Filtración</label>
                        <input type="text" name="filtracion" placeholder="Filtración" class="form-control"
                            id="filtracion" required maxlength="100">
                    </div>
                    <div class="mb-3">
                        <label for="altura" class="col-form-label">Tamaño</label>
                        <input type="text" name="altura" placeholder="Tamaño" class="form-control" id="altura"
                            required maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label for="complementos" class="col-form-label">Complementos</label>
                        <input type="text" name="complementos" placeholder="Complementos" class="form-control"
                            id="complementos" required maxlength="100">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" required>
                    </div>
                    <!-- Más campos-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">{{ __('Guardar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

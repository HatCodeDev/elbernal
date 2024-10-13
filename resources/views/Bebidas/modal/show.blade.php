<div class="modal fade" id="ModalShow{{$bebida->id}}" tabindex="-1" aria-labelledby="ModalShowLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ModalShowLabel">Detalles de la Bebida</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row row-cols-1 row-cols-sm-2">
                    <div class="col">
                        <h2 class="fs-5">Tipo</h2>
                        <p>{{ $bebida->tipo }}</p>
                        <h2 class="fs-5">Tostado</h2>
                        <p>{{ $bebida->tostado->tostado }}</p>
                        <h2 class="fs-5">Precio</h2>
                        <p>{{ $bebida->precio }}</p>
                        <h2 class="fs-5">Filtración</h2>
                        <p>{{ $bebida->filtracion }}</p>
                        <h2 class="fs-5">Tamaño</h2>
                        <p>{{ $bebida->altura }}</p>
                        <h2 class="fs-5">Complementos</h2>
                        <p>{{ $bebida->complementos }}</p>
                    </div>
                    <div class="col">
                        @if(Str::contains($bebida->imagen, 'Imagen sin definir'))
                            <p>{{ $bebida->imagen }}</p>
                        @else
                        <img class="rounded img-fluid" src="{{ asset('storage/' . $bebida->imagen) }}">
                        @endif
                    </div>
                </div>
                

                <!-- Agrega más campos según sea necesario -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cerrar') }}</button>
            </div>
        </div>
    </div>
</div>

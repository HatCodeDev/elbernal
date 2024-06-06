<div class="modal fade" id="ModalDelete{{ $user->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('users.destroy', $user->id) }}" method="post" enctype="multipart/form-data">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('User Delete') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">¿Estas seguro de eliminar <b>{{ $user->name }}</b>?</div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-danger">{{ __('Delete') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

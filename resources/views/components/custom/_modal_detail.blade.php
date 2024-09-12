@push('modals')
    <div class="modal fade bs-example-modal-lg show" tabindex="-1" id="modal_detail">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Penolakan Penugasan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form_penolakan">
                        @csrf
                        <input type="hidden" name="penugasan_id" >
                        <input type="hidden" name="is_aktif" value="2">
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Kirim Penolakan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush

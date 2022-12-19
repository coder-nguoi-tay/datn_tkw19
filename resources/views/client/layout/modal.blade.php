<div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <client-login
                    :data="{{ json_encode([
                        'urlStore' => route('owner.store'),
                        'message' => $message ?? '',
                    ]) }}">
                    <client-login>
            </div>
        </div>
    </div>
</div>

@if(isset($message))
    <div id="myModalMessage" class="modal fade" role="dialog" style="display: block; padding-left: 17px;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Thông Báo</h4>
                </div>
                <div class="modal-body">
                    <p>{{ $message }}</p>
                </div>

            </div>
        </div>
    </div>
    <script>
        jQuery(function ($) {
            $("#myModalMessage").modal(open);
        })
    </script>
@endif
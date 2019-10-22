<?php
  if ( isset( $_REQUEST['modal-id'] ) ) {
    $modalID = $_REQUEST['modal-id'];
  } elseif ( !isset( $modalID ) ) {
    $modalID = 'modal-1';
  }

  if ( isset( $_REQUEST['modal-title'] ) ) {
    $modalTitle = $_REQUEST['modal-title'];
  } elseif ( !isset( $modalID ) ) {
    $modalTitle = 'Modal Title';
  }

  if ( isset( $_REQUEST['modal-body'] ) ) {
    $modalBody = $_REQUEST['modal-body'];
  } elseif ( !isset( $modalID ) ) {
    $modalBody = 'Modal Body';
  }

  if ( isset( $_REQUEST['dismiss-text'] ) ) {
    $dismissText = $_REQUEST['dismiss-text'];
  } elseif ( !isset( $dismissText ) ) {
    $dismissText = 'Close';
  }
?>
<div id="<?php echo $modalID; ?>" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo $modalTitle; ?></h4>
      </div>
      <div class="modal-body">
        <p><?php echo $modalBody; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $dismissText; ?></button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>var showProtip = false;</script>
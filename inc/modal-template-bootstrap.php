<!-- Modal link esterni -->
<div class="modal fade warning" id="warningModalExternalLink" tabindex="-1" role="dialog" aria-labelledby="warninglLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php _e('title', 'info-ext-web-links'); ?></h4>
            </div>
            <div class="modal-body">
                <?php _e('disclaimer', 'info-ext-web-links'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('no-link', 'info-ext-web-links'); ?></button>
                <a id="warningHref" class="btn btn-primary go-external-link" href="#" target="_blank" data-prevent="true"><?php _e('yes-link', 'info-ext-web-links'); ?></a>
            </div>
        </div>
    </div>
</div>
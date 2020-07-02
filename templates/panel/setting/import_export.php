<?php defined('SHIELDON_VIEW') || exit('Life is short, why are you wasting time?');
/*
 * This file is part of the Shieldon package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use function Shieldon\Firewall\_e;

?>
<div id="import-export">
    <ul>
        <li><a href="<?php echo $this->url(); ?>?so_page=export_settings" class="btn btn-light btn-sm" target="_blank"><i class="fas fa-file-export"></i><?php _e('panel', 'setting_button_export', 'Export'); ?></a></li>
        <li><a href="#" onclick="importModel();" class="btn btn-light btn-sm"><i class="fas fa-file-import"></i><?php _e('panel', 'setting_button_import', 'Import'); ?></a></li>
    </ul>
</div>
  
<div id="import-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lightbox" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-file-import"></i> <?php _e('panel', 'setting_button_import', 'Import'); ?></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $this->url(); ?>?so_page=import_settings" enctype="multipart/form-data" method="post">
                    <p>
                        <div class="custom-file">
                            <input type="file" name="json_file" class="custom-file-input" id="file-upload">
                            <label class="custom-file-label" for="file-upload"><?php _e('panel', 'setting_button_choose_file', 'Choose file'); ?></label>
                        </div>
                    </p>
                    <p id="file-name">
                        <?php _e('panel', 'setting_note_import', 'Please select the .json file exported before.'); ?>
                    </p>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><?php _e('panel', 'auth_btn_submit', 'Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    function importModel() {
        $('#import-modal').modal();
    }

    $('#file-upload').change(function(){
        $('#file-name').html($(this)[0].files[0].name);
    });

</script>
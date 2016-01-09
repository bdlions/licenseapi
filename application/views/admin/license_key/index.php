<div class="panel panel-default">
    <div class="panel-heading">License key</div>
    <div class="panel-body">
        <div class="row col-md-12" style="margin-left: 1px;">            
            <div class="row form-group" style="padding-left:10px;">
                <div class ="col-md-3 pull-left form-group">
                    <a href="<?php echo base_url() . 'license_key/create_license_key' ?>">
                        <button id="" value="" class="form-control pull-right btn_custom_button">Create License key</button>  
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table_row_style">
                                <th style="text-align: center;">Key</th>
                                <th style="text-align: center;">Is Used</th>
                                <th style="text-align: center;">Created on</th>
                                <th style="text-align: center;">Modified on</th>
                                <th style="text-align: center;">Edit</th>
                                <th style="text-align: center;">Delete</th>
                            </tr>
                            <?php foreach($license_key_list as $license_key_info){?>
                            <tr>
                                <th style="text-align: center;"><?php echo $license_key_info->key?></th>
                                <th style="text-align: center;"><?php echo $license_key_info->isUsed?></th>
                                <th style="text-align: center;"><?php echo $license_key_info->createdOn?></th>
                                <th style="text-align: center;"><?php echo $license_key_info->modifiedOn?></th>
                                <th style="text-align: center"><a href="<?php echo base_url() . "license_key/update_license_key/".$license_key_info->key; ?>">Edit</a></th>
                                <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_license_key_confirm('<?php echo $license_key_info->key; ?>')"value="" class="">
                                        Delete </a></th>
                            </tr>
                            <?php } ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view("admin/license_key/modal_delete_license_key_confirm");
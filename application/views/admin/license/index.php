<div class="panel panel-default">
    <div class="panel-heading">License</div>
    <div class="panel-body">
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row col-md-12" style="margin-left: 1px;">            
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table_row_style">
                                <th style="text-align: center;">Subscription date</th>
                                <th style="text-align: center;">Start date</th>
                                <th style="text-align: center;">Evolution period</th>
                                <th style="text-align: center;">Mac address</th>
                                <th style="text-align: center;">Cpu address</th>
                                <th style="text-align: center;">Processor address</th>
                                <th style="text-align: center;">Edit</th>
                                <th style="text-align: center;">Delete</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">2010-03-18</th>
                                <th style="text-align: center;">2010-03-18</th>
                                <th style="text-align: center;">5</th>
                                <th style="text-align: center;">10.12.12.4</th>
                                <th style="text-align: center;">10.12.12.4</th>
                                <th style="text-align: center;">3.4.2.3</th>
                                <th style="text-align: center"><a href="<?php echo base_url() . "license/update_license"; ?>">Edit</a></th>
                                <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_license_confirm()"value="" class="">
                                        Delete </a></th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">2011-03-18</th>
                                <th style="text-align: center;">2011-03-18</th>
                                <th style="text-align: center;">3</th>
                                <th style="text-align: center;">10.11.12.4</th>
                                <th style="text-align: center;">10.10.12.4</th>
                                <th style="text-align: center;">13.4.2.3</th>
                                <th style="text-align: center"><a href="<?php echo base_url() . "license/update_license"; ?>">Edit</a></th>
                                <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_license_confirm()"value="" class="">
                                        Delete </a></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/license/modal_delete_license_confirm");

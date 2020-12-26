
<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="invoice-panel">
                    <div class="act-title">
                        <span style="font-size: 19px"><i class="ion-ios-printer-outline"></i> Services</span>
                        <a href="<?php echo base_url("providers/add-service")?>" class="btn btn-success" style="float: right">Add service +</a>
                    </div>
                    <div class="invoice-body">
                        <div class="table-responsive">
                            <table class="invoice-table">
                                <thead>
                                <tr class="invoice-headings">
                                    <th>Service name</th>
                                    <th>Service description</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($service_providers as $item){ ?>
                                        <tr>

                                            <td>
                                                <?php echo $item["service_name_en"]?>
                                            </td>

                                            <td>
                                                <?php echo $item["service_desc_en"]?>

                                            </td>

                                            <td>
                                                <span class="amount">
                                                      <?php echo $item["price"]?>
                                                </span>
                                            </td>

                                            <td>
                                                <a href="<?php echo base_url("providers/delete-service/$item[sp_id]")?>" class="invoice-action" data-toggle="tooltip" title="Delete"> <i class="ion-android-delete"></i></a>
                                            </td>

                                        </tr>
                                    <?php }?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



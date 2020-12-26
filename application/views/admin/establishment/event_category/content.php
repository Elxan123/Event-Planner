
<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="invoice-panel">
                    <div class="act-title">
                        <span style="font-size: 19px"><i class="ion-android-clipboard"></i> Event Category</span>
                        <a href="<?php echo base_url("establishment/add-event-category")?>" class="btn btn-success" style="float: right">Add event category +</a>
                    </div>
                    <div class="invoice-body">
                        <div class="table-responsive">
                            <table class="invoice-table">
                                <thead>
                                <tr class="invoice-headings">
                                    <th>Event category name</th>
                                    <th>Event type</th>
                                    <th>Picture</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($ctg_estab as $item){ ?>
                                        <tr>

                                            <td>
                                                <?php echo $item["name_en"]?>
                                            </td>

                                            <td>
                                                <?php echo $item["type"]?>
                                            </td>

                                            <td>
                                                <img style="height: 80px; object-fit: contain" src="<?php echo base_url("uploads/event_categories/$item[img]")?>" alt="...">
                                            </td>

                                            <td>
                                                <a href="<?php echo base_url("establishment/delete-event-category/$item[ctg_estab_id]")?>" class="invoice-action" data-toggle="tooltip" title="Delete"> <i class="ion-android-delete"></i></a>
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



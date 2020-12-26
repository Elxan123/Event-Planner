


<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5><i class="ion-ios-information"></i> Establishment Gallery</h5>
                    </div>
                    <div class="db-add-listing">

                        <div class="col-md-12">
                            <form action   =   "<?php echo base_url("establishment/gallery-add/$profile[id]")?>"
                                  data-url =   "<?php echo base_url("establishment/gallery-add/$profile[id]")?>"
                                  class="dropzone c_dropzone"
                                  enctype="multipart/form-data"
                                  id="dropzone">
                                <div class="dz-message" data-dz-message><span>Click or drag to upload pictures</span></div>

                                <div class="fallback">
                                    <input name="file" type="file" multiple style="visibility: hidden;"/>
                                </div>

                            </form>

                            <br>

                            <table class="table table-bordered datatable" id="datatable_sortable" data-url="<?php echo base_url("lang/salon/gallery_datatable/salon_id")?>">
                                <thead>
                                <th data-orderable="false"><div>Picture Name</div></th>
                                <th data-orderable="false"><div>Picture</div></th>
                                <th data-orderable="false" style="text-align: center"><div>action</div></th>
                                </thead>

                                <tbody class="sortable" data-url="<?php echo base_url("lang/salon/change_gallery_rank")?>">

                                    <tr>
                                        <td>
                                            Sekil adi
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url("uploads/establishments/as")?>" alt="">
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url("uploads/establishments/as")?>" alt="">
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






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
                            <form action   =   "<?php echo base_url("providers/gallery-add")?>"
                                  data-url =   "<?php echo base_url("providers/gallery-add")?>"
                                  data-refreshurl = "<?php echo base_url("providers/gallery-refresh")?>"
                                  class="dropzone c_dropzone"
                                  enctype="multipart/form-data"
                                  id="dropzone">
                                <div class="dz-message" data-dz-message><span>Click or drag to upload pictures</span></div>

                                <div class="fallback">
                                    <input name="file" type="file" multiple style="visibility: hidden;"/>
                                </div>

                            </form>

                            <br>

                            <table class="table table-bordered datatable" id="datatable_sortable">
                                <thead>
                                <th data-orderable="false"><div>Picture Name</div></th>
                                <th data-orderable="false" style="text-align: center; "><div>Picture</div></th>
                                <th data-orderable="false" style="text-align: center;"><div>action</div></th>
                                </thead>

                                <tbody id="c_gallery_tbody">

                                    <?php $this->load->view("admin/provider/gallery/refresh_page")?>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



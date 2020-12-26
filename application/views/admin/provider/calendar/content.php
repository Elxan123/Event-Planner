<style>
    .dash-breadcrumb{
        visibility: hidden;
        padding: 1px!important;
    }

</style>

<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">

                    <div class="db-add-listing">

                        <div style="position: relative">
                            <div class="c_loader_parent" style="display: none">
                                <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                            </div>


                            <button class="btn btn-success" id="c_add_btn">Add event</button>
                            <br><br>

                            <div id='calendar' style="max-height: 650px!important;"></div>


                            <!-- calendar modal -->
                            <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h4 class="h4"><span class="event-icon weight-400 mr-3"></span><span class="event-title"></span></h4>
                                            <div class="event-body"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form id="add-event">
                                            <div class="modal-body">
                                                <h4 class="text-blue h4 mb-10">Add Event Detail</h4>
                                                <div class="form-group">
                                                    <label>Event name</label>
                                                    <input type="text" class="form-control" name="title">
                                                </div>
                                                <div class="form-group">
                                                    <label>Event Date</label>
                                                    <input id="c_date" type='text' class="datetimepicker form-control" name="start">
                                                </div>
                                                <div class="form-group">
                                                    <label>Event Description</label>
                                                    <textarea class="form-control" name="description"></textarea>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" >Save</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



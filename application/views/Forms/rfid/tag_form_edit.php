<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?PHP echo $title;?></h1>
        <hr/>
    </div>

</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span style="color: red">
                <?php echo validation_errors(); ?>
                </span>
              <span style='color: #000000'>
                  Please edit the below form details to change
                  reader information or cancel to return back, pin-point reader
                  location on the map to add longitude and latitude</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">
                        <form role="form" id="userForm" name="userForm" >
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tag_info">Tag Info</label>
                                    <input type="text" class="form-control" id="tag_info" name="tag_info" value="<?PHP echo $tag_details['tag_info'];?>" placeholder="Tag Info">
                                    <input type="hidden"  id="id" name="id" value="<?PHP echo $tag_details['id'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="vendor">Vendor</label>
                                    <input type="text" class="form-control" id="vendor" name="vendor" value="<?PHP echo $tag_details['vendor'];?>" placeholder="Vendor">
                                </div>

                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="rfid_submit_data('tag_registration','edit')">Save</button>
                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('tag_registration')">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

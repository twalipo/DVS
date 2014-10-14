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
                        <?PHP if($current_page == 'reader_registration'){?>
                            <form role="form" id="userForm" name="userForm" >
                                <div class="col-lg-6">
                                    <input type="hidden"  id="id" name="id" value="<?PHP echo $reader_details['id'];?>">
                                    <input type="hidden"  id="location_id" name="location_id" value="<?PHP echo $reader_details['location_id'];?>">

                                    <div class="form-group">
                                        <label for="readername">Reader Name</label>
                                        <input type="text" class="form-control" id="readername" value="<?php echo $reader_details['reader_name'];?>" name="readername" placeholder="Reader Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor">Vendor</label>
                                        <input type="text" class="form-control" id="vendor" value="<?php echo $reader_details['vendor'];?>" name="vendor" placeholder="Vendor">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location Name</label>
                                        <input type="text" class="form-control" id="location" value="<?php echo $reader_details['location_name'];?>" name="location" placeholder="Location Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Location Latitude</label>
                                        <input type="text" class="form-control" id="latitude" value="<?php echo $reader_details['latitude'];?>" name="latitude" placeholder="Location Latitude">
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude">Location Longitude</label>
                                        <input type="text" class="form-control" id="longitude" value="<?php echo $reader_details['longitude'];?>" name="longitude" placeholder="Location Longitude">
                                    </div>

                                    <div class="form-group dropdown">
                                        <label for="level">Level</label>
                                        <select  class="form-control" id="level" name="level">

                                            <?php foreach ($level_details as $level): ?>

                                                <option value="<?PHP echo $level['id'];?>" <?PHP  echo $level['level_name']== $reader_details['level_name']?"selected ='selected'":''?>  > <?PHP echo $level['level_name']?></option>

                                            <?php endforeach; ?>

                                        </select>
                                    </div>

                                    <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="rfid_submit_data('reader_registration','edit')">Save</button>
                                    <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('reader_registration')">Cancel</button>
                                </div>
                            </form>
                        <?PHP }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

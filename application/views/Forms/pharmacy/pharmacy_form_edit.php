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
                  pharmacy information or cancel to return back, pin-point reader
                  location on the map to add longitude and latitude</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">
                            <form role="form" id="userForm" name="userForm" >
                                <div class="col-lg-6">
                                    <input type="hidden"  id="id" name="id" value="<?PHP echo $pharmacy_details['id'];?>">
                                    <input type="hidden"  id="location_id" name="location_id" value="<?PHP echo $pharmacy_details['location_id'];?>">

                                    <div class="form-group">
                                        <label for="name">Pharmacy Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Pharmacy Name" value="<?PHP echo $pharmacy_details['name'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="location">Location Name</label>
                                        <input type="text" class="form-control" id="location" name="location" placeholder="Location Name" value="<?PHP echo $pharmacy_details['location_name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="latitude">Location Latitude</label>
                                        <input type="number" class="form-control" id="latitude" name="latitude" placeholder="Location Latitude" value="<?PHP echo $pharmacy_details['latitude'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude">Location Longitude</label>
                                        <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Location Longitude" value="<?PHP echo $pharmacy_details['longitude'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?PHP echo $pharmacy_details['email'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="<?PHP echo $pharmacy_details['phone_number'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="alt_phone_number">Alternative Phone Number</label>
                                        <input type="text" class="form-control" id="alt_phone_number" name="alt_phone_number" placeholder="Alternative Phone Number" value="<?PHP echo $pharmacy_details['alt_phone_number'];?>">
                                    </div>

                                    <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="reg_submit_data('pharmacy_registration','edit')">Save</button>
                                    <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('pharmacy_registration')">Cancel</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

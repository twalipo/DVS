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
                  Please fill in the below form to add a new
                  pharmacy or cancel to return back, pin-point reader
                  location on the map to add longitude and latitude</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">

                        <form role="form" id="userForm" name="userForm" >
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Pharmacy Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Pharmacy Name">
                                </div>

                                <div class="form-group">
                                    <label for="location">Location Name</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Location Name">
                                </div>
                                <div class="form-group">
                                    <label for="latitude">Location Latitude</label>
                                    <input type="number" class="form-control" id="latitude" name="latitude" placeholder="Location Latitude" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="longitude">Location Longitude</label>
                                    <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Location Longitude" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="alt_phone_number">Alternative Phone Number</label>
                                    <input type="text" class="form-control" id="alt_phone_number" name="alt_phone_number" placeholder="Alternative Phone Number">
                                </div>

                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="reg_submit_data('pharmacy_registration','insert')">Save</button>
                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('pharmacy_registration')">Cancel</button>
                            </div>
                        </form>
                        <div class="col-lg-6" id="googleMap" style="width:500px;height:380px; background-color: bisque"></div>
                        <script>initialize();</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

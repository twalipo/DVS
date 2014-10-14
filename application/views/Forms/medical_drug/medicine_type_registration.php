<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header"><?PHP echo $title;?></h2>
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
                  medical drug type or cancel to return back</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">

                        <form role="form" id="userForm" name="userForm" >
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="description">Type Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" required="required">
                                </div>

                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="medical_drug_submit_data('medicine_type','insert')">Save</button>
                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('medicine_type')">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

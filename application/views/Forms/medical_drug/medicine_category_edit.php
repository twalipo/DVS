<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header" style="text-align: center" ><?PHP echo $title;?></h2>
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
                  medical drug category information or cancel to return back</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">
                        <form role="form" id="userForm" name="userForm" >
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo $med_edit_category['name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="description">Type Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="<?php echo $med_edit_category['description']; ?>" >
                                    <input type="hidden" class="form-control" id="edit_id" name="edit_id" placeholder="Enter Description" value="<?php echo $med_edit_category['id']; ?>" >
                                </div>

                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="medical_drug_submit_data('medicine_category','edit')">Save</button>
                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('medicine_category')">Back</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
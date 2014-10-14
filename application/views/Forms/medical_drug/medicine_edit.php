<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header" style="text-align: center;" ><?PHP echo $title;?></h2>
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
                  medical drug information or cancel to return back</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">
                        <form role="form" id="userForm" name="userForm" >
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Drug Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo $med_edit['drug_name']; ?>">
                                </div>
                                <div class="form-group dropdown">
                                    <label for="drug_type">Drug Type</label>
                                    <select  class="form-control" id="drug_type" name="drug_type">
                                        <?php
                                        $i=0;
                                        foreach($med_type as $medicine_type){?>
                                        <option value="<?PHP echo $medicine_type['id'];?>" <?PHP  echo $medicine_type['name']== $med_edit['drug_type']?"selected ='selected'":''?>  > <?PHP echo $medicine_type['name']?></option>

                                       <?php }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group dropdown">
                                    <label for="drug_category">Drug Category</label>
                                    <select  class="form-control" id="drug_category" name="drug_category">
                                        <?php
                                        $i=0;
                                        foreach($med_category as $medicine_category){?>
                                        <option value="<?PHP echo $medicine_category['id'];?>" <?PHP  echo $medicine_category['name']== $med_edit['drug_category']?"selected ='selected'":''?>  > <?PHP echo $medicine_category['name']?></option>

                                       <?php }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group dropdown">
                                    <label for="drug_type">Manufacturer</label>
                                    <select  class="form-control" id="manufacturer" name="manufacturer">
                                        <?php
                                        $i=0;
                                        foreach($manufacturer as $medicine_manu){?>
                                        <option value="<?PHP echo $medicine_manu['id'];?>" <?PHP  echo $medicine_manu['name']== $med_edit['manu_name']?"selected ='selected'":''?>  > <?PHP echo $medicine_manu['name']?></option>

                                       <?php }
                                        ?>

                                    </select>
                                    <input type="hidden" class="form-control" id="edit_id" name="edit_id" placeholder="Enter Description" value="<?php echo $med_edit['drug_id']; ?>" >
                                </div>
                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="medical_drug_submit_data('medicine_registration','edit')">Save</button>
                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('medicine_registration')">Back</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
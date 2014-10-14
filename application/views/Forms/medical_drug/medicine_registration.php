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
                  medical drug or cancel to return back</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">

                        <form role="form" id="userForm" name="userForm" >
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Drug Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group dropdown">
                                <label for="drug_type">Drug Type</label>
                                <select  class="form-control" id="drug_type" name="drug_type">
                                    <?php
                                    if(count($med_type)>0){
                                        $i=0;
                                        foreach($med_type as $medicine_type){
                                            echo "<option value=".$medicine_type['id'].">".$medicine_type['name']."</option>";
                                        }
                                    }
                                    else{
                                        echo "<option value=''>Configure Medicine Type first Before medicine registration</option>";
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form-group dropdown">
                                <label for="drug_category">Drug Category</label>
                                <select  class="form-control" id="drug_category" name="drug_category">
                                    <?php
                                    if(count($med_category>0)){
                                        $i=0;
                                        foreach($med_category as $medicine_category){
                                            echo "<option value=".$medicine_category['id'].">".$medicine_category['name']."</option>";
                                        }
                                    }else{
                                        echo "<option value=''>Configure Medicine Categories first Before medicine registration</option>";
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form-group dropdown">
                                <label for="manufacturer">Manufacturer</label>
                                <select  class="form-control" id="manufacturer" name="manufacturer">
                                    <?php
                                    $i=0;
                                    foreach($manufacturer as $medicine_manu){
                                        echo "<option value=".$medicine_manu['id'].">".$medicine_manu['name']."</option>";
                                    }
                                    ?>

                                </select>
                            </div>

                            <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="medical_drug_submit_data('medicine_registration','insert')">Save</button>
                            <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('medicine_registration')">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


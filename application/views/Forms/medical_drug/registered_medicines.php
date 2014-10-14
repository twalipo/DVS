<div>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header" style=" text-align: center"><?PHP echo $title;?></h2>
            <hr/>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
                    if($message == 'success'){
                        echo "<span style='color: green'>You success added a new medical drug</span>";

                    }else if($message == 'updated'){
                        echo "<span style='color: green'>Medical drug details updated successfully</span>";

                    }else if($message == 'deleted'){
                        echo "<span style='color: green'>Medical drug details deleted successfully</span>";

                    }else{
                        echo "<span style='color: #000000'>Below are all registered Medical drugs,
                                                            to add a new drug please click on the plus(+)
                                                            button at the bottom of this page</span>";
                    }
                    ?>
                </div>
                <div class="panel-body">
                    <div id="content_fetcher">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="dataTables-medical-drug">
                                <thead>
                                <tr>
                                    <th>S/N.</th>
                                    <th>Drug Name</th>
                                    <th>Drug Type</th>
                                    <th>Drug Category</th>
                                    <th>Drug Manufacturer</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(count($med_registered)>0){
                                    $i=0;
                                    foreach($med_registered as $single_medicine){
                                        echo "<tr>"
                                            ."<td>".++$i."</td>
                                            <td>".$single_medicine['drug_name']."</td>
                                            <td>".$single_medicine['drug_type']."</td>
                                            <td>".$single_medicine['drug_category']."</td>
                                            <td>".$single_medicine['manu_name']."</td>
                                            <td>";?><div class="btn-group">
                                            <button type="button" class="btn btn-default" onclick="medical_drug_edit_data('med_registration','<?php echo $single_medicine['drug_id']; ?>')">Edit</button>
                                            <button type="button" class="btn btn-default" onclick="medical_drug_delete_data('med_registration','<?php echo $single_medicine['drug_id']; ?>')">Delete</button>
                                            </div>
                                            </td>
                                        </tr>

                                    <?php } }else{
                                }?>


                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-circle dvs-add-btn" onclick="add_new_data('med_registration')" style="float: right"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataTables-medical-drug').dataTable({
                "oLanguage": {
                    "sEmptyTable":     "No Medical drug registered yet"
                }
            });
        });
    </script>
</div>


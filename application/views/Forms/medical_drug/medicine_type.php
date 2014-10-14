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
                        echo "<span style='color: green'>You success added a new medical drug type</span>";

                    }else if($message == 'updated'){
                        echo "<span style='color: green'>Medical drug type details updated successfully</span>";

                    }else if($message == 'deleted'){
                        echo "<span style='color: green'>Medical drug type details deleted successfully</span>";

                    }else{
                        echo "<span style='color: #000000'>Below are all registered Medical drug types,
                                                            to add a new type please click on the plus(+)
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
                                    <th>Name</th>
                                    <th>Drug Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(count($med_type)>0){
                                    $i=0;
                                    foreach($med_type as $medicine_type){
                                        echo "<tr>"
                                            ."<td>".++$i."</td>
                                             <td>".$medicine_type['name']."</td>
                                             <td>".$medicine_type['description']."</td>
                                             <td>";?><div class="btn-group">
                                                <button type="button" class="btn btn-default" onclick="medical_drug_edit_data('medicine_type','<?php echo $medicine_type['id']; ?>')">Edit</button>
                                                <button type="button" class="btn btn-default" onclick="medical_drug_delete_data('medicine_type','<?php echo $medicine_type['id']; ?>')">Delete</button>
                                                </div>
                                             </td>
                                            </tr>

                                    <?php } }else{
                                }?>


                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-circle dvs-add-btn" onclick="add_new_data('medicine_type')" style="float: right"><i class="fa fa-plus"></i>
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
                    "sEmptyTable":     "No Medical drug type registered yet"
                }
            });
        });
    </script>
</div>

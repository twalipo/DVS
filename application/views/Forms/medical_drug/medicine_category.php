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
                        echo "<span style='color: green'>You success added a new medical drug category</span>";

                    }else if($message == 'updated'){
                        echo "<span style='color: green'>Medical drug category details updated successfully</span>";

                    }else if($message == 'deleted'){
                        echo "<span style='color: green'>Medical drug category details deleted successfully</span>";

                    }else{
                        echo "<span style='color: #000000'>Below are all configured Medical drug category,
                                                            to add a new category please click on the plus(+)
                                                            button at the bottom of this page</span>";
                    }
                    ?>
                </div>
                <div class="panel-body">
                    <div id="content_fetcher">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="dataTables-medical-drug">
                                <thead>
                                <tr>
                                    <th>S/N.</th>
                                    <th>Name</th>
                                    <th>Drug Category</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(count($med_category)>0){
                                    $i=0;
                                    foreach($med_category as $medicine_cat){
                                        echo "<tr>"
                                            ."<td>".++$i."</td>
                                   <td>".$medicine_cat['name']."</td>
                                   <td>".$medicine_cat['description']."</td>
                                   <td>";?><div class="btn-group">
                                        <button type="button" class="btn btn-default" onclick="medical_drug_edit_data('medicine_category','<?php echo $medicine_cat['id']; ?>')">Edit</button>
                                        <button type="button" class="btn btn-default" onclick="medical_drug_delete_data('medicine_category','<?php echo $medicine_cat['id']; ?>')">Delete</button>
                                        </div>
                                        </td>
                                        </tr>

                                    <?php } }else{
                                }?>


                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-circle dvs-add-btn" onclick="add_new_data('medicine_category')" style="float: right"><i class="fa fa-plus"></i>
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
                    "sEmptyTable":     "No Medical drug category registered yet"
                }
            });
        });
    </script>
</div>
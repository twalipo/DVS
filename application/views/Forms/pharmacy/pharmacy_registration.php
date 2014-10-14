<div>
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
                    <?php
                    if($message == 'success'){
                        echo "<span style='color: green'>You success added a new pharmacy</span>";

                    }else if($message == 'updated'){
                        echo "<span style='color: green'>Pharmacy details updated successfully</span>";

                    }else if($message == 'deleted'){
                        echo "<span style='color: green'>Pharmacy details deleted successfully</span>";

                    }else{
                        echo "<span style='color: #000000'>Below are all registered pharmacies from different location,
                                                            to add a new pharmacy please click on the plus(+)
                                                            button at the bottom of this page</span>";
                    }
                    ?>
                </div>
                <div class="panel-body">
                    <div id="content_fetcher">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="dataTables-reader">
                                <thead>
                                <tr align="center">
                                    <th>S/N.</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>email</th>
                                    <th>phone_number</th>
                                    <th>alt_phone_number</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                if(count($pharmacy_details)>0) {
                                    foreach ($pharmacy_details as $details){
                                        echo "<tr>"
                                            ."<td>".++$i."</td>
                                         <td>" . $details['name'] . "</td>
                                         <td>" . $details['location_name'] . "</td>
                                         <td>" . $details['email'] . "</td>
                                         <td>" . $details['phone_number'] . "</td>
                                         <td>" . $details['alt_phone_number'] . "</td>
                                         <td>";?><div class="btn-group">
                                        <button type="button" class="btn btn-default" onclick="reg_edit_data('pharmacy_registration','<?php echo $details['id']; ?>')">Edit</button>
                                        <button type="button" class="btn btn-default" onclick="reg_delete_data('pharmacy_registration','<?php echo $details['id']; ?>')">Delete</button>
                                        </div>
                                        </td>
                                        </tr>

                                    <?php } }?>


                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-circle dvs-add-btn" onclick="add_new_data('pharmacy_registration')" style="float: right"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataTables-reader').dataTable({
                "oLanguage": {
                    "sEmptyTable":     "No Pharmacy registered yet"
                }
            });
        });
    </script>
</div>

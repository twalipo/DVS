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
                        echo "<span style='color: green'>You success added a new reader</span>";

                    }else if($message == 'updated'){
                        echo "<span style='color: green'>Reader details updated successfully</span>";

                    }else if($message == 'deleted'){
                        echo "<span style='color: green'>Reader details deleted successfully</span>";

                    }else{
                        echo "<span style='color: #000000'>Below are all registered readers from different location,
                                                            to add a new reader please click on the plus(+)
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
                                    <th>Reader Name</th>
                                    <th>Vendor</th>
                                    <th>Location</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                if(count($reader_details)>0) {
                                    foreach ($reader_details as $singleReader){
                                        echo "<tr>"
                                            ."<td>".++$i."</td>
                                         <td>" . $singleReader['reader_name'] . "</td>
                                         <td>" . $singleReader['vendor'] . "</td>
                                         <td>" . $singleReader['location_name'] . "</td>
                                         <td>" . $singleReader['level_name'] . "</td>
                                         <td>";?><div class="btn-group">
                                        <button type="button" class="btn btn-default" onclick="rfid_edit_data('reader_registration','<?php echo $singleReader['id']; ?>')">Edit</button>
                                        <button type="button" class="btn btn-default" onclick="rfid_delete_data('reader_registration','<?php echo $singleReader['id']; ?>')">Delete</button>
                                        </div>
                                        </td>
                                        </tr>

                                    <?php } }?>


                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-circle dvs-add-btn" onclick="add_new_data('reader_registration')" style="float: right"><i class="fa fa-plus"></i></button>
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
                    "sEmptyTable":     "No Reader registered yet"
                }
            });
        });
    </script>
</div>

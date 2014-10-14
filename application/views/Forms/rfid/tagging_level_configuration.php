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
                        echo "<span style='color: green'>You success added a new tagging level</span>";

                    }else if($message == 'updated'){
                        echo "<span style='color: green'>Tagging level details updated successfully</span>";

                    }else if($message == 'deleted'){
                        echo "<span style='color: green'>Tagging level details deleted successfully</span>";

                    }else{
                        echo "<span style='color: #000000'>Below are all registered tagging levels, to add a new tagging level click on the plus(+)
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
                                    <th>Level Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;
                                if(count($level_details)>0) {
                                    foreach ($level_details as $details){
                                        echo "<tr>"
                                            ."<td>".++$i."</td>
                                         <td>" . $details['level_name'] . "</td>
                                         <td>";?><div class="btn-group">
                                        <button type="button" class="btn btn-default" onclick="rfid_edit_data('tagging_level','<?php echo $details['id']; ?>')">Edit</button>
                                        <button type="button" class="btn btn-default" onclick="rfid_delete_data('tagging_level','<?php echo $details['id']; ?>')">Delete</button>
                                        </div>
                                        </td>
                                        </tr>

                                    <?php } }?>


                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-circle dvs-add-btn" onclick="add_new_data('tagging_level')" style="float: right"><i class="fa fa-plus"></i></button>
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
                    "sEmptyTable":     "No Tagging level configured yet"
                }
            });
        });
    </script>
</div>
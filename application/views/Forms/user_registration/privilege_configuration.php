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
                        echo "<span style='color: green'>You success added a new privilege </span>";

                    }else if($message == 'updated'){
                        echo "<span style='color: green'>Privilege details updated successfully</span>";

                    }else if($message == 'deleted'){
                        echo "<span style='color: green'>Privilege details deleted successfully</span>";

                    }else{
                        echo "<span style='color: #000000'>Below are all registered privileges,
                                                            to add a new privilege please click on the plus(+)
                                                            button at the bottom of this page</span>";
                    }
                    ?>
                </div>
                <div class="panel-body">
                    <div id="content_fetcher">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped " id="dataTables-user-registration" >
                                <thead>
                                <tr>
                                    <th>S/N.</th>
                                    <th>Privilege</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;

                                foreach($privilege_details as $details){
                                    echo "<tr>"
                                        ."<td>".++$i."</td>
                                  <td>".$details['description']."</td>
                                  <td>";?><div class="btn-group">
                                    <button type="button" class="btn btn-default" onclick="rfid_edit_data('privilege','<?php echo $details['id']; ?>')">Edit</button>
                                    <button type="button" class="btn btn-default" onclick="rfid_delete_data('privilege','<?php echo $details['id']; ?>')">Delete</button>
                                    </div>
                                    </td></tr>

                                <?php } ?>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-circle dvs-add-btn" onclick="add_new_data('privilege')" style="float: right"><i class="fa fa-plus"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataTables-user-registration').dataTable({
                "oLanguage": {
                    "sEmptyTable":     "No User registered yet"
                }
            });
        });
    </script>
</div>
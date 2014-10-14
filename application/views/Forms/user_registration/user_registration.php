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
                        echo "<span style='color: green'>You success added a new ".$current_tab_name['description']." user</span>";

                    }else if($message == 'updated'){
                        echo "<span style='color: green'>".$current_tab_name['description']." user details updated successfully</span>";

                    }else if($message == 'deleted'){
                        echo "<span style='color: green'>".$current_tab_name['description']." user details deleted successfully</span>";

                    }else{
                        echo "<span style='color: #000000'>Below are all registered Users,
                                                            to add a new User please click on the plus(+)
                                                            button at the bottom of this page</span>";
                    }
                    ?>
                </div>
                <div class="panel-body">

                    <div id="content_fetcher">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs" role="tablist">

                                    <?php
                                foreach($tabs_names as $tabs){?>
                                    <li <?PHP  echo $tabs['id']== $current_tab?"class ='active'":''?>><a  id='<?php echo $tabs['id']; ?>' name='<?php echo $tabs['id']; ?>' onclick="tab_options(id)"> <?php echo $tabs['description'];?></a></li>
                               <?php }
                                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped " id="dataTables-user-registration" >
                                <thead>
                                <tr>
                                    <th>Number.</th>
                                    <th>User Name</th>
                                    <th>Email Address</th>
                                    <th>Phone number</th>
                                    <th>Alternative Phone number</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i=0;

                                foreach($users_details as $singleUser){
                                    echo "<tr>"
                                        ."<td>".++$i."</td>
                                  <td>".$singleUser['username']."</td>
                                  <td>".$singleUser['email']."</td>
                                  <td>".$singleUser['phone_number']."</td>
                                  <td>".$singleUser['alt_phone_number']."</td>
                                  <td>".$singleUser['address']."</td>
                                  <td>";?><div class="btn-group">
                                    <button type="button" class="btn btn-default" onclick="user_edit_data(<?php echo $current_tab;?>,'<?php echo $singleUser['user_id']; ?>')">Edit</button>
                                    <button type="button" class="btn btn-default" onclick="user_delete_data(<?php echo $current_tab;?>,'<?php echo $singleUser['user_id']; ?>')">Delete</button>
                                    </div>
                                    </td></tr>

                                <?php } ?>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success btn-circle dvs-add-btn" onclick="user_add_new_data('<?php echo $current_tab;?>')" style="float: right"><i class="fa fa-plus"></i>
                            </button>
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

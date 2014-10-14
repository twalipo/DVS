<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header" style="text-align: center"><?PHP echo $title;?></h2>
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
                  User information or cancel to return back</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">
                            <form role="form" id="userForm" name="userForm" >
                                <div class="col-lg-6">
                                    <input type="hidden"  id="id" name="id" value="<?PHP echo $users_details['user_id'];?>">

                                    <div class="form-group">
                                        <label for="username">User Name</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?PHP echo $users_details['username'];?>" placeholder="Enter username">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?PHP echo $users_details['name'];?>" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?PHP echo $users_details['email'];?>"  placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="<?PHP echo $users_details['password'];?>" placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="number" class="form-control" id="phone_number" name="phone_number" value="<?PHP echo $users_details['phone_number'];?>" placeholder="Enter phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="alt_phone_number">Alternative Phone Number</label>
                                        <input type="number" class="form-control" id="alt_phone_number" name="alt_phone_number" value="<?PHP echo $users_details['alt_phone_number'];?>" placeholder="Alt phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Adress</label>
                                        <input type="text" class="form-control" id="address"  name="address" value="<?PHP echo $users_details['address'];?>"  placeholder="Address">
                                    </div>

                                    <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="user_submit_data(<?php echo $current_tab;?>,'edit')">Save</button>
                                    <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="tab_options(<?php echo $current_tab;?>)">Cancel</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
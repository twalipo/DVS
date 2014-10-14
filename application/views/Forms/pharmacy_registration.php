<!DOCTYPE html>
<html>
<head>
    <title><?php echo "jackson" ?></title>

    <!--Making the UI responsive-->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">


    <!-- DataTables CSS -->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/components/style.css" type="text/css" media="screen"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/components/DataTables-1.10.2/css/jquery.dataTables.css')?>">

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/components/DataTables-1.10.2/js/jquery.js')?>"></script>

    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/components/DataTables-1.10.2/js/jquery.dataTables.js')?>"></script>

    <script src="<?php echo base_url('assets/components/platform/platform.js')?>"></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/components/bootstrap/css/bootstrap-responsive.css')?>" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url('assets/components/bootstrap/css/bootstrap-responsive.min.css')?>" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url('assets/components/bootstrap/css/bootstrap.css')?>" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url('assets/components/bootstrap/css/bootstrap.min.css')?>" type="text/css">

    <script src="<?php echo base_url('assets/components/bootstrap/js/bootstrap.js')?>"></script>

    <script src="<?php echo base_url('assets/components/bootstrap/js/bootstrap.min.js')?>"></script>



    <script src="<?php echo base_url('views/pages/home.php')?>"></script>

    <link rel="import" href="<?php echo base_url('assets/components/polymer/polymer.html')?>">

    <link rel="import" href="<?php echo base_url('assets/components/font-roboto/roboto.html')?>">

    <link rel="import" href="<?php echo base_url('assets/components/paper-input/paper-input.html')?>">

    <link rel="import" href="<?php echo base_url('assets/components/paper-dropdown/paper-dropdown.html')?>">

    <link rel="import" href="<?php echo base_url('assets/components/paper-button/paper-button.html')?>">

    <link rel="import" href="<?php echo base_url('assets/components/custom-elements/grid-view.html')?>">




    <!-- 2. Use an HTML Import to bring in the element. -->
    <link rel="<?php echo base_url('assets/components/core-ajax/core-ajax.html')?>">



        <style>
        body {
            font-family: sans-serif;
            margin: 0;
        }

        body/deep {
                  fill: #fff;
              }
        #registration_form{
            margin-left:0px;
            height: 100%;
            width: 200px;
        }

        #content_fetcher{
            margin-left:50px;
            height:100%;
            width: 60%;
        }


        #registration_form paper-input{
            margin-top: 0px;
        }

        #form_title{
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
            margin-left: 5px;
        }

        #user_role{
            max-width: 150px;
        }
        paper-dialog {
            width: 30%;
            min-width: 430px;
        }
        paper-button[autofocus] {
            color: #4285f4;
        }
    </style>

</head>
<body unresolved>
<div>

    <core-toolbar id="content_toolbar"  style=" height: 80px">
        <span flex class="bottom title" style="color: #5264ad; text-indent: -10px; font-size: 18pt;"><?php echo "jackson"?></span>
    </core-toolbar>

    <paper-fab icon="arrow-forward" onclick="toggleDialog('paper-dialog-transition-center')"></paper-fab>
    <div id="content_fetcher">

        <table class="table table-hover table-bordered table-striped" >
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>User Name</th>
                        <th>Email Address</th>
                        <th>Phone number</th>
                        <th>Alternative Phone number</th>
                        <th>Address</th>
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
                                  <td>".$singleUser['address']."</td>"
                                ."</tr>";
                        }

                    ?>
                </tbody>
        </table>

    </div>
    <paper-dialog heading="New Pharmacy" transition="paper-dialog-transition-center">
        <div id="registration_form" style="margin-top: 16pt">

            <form role="form" id="userForm" name="userForm" >
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="email" class="form-control" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="alt_phone_number">Alternative Phone Number</label>
                    <input type="text" class="form-control" id="alt_phone_number" name="alt_phone_number" placeholder="Alt phone number">
                </div>
                <div class="form-group">
                    <label for="address">Adress</label>
                    <input type="text" class="form-control" id="address"  name="address" placeholder="Address">
                </div>

                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="submit_data('user_registration')">Submit</button>
            </form>

        </div>



    </paper-dialog>


</div>
</body>


</html>
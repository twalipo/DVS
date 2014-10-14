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
                <span style="color: red">
                <?php echo validation_errors(); ?>
                </span>
              <span style='color: #000000'>
                  Please fill in the below form to add a new
                  privilege or cancel to return back</span>

            </div>
            <div class="panel-body">
                <div id="content_fetcher">
                    <div id="registration_form" style="margin-top: 16pt">

                        <form role="form" id="userForm" name="userForm" >
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="privilege">Privilege</label>
                                    <input type="text" class="form-control" id="privilege" name="privilege" placeholder="Privilege">
                                </div>

                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="rfid_submit_data('privilege','insert')">Save</button>
                                <button type="button" class="btn btn-default" id="sub_button" name="sub_button" onclick="menu_options('privilege')">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
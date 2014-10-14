/*
 | ---------------------------------
 |   MEDICAL DRUG CONFIGURATION
 | ---------------------------------
 */

function medical_drug_submit_data(form_name,action){

    if(action == 'insert'){
        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  'index.php/medical_drug_registration/'+form_name,
            data: $('#userForm').serialize(),
            success: function (data) {
                $("#page-wrapper").html(data);
            }

        });
    }else{
        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  'index.php/medical_drug_registration/'+form_name,
            data: $('#userForm').serialize(),
            success: function (data) {
                $("#page-wrapper").html(data);
            }

        });
    }

}

function medical_drug_edit_data(form_header,edit_id){

    var link="index.php/med_config_edit/"+form_header+"/"+edit_id;
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });
}

function medical_drug_delete_data(form_header,edit_id){

    var link="index.php/med_config_delete/"+form_header+"/"+edit_id;
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });

}


/*
 | ---------------------------------
 |       READER CONFIGURATION
 | ---------------------------------
 */

function rfid_submit_data(form_name,action){

    if(action == 'insert'){
        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  'index.php/rfid_submission/'+form_name,
            data: $('#userForm').serialize(),
            success: function (data) {
                $("#page-wrapper").html(data);
            }

        });
    }else{
        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  'index.php/rfid_submission/'+form_name,
            data: $('#userForm').serialize(),
            success: function (data) {
                $("#page-wrapper").html(data);
            }

        });
    }

}

function rfid_edit_data(form_header,edit_id){

    var link="index.php/rfid_edit/"+form_header+"/"+edit_id;
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });
}

function rfid_delete_data(form_header,delete_id){

    var link="index.php/rfid_delete/"+form_header+"/"+delete_id;
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });

}


/*
 | ---------------------------------
 |   USER CONFIGURATION
 | ---------------------------------
 */

function user_add_new_data(tab_id){

    var link = 'index.php/registration_view/user_registration_form/'+tab_id;

    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });

}

function tab_options(tab_id) {

    var link="index.php/tab_view/"+tab_id;
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });
}

function user_submit_data(tab_id,action){

    if(action == 'insert'){
        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  'index.php/user_submission/'+tab_id,
            data: $('#userForm').serialize(),
            success: function (data) {
                $("#page-wrapper").html(data);
            }

        });
    }else{
        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  'index.php/user_submission/'+tab_id,
            data: $('#userForm').serialize(),
            success: function (data) {
                $("#page-wrapper").html(data);
            }

        });
    }

}

function user_edit_data(tab_id,edit_id){

    var link="index.php/user_edit/"+tab_id+"/"+edit_id;
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });
}

function user_delete_data(tab_id,delete_id){

    var link="index.php/user_delete/"+tab_id+"/"+delete_id;
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });

}


/*
 | ---------------------------------
 |   UNIVERSAL CONFIGURATION
 | ---------------------------------
 */

function menu_options(form_header) {

    var link='';
    if(form_header=="medicine_type"){
        link = "index.php/med_config/"+form_header;

    }else if(form_header=="medicine_category"){
        link = "index.php/med_config/"+form_header;

    }else if(form_header=="medicine_registration"){
        link = "index.php/med_config/"+form_header;

    }else if(form_header=="reader_registration"){
        link = "index.php/registration_view/"+form_header;

    }else if(form_header=="user_registration"){
        link = "index.php/registration_view/"+form_header;

    }else if(form_header=="tag_registration"){
        link = "index.php/registration_view/"+form_header;

    }else if(form_header=="privilege"){
        link = "index.php/registration_view/"+form_header;

    } if(form_header=="tagging_level"){
        link = "index.php/registration_view/"+form_header;
    }

    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });


}

function add_new_data(form_header){

    var link = '';
    if(form_header == 'reader_registration' || form_header == 'tag_registration' || form_header == 'tagging_level' || form_header == 'privilege'){
        var link = "index.php/rfid_registration/"+form_header;

    }else if(form_header == 'medicine_type' || form_header == 'medicine_category' || form_header == 'med_registration') {
        var link = "index.php/med_config_registration/" + form_header;

    }
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });

}







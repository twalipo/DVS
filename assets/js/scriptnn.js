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
    if(form_header == 'reader_registration'){
        var link = "index.php/rfid_registration/"+form_header;

    }else if(form_header == 'medicine_type' || form_header == 'medicine_category' || form_header == 'med_registration'){
        var link = "index.php/med_config_registration/"+form_header;

    }else{
        var link = "index.php/med_config_registration/"+form_header;

    }
    $.ajax({
        url: link,
        dataType: 'html',
        success: function (data) {
            $("#page-wrapper").html(data);
        }
    });

}



function tab_options(labelvalue) {
    var form_header=labelvalue;
    var xmlhttp,code;
    if (window.XMLHttpRequest){
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }else{
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("page-wrapper").innerHTML=xmlhttp.responseText;
        }
    }

    xmlhttp.open("POST","index.php/tab_view/"+form_header,true);
    xmlhttp.send();
}

function onTabsClick(){
    var tabs=document.querySelector('paper-tabs');
    var tab_name=tabs.selected;
    tab_options(tab_name);

}

function toggle_dialog_editor(tab_id,transition,id,action) {
    var dialog = document.querySelector('paper-dialog[transition=' + transition + ']');
    dialog.toggle();
    toggle_options(tab_id,id,action);
}

function toggle_options(tab_id,id,action){

    var form_header=tab_id;
    var option_id=id;
    var option_action=action;
    var xmlhttp,code;

    if (window.XMLHttpRequest){
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();

    }else{
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("registration_form").innerHTML=xmlhttp.responseText;
        }
    }


    xmlhttp.open("POST","index.php/"+option_action+"/"+form_header+"/"+option_id,true);
    xmlhttp.send();
}






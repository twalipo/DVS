<?php
class dvscontroller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('dvs_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('html');
    }


    function index(){

        $this->load->view('header');
        $this->load->view('sidemenu');
        $this->load->view('centralpanel');
        $this->load->view('footer');

        }


    /*
    | -----------------------------------------
    | MEDICAL DRUG CONFIGURATION
    | -----------------------------------------
    */
    public function med_config_delete($form_name){
        $array = $this->uri->segment_array();
        $delete_id = $array[3];
        $this->dvs_model->delete_med_config($form_name,$delete_id);
        if ($form_name == "medicine_type") {
            $data['message'] = "deleted";
            $data['title'] = "Medical Drug Type Configuration";
            $data['med_type'] = $this->dvs_model->load_med_types();
            $this->load->view('Forms/medical_drug/medicine_type', $data);
        }
        else if ($form_name == "medicine_category") {
            $data['title'] = "Medical Drug Category Configuration";
            $data['message'] = "deleted";
            $data['med_category'] = $this->dvs_model->load_med_category();
            $this->load->view('Forms/medical_drug/medicine_category', $data);
        }
        else if ($form_name == "med_registration") {
            $data['title'] = "Medical Drug Registration";
            $data['message'] = "deleted";
            $data['med_registered'] = $this->dvs_model->load_medicine_registered();
            $this->load->view('Forms/medical_drug/registered_medicines', $data);
        }

    }

    public function medical_drug_registration($form_name){

        $this->load->library('form_validation');
        if($form_name == 'medicine_type'){
            $id=$this->input->post('edit_id');
            /**
             * if $id is not set then it's an insert request
             * else it's an update request
             */
            if ($id != ''){
                $this->dvs_model->save_med_config_changes($form_name,$id);
                $data['title'] = "Medical Drug Type Configuration";
                $data['message'] = "updated";
                $data['med_type'] = $this->dvs_model->load_med_types();
                $this->load->view('Forms/medical_drug/medicine_type', $data);
            }else{

                $this->form_validation->set_rules('name',' Name','required');
                $this->form_validation->set_rules('description','Description','required');

                if($this->form_validation->run() == FALSE){
                    $this->load->helper('form');
                    $data['title'] = "Add New Medical Type";
                    $this->load->view('Forms/medical_drug/medicine_type_registration',$data);
                }else{

                    $this->dvs_model->med_config_registration($form_name);
                    $data['message'] = "success";
                    $data['title'] = "Medical Drug Type Configuration";
                    $data['med_type'] = $this->dvs_model->load_med_types();
                    $this->load->view('Forms/medical_drug/medicine_type', $data);
                }

            }
        }else if($form_name == 'medicine_category'){
            $id=$this->input->post('edit_id');
            /**
             * if $id is not set then it's an insert request
             * else it's an update request
             */
            if ($id != ''){
                $this->dvs_model->save_med_config_changes($form_name,$id);
                $data['message'] = "updated";
                $data['title'] = "Medical Drug Category Configuration";
                $data['med_category'] = $this->dvs_model->load_med_category();
                $this->load->view('Forms/medical_drug/medicine_category', $data);
            }else{

                $this->form_validation->set_rules('name',' Name','required');
                $this->form_validation->set_rules('description','Description','required');

                if($this->form_validation->run() == FALSE){
                    $this->load->helper('form');
                    $data['title'] = " New Medical Drug Category";
                    $this->load->view('Forms/medical_drug/medicine_category_registration',$data);
                }else{

                    $this->dvs_model->med_config_registration($form_name);
                    $data['message'] = "success";
                    $data['title'] = "Medical Drug Category Configuration";
                    $data['med_category'] = $this->dvs_model->load_med_category();
                    $this->load->view('Forms/medical_drug/medicine_category', $data);
                }

            }
        }else if($form_name == 'medicine_registration'){
            $id=$this->input->post('edit_id');
            /**
             * if $id is not set then it's an insert request
             * else it's an update request
             */
            if ($id != ''){
                $this->dvs_model->save_med_config_changes($form_name,$id);
                $data['message'] = "updated";
                $data['title'] = "Medical Drug Registration";
                $data['med_registered'] = $this->dvs_model->load_medicine_registered();
                $this->load->view('Forms/medical_drug/registered_medicines', $data);
            }else{

                $this->form_validation->set_rules('name',' Name','required');
                $this->form_validation->set_rules('drug_type','Drug Type','required');
                $this->form_validation->set_rules('drug_category','Drug Category','required');
                $this->form_validation->set_rules('manufacturer','Manufacturer','required');

                if($this->form_validation->run() == FALSE){
                    $this->load->helper('form');
                    $data['title'] = "New Medical Drug ";
                    $data['med_type'] = $this->dvs_model->load_med_types();
                    $data['med_category'] = $this->dvs_model->load_med_category();
                    $data['manufacturer'] = $this->dvs_model->load_manufacturer();
                    $this->load->view('Forms/medical_drug/medicine_registration',$data);

                }else{

                    $this->dvs_model->med_config_registration($form_name);
                    $data['message'] = "success";
                    $data['title'] = "Medical Drug Registration";
                    $data['med_registered'] = $this->dvs_model->load_medicine_registered();
                    $this->load->view('Forms/medical_drug/registered_medicines', $data);
                }

            }
        }


    }

    public function medicine_configuration($med_config_type){

        if ($med_config_type == "medicine_type") {
            $data['title'] = "Medical Drug Type Configuration";
            $data['message'] = "";
            $data['med_type'] = $this->dvs_model->load_med_types();
            $this->load->view('Forms/medical_drug/medicine_type', $data);
        }
        else if ($med_config_type == "medicine_category") {
            $data['title'] = "Medical Drug Category Configuration";
            $data['message'] = "";
            $data['med_category'] = $this->dvs_model->load_med_category();
            $this->load->view('Forms/medical_drug/medicine_category', $data);

        }else if($med_config_type == "medicine_registration"){
            $data['title'] = "Medical Drug Registration";
            $data['message'] = "";
            $data['med_registered'] = $this->dvs_model->load_medicine_registered();
            $this->load->view('Forms/medical_drug/registered_medicines', $data);
        }

    }

    public function med_config_registration($med_config_type){
        if ($med_config_type == "medicine_type") {
            $data['title'] = "New Medical Drug Type";
            $this->load->view('Forms/medical_drug/medicine_type_registration',$data);
        }
        else if ($med_config_type == "medicine_category") {
            $data['title'] = "New Medical Drug Category";
            $this->load->view('Forms/medical_drug/medicine_category_registration',$data);

        }else if($med_config_type == "med_registration"){
            $data['title'] = "New Medical Drug ";
            $data['med_type'] = $this->dvs_model->load_med_types();
            $data['med_category'] = $this->dvs_model->load_med_category();
            $data['manufacturer'] = $this->dvs_model->load_manufacturer();
            $this->load->view('Forms/medical_drug/medicine_registration',$data);
        }

    }

    public function med_config_edit($med_edit_type){
        $array = $this->uri->segment_array();

        if ($med_edit_type == "medicine_type") {
            $type_id = $array[3];
            $data['title'] = "Edit Medical drug type details";
            $data['med_edit_type'] = $this->dvs_model->load_med_edit_types($type_id);
            $this->load->view('Forms/medical_drug/medicine_type_edit',$data);
        }
        else if ($med_edit_type == "medicine_category") {
            $cat_id = $array[3];
            $data['title'] = "Edit Medical drug category details";
            $data['med_edit_category'] = $this->dvs_model->load_med_edit_categories($cat_id);
            $this->load->view('Forms/medical_drug/medicine_category_edit',$data);
        }
        else if ($med_edit_type == "med_registration") {
            $med_id = $array[3];
            $data['title'] = "Edit Medical drug details";
            $data['med_edit'] = $this->dvs_model->load_med_registered($med_id);
            $data['med_type'] = $this->dvs_model->load_med_types();
            $data['med_category'] = $this->dvs_model->load_med_category();
            $data['manufacturer'] = $this->dvs_model->load_manufacturer();
            $this->load->view('Forms/medical_drug/medicine_edit',$data);
        }


    }


    /*
    | -----------------------------------------
    | READER CONFIGURATION
    | -----------------------------------------
    */
    public function registration_views($form_name){

        if($form_name == 'reader_registration'){
            $data['title'] = "Reader Registration";
            $data['message'] = "";
            $data['reader_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/rfid/reader_registration', $data);

        }else if($form_name == 'user_registration'){
            $data['title'] = "User Registration";
            $tab_name = 1;
            $data['message'] = "";
            $data['current_tab'] = $tab_name;
            $data['current_tab_name']=$this->dvs_model->get_tab_name($tab_name);
            $data['users_details'] = $this->dvs_model->get_selected_tab_data($tab_name);
            $data['tabs_names']  = $this->dvs_model->select_query('user_registration_tabs_names');
            $this->load->view('Forms/user_registration/user_registration', $data);

        }else if($form_name == 'user_registration_form'){
            $array = $this->uri->segment_array();
            $tab_id = $array[3];
            $data['tab_id'] = $tab_id;
            $tab_name = $this->dvs_model->get_tab_name($tab_id);
            $data['title'] = $tab_name['description']." User Registration";
            $this->load->view('Forms/user_registration/user_registration_form', $data);

        }else if($form_name == 'tag_registration'){
            $data['title'] = "Tag Registration";
            $data['message'] = "";
            $data['tag_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/rfid/tag_registration', $data);

        }elseif($form_name == 'tagging_level'){
            $data['title'] = "Tagging  Level Configuration";
            $data['message'] = "";
            $data['level_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/rfid/tagging_level_configuration', $data);

        }else if($form_name == 'privilege'){
            $data['title'] = "Privilege Configuration";
            $data['message'] = "";
            $data['privilege_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/user_registration/privilege_configuration', $data);
        }else if($form_name == 'pharmacy_registration'){
            $data['title'] = "Pharmacy Registration";
            $data['message'] = "";
            $data['pharmacy_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/pharmacy/pharmacy_registration', $data);
        }

    }

    public function rfid_registration($form_name){
        $this->load->helper('form');

        if ($form_name== "reader_registration") {
            $data['title'] = "Add new Reader ";
            $data['level_details'] = $this->dvs_model->select_particular_query('levels');
            $this->load->view('Forms/rfid/reader_registration_form',$data);
        }
        else if ($form_name == "tagging_level") {
            $data['title'] = "Add new Tagging Level ";
            $this->load->view('Forms/rfid/tagging_level_form',$data);
        }
        else if ($form_name == "tag_registration") {
            $data['title'] = "Add new Tag ";
            $this->load->view('Forms/rfid/tag_registration_form',$data);
        }
        else if ($form_name == "privilege") {
            $data['title'] = "Add new Privilege ";
            $this->load->view('Forms/user_registration/privilege_form',$data);
        }

    }

    public function rfid_submission($form_name){
        $this->load->library('form_validation');
        if($form_name == 'reader_registration'){
            $id=$this->input->post('id');
            /**
             * if $id is not set then it's an insert request
             * else it's an update request
             */
            if ($id != ''){
                $this->dvs_model->update_entry($form_name,$id);
                $data['title'] = "Reader Registration";
                $data['message'] = "updated";
                $data['reader_details'] = $this->dvs_model->select_query($form_name);
                $this->load->view('Forms/rfid/reader_registration', $data);
            }else{

                $this->form_validation->set_rules('readername','Reader Name','required');
                $this->form_validation->set_rules('vendor','Vendor','required');
                $this->form_validation->set_rules('location','Location Name','required');
                $this->form_validation->set_rules('latitude','Location Latitude','required');
                $this->form_validation->set_rules('longitude','Location Longitude','required');
                $this->form_validation->set_rules('level','Level','required');

                if($this->form_validation->run() == FALSE){
                    $data['title'] = "Add new Reader ";
                    $this->load->helper('form');
                    $data['level_details'] = $this->dvs_model->select_particular_query('levels');
                    $this->load->view('Forms/rfid/reader_registration_form',$data);
                }else{

                    $this->dvs_model->rfid_insert_query($form_name);
                    $data['title'] = "Reader Registration";
                    $data['message'] = "success";
                    $data['reader_details'] = $this->dvs_model->select_query($form_name);
                    $this->load->view('Forms/rfid/reader_registration', $data);
                }

            }
        }
        else if($form_name == 'tagging_level'){
            $id=$this->input->post('id');
            /**
             * if $id is not set then it's an insert request
             * else it's an update request
             */
            if ($id != ''){
                $this->dvs_model->update_entry($form_name,$id);
                $data['message'] = "updated";
                $data['title'] = "Tagging  Level Configuration";
                $data['level_details'] = $this->dvs_model->select_query($form_name);
                $this->load->view('Forms/rfid/tagging_level_configuration', $data);
            }else{

                $this->form_validation->set_rules('name',' Name','required');

                if($this->form_validation->run() == FALSE){
                    $this->load->helper('form');
                    $data['title'] = "Add new Tagging Level ";
                    $this->load->view('Forms/rfid/tagging_level_form',$data);
                }else{

                    $this->dvs_model->rfid_insert_query($form_name);

                    $data['message'] = "success";
                    $data['title'] = "Tagging  Level Configuration";
                    $data['level_details'] = $this->dvs_model->select_query($form_name);
                    $this->load->view('Forms/rfid/tagging_level_configuration', $data);
                }

            }
        }
        else if($form_name == 'tag_registration'){
            $id=$this->input->post('id');
            /**
             * if $id is not set then it's an insert request
             * else it's an update request
             */
            if ($id != ''){
                $this->dvs_model->update_entry($form_name,$id);
                $data['message'] = "updated";
                $data['title'] = "Tag Registration";
                $data['tag_details'] = $this->dvs_model->select_query($form_name);
                $this->load->view('Forms/rfid/tag_registration', $data);
            }else{

                $this->form_validation->set_rules('tag_info',' Tag Info','required');
                $this->form_validation->set_rules('vendor',' Vendor','required');

                if($this->form_validation->run() == FALSE){
                    $this->load->helper('form');
                    $data['title'] = "Add new Tag ";
                    $this->load->view('Forms/rfid/tag_registration_form',$data);
                }else{

                    $this->dvs_model->rfid_insert_query($form_name);
                    $data['message'] = "success";
                    $data['title'] = "Tag Registration";
                    $data['tag_details'] = $this->dvs_model->select_query($form_name);
                    $this->load->view('Forms/rfid/tag_registration', $data);
                }

            }
        }
        else if($form_name == 'privilege'){
            $id=$this->input->post('id');
            /**
             * if $id is not set then it's an insert request
             * else it's an update request
             */
            if ($id != ''){
                $this->dvs_model->update_entry($form_name,$id);
                $data['message'] = "updated";
                $data['title'] = "Privilege Configuration";
                $data['privilege_details'] = $this->dvs_model->select_query($form_name);
                $this->load->view('Forms/user_registration/privilege_configuration', $data);
            }else{

                $this->form_validation->set_rules('privilege',' Privilege','required');

                if($this->form_validation->run() == FALSE){
                    $this->load->helper('form');
                    $data['title'] = "Add new Privilege ";
                    $this->load->view('Forms/user_registration/privilege_form',$data);
                }else{

                    $this->dvs_model->rfid_insert_query($form_name);
                    $data['message'] = "success";
                    $data['title'] = "Privilege Configuration";
                    $data['privilege_details'] = $this->dvs_model->select_query($form_name);
                    $this->load->view('Forms/user_registration/privilege_configuration', $data);
                }

            }
        }
    }

    public function rfid_edit($form_name){
        $this->load->helper('form');
        $array = $this->uri->segment_array();
        if ($form_name == 'reader_registration') {
            $reader_id = $array[3];
            $data['title'] = "Edit Reader details";
            $data['current_page'] = $form_name;
            $data['reader_details'] = $this->dvs_model->select_query_specific($form_name,$reader_id);
            $data['level_details'] = $this->dvs_model->select_particular_query('levels');
            $this->load->view('Forms/rfid/rfid_form_edit', $data);
        }else if ($form_name == 'privilege') {
            $privilege_id = $array[3];
            $data['title'] = "Edit privilege details";
            $data['current_page'] = $form_name;
            $data['privilege_details'] = $this->dvs_model->select_query_specific($form_name,$privilege_id);
            $this->load->view('Forms/user_registration/privilege_form_edit', $data);
        }else if ($form_name == 'tag_registration') {
            $privilege_id = $array[3];
            $data['title'] = "Edit tag details";
            $data['current_page'] = $form_name;
            $data['tag_details'] = $this->dvs_model->select_query_specific($form_name,$privilege_id);
            $this->load->view('Forms/rfid/tag_form_edit', $data);
        }else if ($form_name == 'tagging_level') {
            $privilege_id = $array[3];
            $data['title'] = "Edit tagging level details";
            $data['current_page'] = $form_name;
            $data['level_details'] = $this->dvs_model->select_query_specific($form_name,$privilege_id);
            $this->load->view('Forms/rfid/tagging_level_form_edit', $data);
        }
    }

    public function rfid_delete($form_name){
        $this->load->helper('html');
        $array = $this->uri->segment_array();

        if ($form_name == 'reader_registration') {
            $id = $array[3];
            $this->dvs_model->delete_query($form_name,$id);
            $data['title'] = "Reader Registration";
            $data['message'] = "deleted";
            $data['level_details'] = $this->dvs_model->select_particular_query('levels');
            $data['reader_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/rfid/reader_registration', $data);
        }
        else if($form_name == 'tagging_level'){

            $id = $array[3];
            $this->dvs_model->delete_query($form_name,$id);
            $data['message'] = "deleted";
            $data['title'] = "Tagging  Level Configuration";
            $data['level_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/rfid/tagging_level_configuration', $data);
        }
        else if($form_name == 'tag_registration'){

            $id = $array[3];
            $this->dvs_model->delete_query($form_name,$id);
            $data['message'] = "deleted";
            $data['title'] = "Tag Registration";
            $data['tag_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/rfid/tag_registration', $data);
        }
        else if($form_name == 'privilege'){

            $id = $array[3];
            $this->dvs_model->delete_query($form_name,$id);
            $data['message'] = "deleted";
            $data['title'] = "Privilege Configuration";
            $data['privilege_details'] = $this->dvs_model->select_query($form_name);
            $this->load->view('Forms/user_registration/privilege_configuration', $data);
        }
    }



    /*
    | -----------------------------------------
    | USER CONFIGURATION
    | -----------------------------------------
    */

    public function user_registration_tabs($tab_name){

        $data['title'] = "User Registration";
        $data['current_tab'] = $tab_name;
        $data['message'] = "";
        $data['current_tab_name']=$this->dvs_model->get_tab_name($tab_name);
        $data['users_details'] = $this->dvs_model->get_selected_tab_data($tab_name);
        $data['tabs_names']    = $this->dvs_model->select_query('user_registration_tabs_names');
        $this->load->view('Forms/user_registration/user_registration', $data);
    }

    public function user_submission($tab_id){
        $this->load->library('form_validation');
            $id=$this->input->post('id');
            /**
             * if $id is not set then it's an insert request
             * else it's an update request
             */
            if ($id != ''){
                $this->dvs_model->update_user_details($id);
                $data['title'] = "User Registration";
                $data['current_tab'] = $tab_id;
                $data['message'] = "updated";
                $data['current_tab_name']=$this->dvs_model->get_tab_name($tab_id);
                $data['users_details'] = $this->dvs_model->get_selected_tab_data($tab_id);
                $data['tabs_names']    = $this->dvs_model->select_query('user_registration_tabs_names');
                $this->load->view('Forms/user_registration/user_registration', $data);
            }else{

                $this->form_validation->set_rules('username','Username','required');
                $this->form_validation->set_rules('email','E-mail','required');
                $this->form_validation->set_rules('phone_number','Phone Number','required');
                $this->form_validation->set_rules('alt_phone_number','Alternative Phone number','required');
                $this->form_validation->set_rules('address','Address','required');
                $this->form_validation->set_rules('password','Password','required');
                $this->form_validation->set_rules('name','Name','required');

                if($this->form_validation->run() == FALSE){
                    $this->load->helper('form');
                    $data['tab_id'] = $tab_id;
                    $tab_name = $this->dvs_model->get_tab_name($tab_id);
                    $data['title'] = $tab_name['description']." User Registration";
                    $this->load->view('Forms/user_registration/user_registration_form', $data);
                }else{

                    $this->dvs_model->save_user_registration_data($tab_id);
                    $data['title'] = "User Registration";
                    $data['current_tab'] = $tab_id;
                    $data['message'] = "success";
                    $data['current_tab_name']=$this->dvs_model->get_tab_name($tab_id);
                    $data['users_details'] = $this->dvs_model->get_selected_tab_data($tab_id);
                    $data['tabs_names']    = $this->dvs_model->select_query('user_registration_tabs_names');
                    $this->load->view('Forms/user_registration/user_registration', $data);

                }

            }

    }

    public function user_edit($tab_id){
        $array = $this->uri->segment_array();
        $id = $array[3];
        $data['current_tab']=$tab_id;
        $tab_name = $this->dvs_model->get_tab_name($tab_id);
        $data['title'] = 'Edit '.$tab_name['description']." User Registration";
        $data['users_details'] = $this->dvs_model->select_specific_user($id);
        $this->load->view('Forms/user_registration/user_registration_edit', $data);

    }

    public function user_delete($tab_id){
        $array = $this->uri->segment_array();
        $id = $array[3];
        $this->dvs_model->user_delete_query($id);
        $data['title'] = "User Registration";
        $data['current_tab'] = $tab_id;
        $data['message'] = "deleted";
        $data['current_tab_name']=$this->dvs_model->get_tab_name($tab_id);
        $data['users_details'] = $this->dvs_model->get_selected_tab_data($tab_id);
        $data['tabs_names']    = $this->dvs_model->select_query('user_registration_tabs_names');
        $this->load->view('Forms/user_registration/user_registration', $data);

    }


}
?>

<?php
class Dvs_model extends CI_Model{

    public function __construct(){
        $this->load->database();
        $this->load->helper('url');
    }


    /*
     * ***************************
     *   user registration
     * **************************
     */
    public function save_user_registration_data($tab_id){
        $data = array(
            'username' => $this->input->post('username'),
            'address' => $this->input->post('address'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'phone_number' => $this->input->post('phone_number'),
            'alt_phone_number' => $this->input->post('alt_phone_number'),
            'status' => '1',

        );
        $this->db->insert('tbl_users',$data);
        $user_id=$this->db->insert_id();

        $data2 = array(
            'user_id' => $user_id,
            'name' => $this->input->post('name'),
            'privilige_id' => $tab_id,
            'status' => '1',

        );
        $this->db->insert('tbl_psc_actors',$data2);


    }

    public function get_tab_name($tab_name){
        $status = 1;
        $selected_tab=$tab_name;
        $this->db->select('description');
        $this->db->from('tbl_priviledge');
        $this->db->where('status = '.$status);
        $this->db->where('id = '.$selected_tab);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function select_specific_user($id){
        $status = 1;
        $this->db->select('u.user_id,username,email,phone_number,alt_phone_number,address,a.name name,u.password');
        $this->db->from('tbl_users u,tbl_psc_actors a');
        $this->db->where('u.status = '.$status);
        $this->db->where('a.status = '.$status);
        $this->db->where('a.user_id = u.user_id');
        $this->db->where('u.user_id = '.$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function user_delete_query($id){

        $this->status   = 0;
        $this->db->update('tbl_users', $this, array('user_id' => $id));
    }

    function update_user_details($user_id){
        $user_registration_data = array(
            'username' => $this->input->post('username'),
            'address' => $this->input->post('address'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'phone_number' => $this->input->post('phone_number'),
            'alt_phone_number' => $this->input->post('alt_phone_number'),
            'status' => '1',

        );

        $this->db->update('tbl_users',$user_registration_data,array('user_id' => $user_id));

        $actor_registration_data = array(
            'name' => $this->input->post('name')


        );
        $this->db->update('tbl_psc_actors',$actor_registration_data,array('user_id' => $user_id));
    }

    public function get_selected_tab_data($tab_name){
        $status = 1;
        $selected_tab=$tab_name;
        $this->db->select('u.user_id,username,email,phone_number,alt_phone_number,address');
        $this->db->from('tbl_users u,tbl_priviledge p,tbl_psc_actors a');
        $this->db->where('p.id = '.$selected_tab);
        $this->db->where('u.status = '.$status);
        $this->db->where('a.status = '.$status);
        $this->db->where('p.status = '.$status);
        $this->db->where('a.user_id = u.user_id');
        $this->db->where('a.privilige_id = p.id');
        $query = $this->db->get();
        return $query->result_array();
    }


    /*
    * ***************************
    *   medical drug registration
    * **************************
    */
    function med_config_registration($form_name){
        if($form_name=="medicine_type"){
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => '1',

            );
            $this->db->insert('tbl_drug_type',$data);
        }

        else if($form_name=="medicine_category"){
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => '1',

            );
            $this->db->insert('tbl_drug_category',$data);
        }

        else if($form_name=="medicine_registration"){
            $data = array(
                'name' => $this->input->post('name'),
                'drug_type_id' => $this->input->post('drug_type'),
                'drug_category_id' => $this->input->post('drug_category'),
                'manu_id' => $this->input->post('manufacturer'),
                'status' => '1',

            );
            $this->db->insert('tbl_medical_drug',$data);
        }

    }

    function load_med_edit_types($med_type_edit_id){

        $status = 1;
        $this->db->select('id,name,description');
        $this->db->from('tbl_drug_type');
        $this->db->where('status = '.$status);
        $this->db->where('id = '.$med_type_edit_id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function load_med_types(){
        $status = 1;
        $this->db->select('id,name,description');
        $this->db->from('tbl_drug_type');
        $this->db->where('status = '.$status);
        $query = $this->db->get();
        return $query->result_array();
    }

    function save_med_config_changes($med_config_form_name,$edit_id){
        if($med_config_form_name=="medicine_category"){
            $med_category_changes = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => '1',
            );

            $this->db->update('tbl_drug_category',$med_category_changes,array('id' => $edit_id));
        }

        else if($med_config_form_name=="medicine_type"){
            $med_type_changes = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'status' => '1',

            );

            $this->db->update('tbl_drug_type',$med_type_changes,array('id' => $edit_id));
        }

        else if($med_config_form_name=="medicine_registration"){
            $med_changes = array(
                'name' => $this->input->post('name'),
                'drug_type_id' => $this->input->post('drug_type'),
                'drug_category_id' => $this->input->post('drug_category'),
                'manu_id' => $this->input->post('manufacturer'),
                'status' => '1',

            );

            $this->db->update('tbl_medical_drug',$med_changes,array('id' => $edit_id));
        }

    }

    function delete_med_config($med_config_form_name,$delete_id){
        if($med_config_form_name=="medicine_category"){
            $med_category_changes = array(
                'status' => '0',
            );

            $this->db->update('tbl_drug_category',$med_category_changes,array('id' => $delete_id));
        }

        else if($med_config_form_name=="medicine_type"){
            $med_type_changes = array(
                'status' => '0',
            );

            $this->db->update('tbl_drug_type',$med_type_changes,array('id' => $delete_id));
        }

        else if($med_config_form_name=="med_registration"){
            $med_changes = array(
                'status' => '0',
            );

            $this->db->update('tbl_medical_drug',$med_changes,array('id' => $delete_id));
        }


    }

    function load_med_category(){
        $status = 1;
        $this->db->select('id,name,description');
        $this->db->from('tbl_drug_category');
        $this->db->where('status = '.$status);
        $query = $this->db->get();
        return $query->result_array();
    }

    function load_manufacturer(){
        $status = 1;
        $this->db->select('a.name name,a.id id');
        $this->db->from('tbl_priviledge p,tbl_psc_actors a');
        $this->db->where('a.status = '.$status);
        $this->db->where('p.status = '.$status);
        $this->db->where('a.privilige_id = p.id');
        $this->db->where('p.description = '."'MANUFACTURER'");
        $query = $this->db->get();
        return $query->result_array();
    }

    function load_medicine_registered(){
        //Manufacturer to be added
        $status = 1;
        $this->db->select('md.id drug_id,md.name drug_name,dt.name drug_type,dc.name drug_category,a.name manu_name');
        $this->db->from('tbl_medical_drug md,tbl_drug_type dt,tbl_drug_category dc,tbl_psc_actors a');
        $this->db->where('md.status = '.$status);
        $this->db->where('a.status = '.$status);
        $this->db->where('dt.status = '.$status);
        $this->db->where('dc.status = '.$status);
        $this->db->where('md.drug_type_id = dt.id');
        $this->db->where('md.drug_category_id = dc.id');
        $this->db->where('md.manu_id = a.id');
        $query = $this->db->get();
        return $query->result_array();

    }

    function load_med_registered($med_edit_id){

        $status = 1;
        $this->db->select('md.id drug_id,md.name drug_name,dt.name drug_type,dc.name drug_category,a.name manu_name');
        $this->db->from('tbl_medical_drug md,tbl_drug_type dt,tbl_drug_category dc,tbl_psc_actors a');
        $this->db->where('md.status = '.$status);
        $this->db->where('a.status = '.$status);
        $this->db->where('dt.status = '.$status);
        $this->db->where('dc.status = '.$status);
        $this->db->where('md.drug_type_id = dt.id');
        $this->db->where('md.drug_category_id = dc.id');
        $this->db->where('md.manu_id = a.id');
        $this->db->where('md.id = '.$med_edit_id);
        $query = $this->db->get();
        return $query->row_array();

    }

    function load_med_edit_categories($med_cat_edit_id){

        $status = 1;
        $this->db->select('id,name,description');
        $this->db->from('tbl_drug_category');
        $this->db->where('status = '.$status);
        $this->db->where('id = '.$med_cat_edit_id);
        $query = $this->db->get();
        return $query->row_array();

    }


    /*
     * ***************************
     *   reader registration
     * **************************
     */
    public function rfid_insert_query($requesting_page){

        if($requesting_page == 'reader_registration'){

            $location_data = array(
                'name' => $this->input->post('location'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'status' => '1',

            );

            $this->db->insert('tbl_location',$location_data);
            $location_id = $this->db->insert_id();

            $reader_data = array(
                'name' => $this->input->post('readername'),
                'vendor' => $this->input->post('vendor'),
                'level_id' => $this->input->post('level'),
                'location_id' => $location_id,
                'status' => '1',

            );

             $this->db->insert('tbl_reader',$reader_data);

        }else if($requesting_page == 'tagging_level'){
            $level_data = array(
                'level_name' => $this->input->post('name'),
                'status' => '1',

            );

             $this->db->insert('tbl_level',$level_data);

        }else if($requesting_page == 'tag_registration'){
            $level_data = array(
                'tag_info' => $this->input->post('tag_info'),
                'vendor' => $this->input->post('vendor'),
                'status' => '1',

            );

            $this->db->insert('tbl_rfid_tag',$level_data);

        }else if($requesting_page == 'privilege'){
            $level_data = array(
                'description' => $this->input->post('privilege'),
                'status' => '1',

            );

            $this->db->insert('tbl_priviledge',$level_data);

        }
    }

    public function select_particular_query($particular_name){

        if($particular_name == 'levels'){
            $status = 1;
            $this->db->select('id, level_name');
            $query = $this->db->get_where('tbl_level', array('status' => $status));
            return $query->result_array();
        }


    }

    function update_entry($requesting_page,$id)
    {

        if($requesting_page == 'reader_registration'){
            $reader_id = $id;
            $location_id = $this->input->post('location_id');

            $location_data = array(
                'name' => $this->input->post('location'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'status' => '1'

            );

            $this->db->update('tbl_location',$location_data,array('id' => $location_id));

            $reader_data = array(
                'name' => $this->input->post('readername'),
                'vendor' => $this->input->post('vendor'),
                'level_id' => $this->input->post('level'),
                'location_id' => $location_id,
                'status' => '1'

            );

            $this->db->update('tbl_reader',$reader_data,array('id' => $reader_id));
        }else if($requesting_page == 'tag_registration'){
            $tag_id = $id;


            $tag_data = array(
                'vendor' => $this->input->post('vendor'),
                'tag_info' => $this->input->post('tag_info'),
                'status' => '1'

            );

            $this->db->update('tbl_rfid_tag',$tag_data,array('id' => $tag_id));
        }else if($requesting_page == 'tagging_level'){
            $level_id = $id;


            $level_data = array(
                'level_name' => $this->input->post('name'),
                'status' => '1'

            );

            $this->db->update('tbl_level',$level_data,array('id' => $level_id));
        }else if($requesting_page == 'privilege'){
            $privilege_id = $id;


            $tag_data = array(
                'description' => $this->input->post('privilege'),
                'status' => '1'

            );

            $this->db->update('tbl_priviledge',$tag_data,array('id' => $privilege_id));
        }


    }

    public function delete_query($requesting_page,$id){

        if ($requesting_page == 'reader_registration'){
            $this->status   = 0;
            $this->db->update('tbl_reader', $this, array('id' => $id));
        }

    }

    public function select_query_specific($requesting_page,$id){

        if ($requesting_page == 'reader_registration'){

            $status = 1;
            $this->db->select('tbl_reader.id,tbl_reader.name as reader_name,tbl_reader.vendor,tbl_location.id as location_id,tbl_location.name as location_name,tbl_location.latitude,tbl_location.longitude,tbl_level.level_name');
            $this->db->from('tbl_reader');
            $this->db->where('tbl_reader.status',$status);
            $this->db->where('tbl_reader.id',$id);
            $this->db->join('tbl_location', 'tbl_location.id = tbl_reader.location_id');
            $this->db->join('tbl_level', 'tbl_level.id = tbl_reader.level_id');
            $query = $this->db->get();
            return $query->row_array();
        }else if ($requesting_page == 'privilege'){
            $status = 1;
            $this->db->select('*');
            $this->db->from('tbl_priviledge');
            $this->db->where('status',$status);
            $this->db->where('id',$id);
            $query = $this->db->get();
            return $query->row_array();
        }else if ($requesting_page == 'tag_registration'){
            $status = 1;
            $this->db->select('*');
            $this->db->from('tbl_rfid_tag');
            $this->db->where('status',$status);
            $this->db->where('id',$id);
            $query = $this->db->get();
            return $query->row_array();
        }else if ($requesting_page == 'tagging_level'){
            $status = 1;
            $this->db->select('*');
            $this->db->from('tbl_level');
            $this->db->where('status',$status);
            $this->db->where('id',$id);
            $query = $this->db->get();
            return $query->row_array();
        }


    }

    public function select_query($form_name){

        if($form_name == 'reader_registration'){
            $status = 1;
            $this->db->select('tbl_reader.id,tbl_reader.name as reader_name,tbl_reader.vendor,tbl_location.name as location_name,tbl_level.level_name');
            $this->db->from('tbl_reader');
            $this->db->where('tbl_reader.status',$status);
            $this->db->join('tbl_location', 'tbl_location.id = tbl_reader.location_id');
            $this->db->join('tbl_level', 'tbl_level.id = tbl_reader.level_id');

            $query = $this->db->get();
            return $query->result_array();

        } else if ($form_name == 'user_registration_tabs_names'){
            $slug = 1;
            $query = $this->db->get_where('tbl_priviledge', array('status' => $slug));
            return $query->result_array();
        }else if($form_name == 'tag_registration'){
            $status = 1;
            $query = $this->db->get_where('tbl_rfid_tag', array('status' => $status));
            return $query->result_array();

        }else if($form_name == 'tagging_level'){
            $status = 1;
            $query = $this->db->get_where('tbl_level', array('status' => $status));
            return $query->result_array();

        }else if($form_name == 'privilege'){
            $status = 1;
            $query = $this->db->get_where('tbl_priviledge', array('status' => $status));
            return $query->result_array();
        }

    }

}

?>
<?php
/**
 *This Model is used by the Home Controller to get userdetails and authors need for the adminpage
 */
class home_model extends CI_Model
{
    /**This functions gets the details of the a user
     *@param The userid
     *@return Userdetails as an array ff
     * test
     */
    public function get_userdetails($userid){
        $this->load->database();
        $sql = "SELECT * FROM users  WHERE user_id=?";
        $query=$this->db->query($sql, $userid);
        $userdetails = $query->row_array();
        $this->db->close();
        return $userdetails;
    }

    /**This functions gets the details of the all the authors
     *@return All Authors as arrays
     */
    public function get_all_authors(){
        $this->load->database();
        $sql = "SELECT * FROM authors";
        $query=$this->db->query($sql);
        $row = $query->result_array();
        $this->db->close();
        return $row;
    }
}

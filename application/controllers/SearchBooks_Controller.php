<?php
/**
 * This Controller Loads the SearchBooks Page
 */
class SearchBooks_Controller extends CI_Controller
{
    /**Default Controller method*/
    function index()
    {
        //resumes session
        session_start();
        //loads SearchBooks Page
        $this->load->View("SearchBooks");
    }
}

<?php

class Rules extends MY_User_Controller{


    function __construct()
    {
        parent::__construct();
        $this->bc['League'] = "";
        $this->bc['Rules'] = "";
    }


    public function index()
    {
        $this->user_view('user/league/rules');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "core/MY_Controller.php";

class SettingsController extends MY_Controller
{
    private $request, $response;

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->admin_dashboard('flows/home', $this->data);
    }
    public function localization(){
        $this->load->admin_dashboard('settings/localization', $this->data);
    }
}

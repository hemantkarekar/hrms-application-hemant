<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once (APPPATH . 'core/MY_Controller.php');
class OnboardingController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->onboarding_view('index');
    }
}

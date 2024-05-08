<?php namespace NielsVanDenDries\TripRegistration\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class TripRegistration extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'user', 
        'manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.TripRegistration', 'main-menu-item-tripreg');
    }

}

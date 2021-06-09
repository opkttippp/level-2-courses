<?php


namespace app\controller;

use app\core\Controller;

class ProfileController extends Controller
{
    public function editAction()
    {
        $this->view->render('edit');
    }
}

<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\CorretorHandler;

class HomeController extends Controller
{
    public $msg;

    public function __construct()
    {
        $this->msg = $_SESSION['feedback'];
    }

    public function index($args = [])
    {
        $_SESSION['feedback'] = '';

        $data = CorretorHandler::getAll();
        $c = [];
        $corretor = [];

        if (!empty($args['id'])) {
            $c = CorretorHandler::getOne($args['id']);
            if (!$c) {
                $this->redirect('/');
            }
            foreach ($c as $item) {
                $corretor = $item;
            }
        }
        
        $this->render('home', [
            'data' => $data,
            'corretor' => $corretor,
            'msg' => $this->msg
        ]);
        
    }
}
?>

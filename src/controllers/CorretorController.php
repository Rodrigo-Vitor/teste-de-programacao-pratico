<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\CorretorHandler;
use src\models\Corretor;

class CorretorController extends Controller
{
    public function add()
    {
        $cpf = filter_input(INPUT_POST, 'cpf');
        $creci = filter_input(INPUT_POST, 'creci');
        $name = filter_input(INPUT_POST, 'name');

        if ($cpf && $creci && $name) {
            $res = CorretorHandler::cpfExists($cpf);
            if ($res === false) {
                CorretorHandler::add($cpf, $creci, $name);
                $this->redirect('/');
            } else {
                $this->redirect('/');
            }
        } else {
            $this->redirect('/');
        }
    }
    
    public function edit($args)
    {
        $cpf = filter_input(INPUT_POST, 'cpf');
        $creci = filter_input(INPUT_POST, 'creci');
        $name = filter_input(INPUT_POST, 'name');

        if ($cpf && $creci && $name) {
            $res = CorretorHandler::idExists($args['id']);
            if ($res === true) {
                CorretorHandler::edit($args['id'], $cpf, $creci, $name);
                $this->redirect('/');
            }
        } else {
            $this->redirect('/' . $args['id']);
        }
    }

    public function delete($args) {
        $res = CorretorHandler::idExists($args['id']);
        if($res) {
            CorretorHandler::delete($args['id']);
            $this->redirect('/');
        } else {
            $this->redirect('/');
        }
    }
}

<?php 
namespace src\handlers;

use src\models\Corretor;

class CorretorHandler {
    public static function cpfExists($cpf) {
        $data = Corretor::select()->where('cpf', $cpf)->get();
        if(count($data) > 0)
        {
            return $data;
        } else {
            return false;
        }
    }

    public static function add($cpf, $creci, $name) {
        $data = Corretor::insert([
            'cpf' => $cpf,
            'creci' => $creci,
            'name' => $name
        ])->execute();
        $_SESSION['feedback'] = "Registrado com sucesso";
    }

    public static function getAll() {
        $data = Corretor::select()->get();
        $corretors = [];
        foreach($data as $item) {
            $corretor = new Corretor();
            $corretor->id = $item['id'];
            $corretor->cpf = $item['cpf'];
            $corretor->creci = $item['creci'];
            $corretor->name = $item['name'];

            $corretors[] = $corretor;
        }
        return $corretors;
    }

    public static function getOne($id) {
        $data = Corretor::select()->where('id', $id)->one();
        if(!empty($data)) {
            $corretor = [];
            
            $newCorretor = new Corretor();
            $newCorretor->id = $data['id'];
            $newCorretor->name = $data['name'];
            $newCorretor->cpf = $data['cpf'];
            $newCorretor->creci = $data['creci'];

            $corretor[] = $newCorretor;
            return $corretor;
        } else {
            return false;
        }
    }

    public static function idExists($id) {
        $data = Corretor::select()->where('id', $id)->one();
        return !empty($data) ? true : false;
    }

    public static function delete($id) {
        Corretor::delete()->where('id', $id)->execute();
        $_SESSION['feedback'] = "Excluido com sucesso";
    }
    
    public static function edit($id, $cpf, $creci, $name) {
        Corretor::update()
            ->set('cpf', $cpf)
            ->set('creci', $creci)
            ->set('name', $name)
            ->where('id', $id)
        ->execute();
        $_SESSION['feedback'] = "Editado com sucesso";
    }
}
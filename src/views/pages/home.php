<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Pratico</title>
    <link rel="stylesheet" href="<?=$base?>/css/index.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Corretor</h1>
        <span><?=(!empty($msg) ? $msg : '')?></span>
        <form action="<?=(empty($corretor) ? $base.'/add' : $base.'/editar/'.$corretor->id)?>" method="POST" class="container-form">
            <div class="container-form-col">
                <input 
                    class="container-form-col-input-cpf" 
                    type="text" 
                    name="cpf" 
                    placeholder="Digite seu CPF" 
                    id="cpf" minlength="11" maxlength="11"
                    value="<?=(!empty($corretor) ? $corretor->cpf : '')?>"
                >
                <input 
                    class="container-form-col-input-cresci" 
                    type="text" 
                    name="creci" 
                    placeholder="Digite seu Cresci"
                    minlength="2"
                    value="<?=(!empty($corretor) ? $corretor->creci : '')?>"
                >
            </div>
            <div class="container-form-col">
                <input 
                    class="container-form-col-input-name" 
                    type="text" 
                    name="name" 
                    placeholder="Digite seu nome"
                    minlength="2" 
                    value="<?=(!empty($corretor) ? $corretor->name : '')?>"
                >
            </div>
            <div class="container-form-col">
                <input class="container-form-col-input-submit" type="submit" value="<?=(!empty($corretor) ? 'Editar' : 'Enviar')?>">
            </div>
        </form>

        <?=$render('table', ['data' => $data]) ?>
    </div>
</body>
</html>

<script src="https://unpkg.com/imask"></script>
    <script>
        IMask(
            document.getElementById('cpf'),
            {
                mask:'00000000000'
            }
        )
</script>
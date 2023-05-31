## Teste Teste de Programação Prático
* Crie uma página HTML com formulário cujo campos: CPF, Creci e Nome e um botão “Enviar”
* Fazer validações do formulário do jeito que achar melhor, seja usando HTML5 ou JavaScript. Sendo obrigatório que o CPF tenha 11 caracteres, Creci e Nome tenha pelo
menos 2 caracteres
* Crie um banco de dados com uma tabela chamada “corretores” para cadastrar os dados
abaixo, com os campos: id, nome, cpf, creci
* Grave os dados ao enviar o formulário, após ser cadastrado redirecione para a tela do
formulário novamente com ele limpo.
* Fazer os dados da tabela corretores aparecerem em uma tabela abaixo do formulário.
* Dentro da tabela, apresente um botão de Editar e Excluir, para cada registro
* Fazer uma função de Excluir um registro.

<hr>

## Instalação
Você pode clonar este repositório OU baixar o .zip

Ao descompactar, é necessário rodar o **composer** pra instalar as dependências e gerar o *autoload*.

Vá até a pasta do projeto, pelo *prompt/terminal* e execute:
> composer install

Depois é só aguardar.

## Configuração
Todos os arquivos de **configuração** e aplicação estão dentro da pasta *src*.

As configurações de Banco de Dados e URL estão no arquivo *src/Config.php*

É importante configurar corretamente a constante *BASE_DIR*:
> const BASE_DIR = '/**PastaDoProjeto**/public';

## Uso
Você deve acessar a pasta *public* do projeto.

O ideal é criar um ***alias*** específico no servidor que direcione diretamente para a pasta *public*.

## Modelo de MODEL
```php
<?php
namespace src\models;
use \core\Model;

class Corretor extends Model {

}
```"# teste-de-programacao-pratico" 

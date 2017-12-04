<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['default_controller'] = 'aluno/auth';
$route['aluno/cadastro'] = 'aluno/cadastrar';
$route['post/cadastrarAula'] = 'post/cadastrarAula';
$route['logout'] = 'aluno/sair';
$route['excluirConta'] = 'aluno/excluir';

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'loginController';

$route['cadastro'] = 'LoginController/go_cadastro';
$route['login'] = 'LoginController/index';
$route['cadastrar'] = 'CadastroController/cadastrar_usuario';
$route['logar'] = 'LoginController/logar';
$route['verificar_login'] = 'LoginController/verificar_login';
$route['verificar_email'] = 'CadastroController/verificar_email';
$route['listar_estados'] = 'HomeController/listar_estados';
$route['cidades_por_estado'] = 'HomeController/listar_cidades';
$route['concluir_cadastro'] = 'HomeController/concluir_cadastro';
$route['enviar_email'] = 'LoginController/enviar_email';
$route['home'] = 'HomeController/home';
$route['meu_perfil'] = 'IndexController/go_meu_perfil';
$route['alterar_perfil'] = 'PerfilController/alterar_perfil';
$route['add_excursao'] = 'IndexController/go_add_excursao';
$route['buscar_excursoes'] = 'IndexController/go_buscar_excursoes';
$route['pesquisar_excursoes'] = 'BuscarExcursoesController/pesquisar_excursoes';
$route['criar_excursao'] = 'AddExcursaoController/criar_excursao';
$route['ver_detalhes_excursao/(:any)'] = 'BuscarExcursoesController/ver_detalhes_excursao/$1';
$route['inscrever_se'] = 'DetalhesExcursaoController/inscrever_se';
$route['cancelar_inscricao'] = 'DetalhesExcursaoController/cancelar_inscricao';
$route['confirmar_inscricao'] = 'DetalhesExcursaoController/confirmar_inscricao';
$route['pagseguro'] = 'PagSeguroController/abrir_pagamento';
$route['verificar_pagamento'] = 'PagSeguroController/verificar_pagamento';
$route['deletar_pagamento'] = 'PagSeguroController/deletar_pagamento';
$route['permission'] = 'PagSeguroController/permission';
$route['autorizar'] = 'PagSeguroController/autorizar';
$route['solicitar_autorizacao'] = 'PagSeguroController/solicita_autorizacao';
$route['verificar_autorizacao'] = 'DetalhesExcursaoController/verificar_autorizacao';
$route['manter_autorizacao'] = 'DetalhesExcursaoController/manter_autorizacao';
$route['notificar_autorizacao'] = 'PagSeguroController/notificar_autorizacao';
$route['alterar_excursao'] = 'DetalhesExcursaoController/alterar_excursao';
$route['editar_excursao'] = 'AlterarExcursaoController/editar_excursao';
$route['confirmar_inscricao'] = 'VerInscritosController/confirmar_inscricao';
$route['ver_inscritos'] = 'DetalhesExcursaoController/ver_inscritos';
$route['cancelar_inscricao_conf'] = 'VerInscritosController/cancelar_inscricao';
$route['minhas_excursoes'] = 'IndexController/go_minhas_excursoes';
$route['logout'] = 'IndexController/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

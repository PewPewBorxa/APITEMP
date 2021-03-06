<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'add_categoria' => [[], ['_controller' => 'App\\Controller\\CategoriasController::add'], [], [['text', '/api/addCategoria']], [], []],
    'get_one_categoria' => [['id'], ['_controller' => 'App\\Controller\\CategoriasController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/categoria']], [], []],
    'get_all_categorias' => [[], ['_controller' => 'App\\Controller\\CategoriasController::getAll'], [], [['text', '/api/categorias']], [], []],
    'update_categoria' => [['id'], ['_controller' => 'App\\Controller\\CategoriasController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/categoria']], [], []],
    'delete_categoria' => [['id'], ['_controller' => 'App\\Controller\\CategoriasController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/categoria']], [], []],
    'add_empresa' => [[], ['_controller' => 'App\\Controller\\EmpresaController::add'], [], [['text', '/api/addEmpresa']], [], []],
    'get_one_empresa' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/empresa']], [], []],
    'get_all_empresas' => [[], ['_controller' => 'App\\Controller\\EmpresaController::getAll'], [], [['text', '/api/empresas']], [], []],
    'update_empresa' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/empresa']], [], []],
    'delete_empresa' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/empresa']], [], []],
    'get_one_empresa_by_userId' => [['id'], ['_controller' => 'App\\Controller\\EmpresaController::getByUID'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/empresaUser']], [], []],
    'add_mensaje' => [[], ['_controller' => 'App\\Controller\\MensajesController::add'], [], [['text', '/api/addMensaje']], [], []],
    'get_one_mensaje' => [['id'], ['_controller' => 'App\\Controller\\MensajesController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/mensaje']], [], []],
    'get_all_mensajes' => [[], ['_controller' => 'App\\Controller\\MensajesController::getAll'], [], [['text', '/api/mensaje']], [], []],
    'update_mensaje' => [['id'], ['_controller' => 'App\\Controller\\MensajesController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/mensaje']], [], []],
    'delete_mensaje' => [['id'], ['_controller' => 'App\\Controller\\MensajesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/mensaje']], [], []],
    'add_Product' => [[], ['_controller' => 'App\\Controller\\ProductosController::add'], [], [['text', '/api/addProduct']], [], []],
    'get_one_product' => [['id'], ['_controller' => 'App\\Controller\\ProductosController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/product']], [], []],
    'get_all_products' => [[], ['_controller' => 'App\\Controller\\ProductosController::getAll'], [], [['text', '/api/product']], [], []],
    'update_product' => [['id'], ['_controller' => 'App\\Controller\\ProductosController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/product']], [], []],
    'delete_product' => [['id'], ['_controller' => 'App\\Controller\\ProductosController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/product']], [], []],
    'get_msg_between_contacts' => [['categoria'], ['_controller' => 'App\\Controller\\ProductosController::getByCategoria'], [], [['variable', '/', '[^/]++', 'categoria', true], ['text', '/api/product']], [], []],
    'get_one_subcategoria' => [['id'], ['_controller' => 'App\\Controller\\SubcategoriasController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/subcategoria']], [], []],
    'get_all_subcategorias' => [[], ['_controller' => 'App\\Controller\\SubcategoriasController::getAll'], [], [['text', '/api/subcategorias']], [], []],
    'get_one_subcategoria_by_idCategoria' => [['id'], ['_controller' => 'App\\Controller\\SubcategoriasController::getByCat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/subcategorias']], [], []],
    'add_user' => [[], ['_controller' => 'App\\Controller\\UserController::add'], [], [['text', '/api/addUser']], [], []],
    'get_one_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/user']], [], []],
    'get_all_users' => [[], ['_controller' => 'App\\Controller\\UserController::getAll'], [], [['text', '/api/user']], [], []],
    'update_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/user']], [], []],
    'delete_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/user']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
];

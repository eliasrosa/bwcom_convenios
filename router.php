<?
defined('BW') or die("Acesso negado!");

// ADM
bwRouter::addUrl('/convenios');
bwRouter::addUrl('/convenios/task', array('type' => 'task'));
bwRouter::addUrl('/convenios/lista');
bwRouter::addUrl('/convenios/cadastro/:id', array('fields' => array('id')));
bwRouter::addUrl('/convenios/cidades/lista');
bwRouter::addUrl('/convenios/cidades/cadastro/:id', array('fields' => array('id')));

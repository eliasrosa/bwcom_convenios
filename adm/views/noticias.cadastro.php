<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);

$id = bwRequest::getVar('id', 0, 'get');
$i = bwComponent::openById('Noticia', $id);

$form = new bwForm($i);
$form->addH2('Dados da notícia');
$form->addInputID();
$form->addInputDataHora('datahora');
$form->addInput('titulo');
$form->addSelectDB('idcategoria', 'NoticiaCategoria');
$form->addTextArea('resumo');
$form->addEditorHTML('texto');
$form->addStatus();
$form->addInputFileImg();

$form->addBottonSalvar('noticiaSave');
$form->addBottonRemover('noticiaRemover');
$form->show();
?>

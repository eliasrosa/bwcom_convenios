<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(1);

$id = bwRequest::getVar('id', 0, 'get');
$i = bwComponent::openById('NoticiaCategoria', $id);

$form = new bwForm($i);
$form->addH2('Dados da categoria');
$form->addInputID();
$form->addInput('nome');
$form->addTextArea('descricao');
$form->addStatus();

$form->addBottonSalvar('categoriaSave');
$form->addBottonRemover('categoriaRemover');
$form->show();

?>
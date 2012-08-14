<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(1);

$id = bwRequest::getInt('id');
$i = bwComponent::openById('ConvenioCidade', $id);

$form = new bwForm($i, bwRouter::_('/convenios/task'));
$form->addH2('Dados da cidade');
$form->addInputID();
$form->addInput('nome');
$form->addTextArea('descricao');
$form->addStatus();

$form->addBottonSalvar('cidadeSave');
$form->addBottonRemover('cidadeRemover');
$form->show();

?>

<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(1);

$id = bwRequest::getVar('id', 0, 'get');
$i = bwComponent::openById('ConvenioCidade', $id);

$form = new bwForm($i);
$form->addH2('Dados da cidade');
$form->addInputID();
$form->addInput('nome');
$form->addTextArea('descricao');
$form->addStatus();

$form->addBottonSalvar('cidadeSave');
$form->addBottonRemover('cidadeRemover');
$form->show();

?>

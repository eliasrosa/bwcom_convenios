<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);

$id = bwRequest::getVar('id', 0, 'get');
$i = bwComponent::openById('Convenio', $id);

$form = new bwForm($i);
$form->addH2('Dados do convênio');
$form->addInputID();
$form->addSelectDB('cidade_id', 'ConvenioCidade');
$form->addInput('segmento');
$form->addInput('nome');
$form->addInput('desconto');
$form->addInput('condicao');
$form->addStatus();

$form->addBottonSalvar('convenioSave');
$form->addBottonRemover('convenioRemover');
$form->show();
?>

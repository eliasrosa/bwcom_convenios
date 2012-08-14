<?
defined('BW') or die("Acesso negado!");

$task = bwRequest::getVar('task');

// CONVENIOS
/////////////////////////////////////////////////////////////

if ($task == 'convenioSave')
{
    $r = Convenio::salvar(bwRequest::getVar('dados', array()));        
}

if ($task == 'convenioRemover')
{
    $r = Convenio::remover(bwRequest::getVar('dados', array()));
    $r['redirect'] = bwRouter::_("/convenios/lista");
}




// CIDADES
/////////////////////////////////////////////////////////////

if ($task == 'cidadeSave')
{
    $r = ConvenioCidade::salvar(bwRequest::getVar('dados', array()));
}

if ($task == 'cidadeRemover')
{
    $r = ConvenioCidade::remover(bwRequest::getVar('dados', array()));
    $r['redirect'] = bwRouter::_("/convenios/cidades/lista");
}

die(json_encode($r));
?>

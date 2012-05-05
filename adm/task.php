<?
defined('BW') or die("Acesso negado!");

$dados = bwRequest::getVar('dados', array(), 'post');


// CONVENIOS
/////////////////////////////////////////////////////////////

if ($task == 'convenioSave')
{
    $r = Convenio::salvar($dados);        
}

if ($task == 'convenioRemover')
{
    $r = Convenio::remover($dados);
    $r['redirect'] = bwRouter::_("adm.php?com=convenios&view=lista");
}




// CIDADES
/////////////////////////////////////////////////////////////

if ($task == 'cidadeSave')
{
    $r = ConvenioCidade::salvar($dados);
}

if ($task == 'cidadeRemover')
{
    $r = ConvenioCidade::remover($dados);
    $r['redirect'] = bwRouter::_("adm.php?com=convenios&sub=cidades&view=lista");
}

die(json_encode($r));
?>

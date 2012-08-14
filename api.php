<?
defined('BW') or die("Acesso negado!");

class bwConvenios extends bwComponent
{
    // variaveis obrigatórias
    var $id = 'convenios';
    var $nome = 'Convênios';
    var $adm_visivel = true;
    
    
    // getInstance
    function getInstance($class = false)
    {
        $class = $class ? $class : __CLASS__;
        return bwObject::getInstance($class);
    }
}
?>

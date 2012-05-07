<?
defined('BW') or die("Acesso negado!");

$tituloPage = "Administração de Convénios";

$menu = array(
    '0' => array(
        'url' => 'adm.php?com=convenios&view=lista',
        'tit' => 'Convênios'
    ),
    '1' => array(
        'url' => 'adm.php?com=convenios&sub=cidades&view=lista',
        'tit' => 'Cidades'
    )
);

?>

-- <? defined('BW') or die("Acesso negado!"); ?>


-- 
ALTER TABLE `bw_versao` ADD `com_convenios_1` INT(1) NOT NULL;


--
CREATE TABLE IF NOT EXISTS `bw_convenios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cidade_id` int(11) NOT NULL,
  `segmento` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `desconto` varchar(255) NOT NULL,
  `condicao` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


--
CREATE TABLE `bw_convenios_cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` longtext,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


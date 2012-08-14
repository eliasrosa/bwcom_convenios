<?
defined('BW') or die("Acesso negado!");

echo bwAdm::createHtmlSubMenu(0);
echo bwButton::redirect('Criar novo convênio', '/convenios/cadastro/0');

class bwGridConvenios extends bwGrid
{
    function __construct()
    {
        parent::__construct(
            Doctrine_Query::create()
                ->from('Convenio n')
                ->leftJoin('n.Cidade c')        
        );
        
        $this->addCol('ID', 'n.id', 'tac', 50);
        $this->addCol('Nome', 'n.nome');
        $this->addCol('Cidade', 'c.nome', NULL, 300);
        $this->addCol('Status', 'n.status', 'tac', 25);    
    }

    function col0($i)
    {
        return '<a href="' . $i->getUrl('/convenios/cadastro') . '">'.$i->id.'</a>';
    }

    function col1($i)
    {
        return $i->nome;
    }

    function col2($i)
    {
        return $i->Cidade->nome;
    }

    function col3($i)
    {
        return bwAdm::getImgStatus($i->status);
    }
    
}

$a = new bwGridConvenios();
$a->show();

?>

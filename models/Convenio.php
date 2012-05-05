<?php

class Convenio extends bwRecord
{
    var $labels = array(
        'cidade_id' => 'Cidade',
        'segmento' => 'Segmento',
        'nome' => 'Nome',
        'desconto' => 'Desconto',
        'condicao' => 'Condição'
    );

    public function setTableDefinition()
    {
        $this->setTableName('bw_convenios');
        $this->hasColumn('id', 'integer', 4, array(
            'type' => 'integer',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => true,
            'autoincrement' => true,
        ));
        $this->hasColumn('cidade_id', 'integer', 4, array(
            'type' => 'integer',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => false,
            'autoincrement' => false,
            'integer' => true,
        ));
        $this->hasColumn('segmento', 'string', 255, array(
            'type' => 'string',
            'length' => 255,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notblank' => true,
            'autoincrement' => false,
        ));
        $this->hasColumn('nome', 'string', 255, array(
            'type' => 'string',
            'length' => 255,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notblank' => true,
            'autoincrement' => false,
        ));
        $this->hasColumn('desconto', 'string', 255, array(
            'type' => 'string',
            'length' => 255,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notblank' => true,
            'autoincrement' => false,
        ));
        $this->hasColumn('condicao', 'string', 255, array(
            'type' => 'string',
            'length' => 255,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notblank' => true,
            'autoincrement' => false,
        ));
        $this->hasColumn('status', 'integer', 4, array(
            'type' => 'integer',
            'length' => 4,
            'fixed' => false,
            'unsigned' => false,
            'primary' => false,
            'notnull' => true,
            'autoincrement' => false,
        ));
    }

    public function setUp()
    {
        parent::setUp();

        $this->hasOne('ConvenioCidade as Cidade', array(
            'local' => 'cidade_id',
            'foreign' => 'id'
        ));
    }
    
    public function salvar($dados)
    {
        $db = bwComponent::save('Convenio', $dados);
        $r = bwComponent::retorno($db);

        return $r;
    }

    public function remover($dados)
    {
        $db = bwComponent::remover('Convenio', $dados);
        $r = bwComponent::retorno($db);

        return $r;
    }

}

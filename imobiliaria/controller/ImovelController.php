<?php
require_once 'model/Imovel.php';

class ImovelController{
    public function salvar(){
        $imovel = new Imovel;
        $imovel->setId($_POST['id']);
        $imovel->setDescricao($_POST['descricao']);
        $imovel->setValor($_POST['valor']);
        $imovel->setTipo($_POST['tipo']);

        $imovel->save();
    }
    public function listar(){
        $imovel = new Imovel();
        return $imovel->listAll();
    }
    public static function editar($id)
    {
        $imovel = new Imovel;
        $imovel = $imovel->find($id);
        return $imovel;
    }
    public static function excluir($id)
    {
        $imovel = new Imovel;
        $imovel = $imovel->remove($id);
    }
}
?>
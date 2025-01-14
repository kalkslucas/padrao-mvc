<?php

namespace App\Models;

use MF\Model\Model;
use PDO;

class Produto extends Model
{
  public function getProdutos()
  {
    $query = "SELECT id, descricao, preco FROM tb_produtos";
    return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
  }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
  public function up()
    {
    $this->forge->addField([
        'id'           => ['type' => 'INT', 'auto_increment' => true],
        'nama_produk'  => ['type' => 'VARCHAR', 'constraint' => 100],
        'kategori'     => ['type' => 'VARCHAR', 'constraint' => 50],
        'harga'        => ['type' => 'INT'],
        'deskripsi'    => ['type' => 'TEXT'],
        'gambar'       => ['type' => 'VARCHAR', 'constraint' => 255],
        'created_at'   => ['type' => 'DATETIME', 'null' => true],
        'updated_at'   => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('products');
    }

    public function down()
    {
        //
    }
}

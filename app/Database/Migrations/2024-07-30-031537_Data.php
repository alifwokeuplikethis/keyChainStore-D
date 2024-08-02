<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11, 
                'auto_increment' => true,
            ],
            'nm_produk' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'id_produk' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'users' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'kuantitas' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'harga' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('data');
    }

    public function down()
    {
        $this->forge->dropTable('data');
    }
}

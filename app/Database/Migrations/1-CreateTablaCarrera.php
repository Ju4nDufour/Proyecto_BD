<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablaCarrera extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_carrera' => ['type'=>'BIGINT','unsigned'=>true,'auto_increment'=>true],
            'nombre'     => ['type'=>'VARCHAR','constraint'=>120],
            'codigo'     => ['type'=>'VARCHAR','constraint'=>20],
        ]);
        $this->forge->addKey('id_carrera', true);
        $this->forge->addUniqueKey('codigo');
        $this->forge->createTable('carrera', true, ['ENGINE'=>'InnoDB']);
    }
    public function down()
    {
        $this->forge->dropTable('carrera', true);
    }
}

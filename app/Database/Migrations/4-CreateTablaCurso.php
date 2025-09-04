<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablaCurso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_curso'   => ['type'=>'BIGINT','unsigned'=>true,'auto_increment'=>true],
            'nombre'     => ['type'=>'VARCHAR','constraint'=>120],
            'codigo'     => ['type'=>'VARCHAR','constraint'=>20],
            'id_carrera' => ['type'=>'BIGINT','unsigned'=>true],
            'id_profesor'=> ['type'=>'BIGINT','unsigned'=>true,'null'=>true], // opcional
        ]);
        $this->forge->addKey('id_curso', true);
        $this->forge->addUniqueKey('codigo');
        $this->forge->addForeignKey('id_carrera','carrera','id_carrera','RESTRICT','CASCADE');
        $this->forge->addForeignKey('id_profesor','profesor','id_profesor','SET NULL','CASCADE');
        $this->forge->createTable('curso', true, ['ENGINE'=>'InnoDB']);
    }
    public function down()
    {
        $this->forge->dropTable('curso', true);
    }
}

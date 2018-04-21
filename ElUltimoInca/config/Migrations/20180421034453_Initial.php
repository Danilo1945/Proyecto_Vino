<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('administrador', ['id' => false, 'primary_key' => ['id_adm']])
            ->addColumn('id_adm', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('usuario_adm', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('contrasenia_adm', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('administrador');
    }
}

<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('administrador', ['id' => false, 'primary_key' => ['Idadministrador']])
            ->addColumn('Idadministrador', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Usuario', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('Contrasena', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('Rol', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->create();

        $this->table('articulo_empresa', ['id' => false, 'primary_key' => ['Idarticulo']])
            ->addColumn('Idarticulo', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Nombre', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('Idcategoria', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addIndex(
                [
                    'Idcategoria',
                ]
            )
            ->create();

        $this->table('categoria', ['id' => false, 'primary_key' => ['Idcategoria']])
            ->addColumn('Idcategoria', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Nombre', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('Tipo', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->create();

        $this->table('cliente', ['id' => false, 'primary_key' => ['Idcliente']])
            ->addColumn('Idcliente', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('Nombre', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Telofono', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Direccion', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Usuario', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Contraseña', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->create();

        $this->table('item', ['id' => false, 'primary_key' => ['Iditem']])
            ->addColumn('Iditem', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Idventa', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Idproducto_terminado', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addIndex(
                [
                    'Idproducto_terminado',
                ]
            )
            ->addIndex(
                [
                    'Idventa',
                ]
            )
            ->create();

        $this->table('materia_prima', ['id' => false, 'primary_key' => ['IdMateria_prima']])
            ->addColumn('IdMateria_prima', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Nombre', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('pedido', ['id' => false, 'primary_key' => ['Idpedido']])
            ->addColumn('Idpedido', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('Fecha', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('Cantidad', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('Reporte', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Idcliente', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('Idproducto_terminado', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addIndex(
                [
                    'Idcliente',
                ]
            )
            ->addIndex(
                [
                    'Idproducto_terminado',
                ]
            )
            ->create();

        $this->table('producto_terminado', ['id' => false, 'primary_key' => ['Idproducto_terminado']])
            ->addColumn('Idproducto_terminado', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Nombre', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Cantidad', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->create();

        $this->table('proveedor', ['id' => false, 'primary_key' => ['Idproveedor']])
            ->addColumn('Idproveedor', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Empresa', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('Nombre', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('Telefono', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('Reporte', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('proveedor_materiaprima', ['id' => false, 'primary_key' => ['IdProveedor_MateriaPrima']])
            ->addColumn('IdProveedor_MateriaPrima', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('Idproveedor', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('IdMateria_prima', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addIndex(
                [
                    'IdMateria_prima',
                ]
            )
            ->addIndex(
                [
                    'Idproveedor',
                ]
            )
            ->create();

        $this->table('venta', ['id' => false, 'primary_key' => ['Idventa']])
            ->addColumn('Idventa', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Numero', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Fecha', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('Cantidad', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('Idproducto_terminado', 'integer', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Idcliente', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addIndex(
                [
                    'Idproducto_terminado',
                ]
            )
            ->create();

        $this->table('articulo_empresa')
            ->addForeignKey(
                'Idcategoria',
                'categoria',
                'Idcategoria',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('item')
            ->addForeignKey(
                'Idproducto_terminado',
                'producto_terminado',
                'Idproducto_terminado',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'Idventa',
                'venta',
                'Idventa',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('pedido')
            ->addForeignKey(
                'Idcliente',
                'cliente',
                'Idcliente',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'Idproducto_terminado',
                'producto_terminado',
                'Idproducto_terminado',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('proveedor_materiaprima')
            ->addForeignKey(
                'IdMateria_prima',
                'materia_prima',
                'IdMateria_prima',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'Idproveedor',
                'proveedor',
                'Idproveedor',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('articulo_empresa')
            ->dropForeignKey(
                'Idcategoria'
            );

        $this->table('item')
            ->dropForeignKey(
                'Idproducto_terminado'
            )
            ->dropForeignKey(
                'Idventa'
            );

        $this->table('pedido')
            ->dropForeignKey(
                'Idcliente'
            )
            ->dropForeignKey(
                'Idproducto_terminado'
            );

        $this->table('proveedor_materiaprima')
            ->dropForeignKey(
                'IdMateria_prima'
            )
            ->dropForeignKey(
                'Idproveedor'
            );

        $this->dropTable('administrador');
        $this->dropTable('articulo_empresa');
        $this->dropTable('categoria');
        $this->dropTable('cliente');
        $this->dropTable('item');
        $this->dropTable('materia_prima');
        $this->dropTable('pedido');
        $this->dropTable('producto_terminado');
        $this->dropTable('proveedor');
        $this->dropTable('proveedor_materiaprima');
        $this->dropTable('venta');
    }
}

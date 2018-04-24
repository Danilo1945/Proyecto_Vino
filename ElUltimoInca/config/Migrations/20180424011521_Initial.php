<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('administrador')
            ->addColumn('Cedula', 'string', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('Nombres', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Apellidos', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Telefono', 'string', [
                'default' => null,
                'limit' => 12,
                'null' => true,
            ])
            ->addColumn('Direccion', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('Email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('user', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
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

        $this->table('area_produccion')
            ->addColumn('fecha_elaboracion', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('num_procesos', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('brix_area_pro', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('clase_vino', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('temperatura_vino', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('fecha_control', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('observaciones_area_pro', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('id_uni_medi', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('id_tra', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('id_inv', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'id_inv',
                ]
            )
            ->addIndex(
                [
                    'id_tra',
                ]
            )
            ->addIndex(
                [
                    'id_uni_medi',
                ]
            )
            ->create();

        $this->table('cliente')
            ->addColumn('Cedula', 'string', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('Nombres', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Apellidos', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Telefono', 'string', [
                'default' => null,
                'limit' => 12,
                'null' => true,
            ])
            ->addColumn('Direccion', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('Email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('user', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->create();

        $this->table('compra_mat_pri')
            ->addColumn('fecha_mat', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('precio_u_mat', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('precio_tot_mat', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('observaciones_mat', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('id_pro', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('id_tra', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('id_mat_prim', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'id_mat_prim',
                ]
            )
            ->addIndex(
                [
                    'id_pro',
                ]
            )
            ->addIndex(
                [
                    'id_tra',
                ]
            )
            ->create();

        $this->table('empresa')
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 70,
                'null' => true,
            ])
            ->addColumn('direccion', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->create();

        $this->table('hoja_produccion_vino')
            ->addColumn('fecha_pro', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('id_inv', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('cant_fruta_klg', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('cant_agua_lts', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('cant_azucar_klg', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('cant_levadura_grms', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('numero_procesos', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('observacion_pro', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('id_tra', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'id_inv',
                ]
            )
            ->addIndex(
                [
                    'id_tra',
                ]
            )
            ->create();

        $this->table('inventario_empresa')
            ->addColumn('nombre_art_inv', 'string', [
                'default' => null,
                'limit' => 40,
                'null' => true,
            ])
            ->addColumn('descripcion_inv', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('color_inv', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('id_item', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'id_item',
                ]
            )
            ->create();

        $this->table('item')
            ->addColumn('nom_item', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('detalle_item', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->create();

        $this->table('materia_prima')
            ->addColumn('nombre_mat_pri', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('descripcion_mat_pri', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('unm_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'unm_id',
                ]
            )
            ->create();

        $this->table('pedido')
            ->addColumn('Fecha', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('Cantidad', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('unidad_medida', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('Idcliente', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('id_pro_ter', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'Idcliente',
                ]
            )
            ->addIndex(
                [
                    'id_pro_ter',
                ]
            )
            ->create();

        $this->table('producto_terminado')
            ->addColumn('fecha', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('pasteurizacion', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('fecha_elb', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('lote_pro_ter', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('cantidad_pro_ter', 'string', [
                'default' => null,
                'limit' => 40,
                'null' => true,
            ])
            ->addColumn('valor_cantidad_pro', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('brix', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('valor_etiqueta', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('valor_corcho', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('valor_capuchon', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('num_cinta_sri', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('num_cinta_inca', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('observaciones', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('id_mat_prim', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('id_tra', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'id_mat_prim',
                ]
            )
            ->addIndex(
                [
                    'id_tra',
                ]
            )
            ->create();

        $this->table('proveedor')
            ->addColumn('cedula', 'string', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('nombres_pro', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('apellidos_pro', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('telefono_pro', 'string', [
                'default' => null,
                'limit' => 12,
                'null' => true,
            ])
            ->addColumn('email_pro', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('id_emp', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addIndex(
                [
                    'id_emp',
                ]
            )
            ->create();

        $this->table('salidas')
            ->addColumn('fecha_sal', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('saldo_sal', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('ingreso_sal', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('egreso_sal', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('donacion_sal', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('devolucion_sal', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('saldo_total', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('observaciones_sal', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->create();

        $this->table('socio')
            ->addColumn('cedula', 'string', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('Nombres', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Apellidos', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Telefono', 'string', [
                'default' => null,
                'limit' => 12,
                'null' => true,
            ])
            ->addColumn('Direccion', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('Email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->create();

        $this->table('trabajador')
            ->addColumn('cedula', 'string', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('Nombres_tra', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Apellidos_tra', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('Telefono_tra', 'string', [
                'default' => null,
                'limit' => 12,
                'null' => true,
            ])
            ->addColumn('Direccion_tra', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('Email_tra', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->create();

        $this->table('unidad_medida')
            ->addColumn('nombre_umed', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('detalle_umed', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->create();

        $this->table('venta')
            ->addColumn('fecha_ven', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('id_tra', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('Idcliente', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('id_pro_ter', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('precio_uni', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('precio_total', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('estado_cuenta', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('valor_donacion_vent', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('observaciones_ven', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addIndex(
                [
                    'Idcliente',
                ]
            )
            ->addIndex(
                [
                    'id_pro_ter',
                ]
            )
            ->addIndex(
                [
                    'id_tra',
                ]
            )
            ->create();

        $this->table('area_produccion')
            ->addForeignKey(
                'id_inv',
                'inventario_empresa',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_tra',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_uni_medi',
                'unidad_medida',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('compra_mat_pri')
            ->addForeignKey(
                'id_mat_prim',
                'materia_prima',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_pro',
                'proveedor',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_tra',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('hoja_produccion_vino')
            ->addForeignKey(
                'id_inv',
                'inventario_empresa',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_tra',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('inventario_empresa')
            ->addForeignKey(
                'id_item',
                'item',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('materia_prima')
            ->addForeignKey(
                'unm_id',
                'unidad_medida',
                'id',
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
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_pro_ter',
                'producto_terminado',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('producto_terminado')
            ->addForeignKey(
                'id_mat_prim',
                'materia_prima',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_tra',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('proveedor')
            ->addForeignKey(
                'id_emp',
                'empresa',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('venta')
            ->addForeignKey(
                'Idcliente',
                'cliente',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_pro_ter',
                'producto_terminado',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'id_tra',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('area_produccion')
            ->dropForeignKey(
                'id_inv'
            )
            ->dropForeignKey(
                'id_tra'
            )
            ->dropForeignKey(
                'id_uni_medi'
            );

        $this->table('compra_mat_pri')
            ->dropForeignKey(
                'id_mat_prim'
            )
            ->dropForeignKey(
                'id_pro'
            )
            ->dropForeignKey(
                'id_tra'
            );

        $this->table('hoja_produccion_vino')
            ->dropForeignKey(
                'id_inv'
            )
            ->dropForeignKey(
                'id_tra'
            );

        $this->table('inventario_empresa')
            ->dropForeignKey(
                'id_item'
            );

        $this->table('materia_prima')
            ->dropForeignKey(
                'unm_id'
            );

        $this->table('pedido')
            ->dropForeignKey(
                'Idcliente'
            )
            ->dropForeignKey(
                'id_pro_ter'
            );

        $this->table('producto_terminado')
            ->dropForeignKey(
                'id_mat_prim'
            )
            ->dropForeignKey(
                'id_tra'
            );

        $this->table('proveedor')
            ->dropForeignKey(
                'id_emp'
            );

        $this->table('venta')
            ->dropForeignKey(
                'Idcliente'
            )
            ->dropForeignKey(
                'id_pro_ter'
            )
            ->dropForeignKey(
                'id_tra'
            );

        $this->dropTable('administrador');
        $this->dropTable('area_produccion');
        $this->dropTable('cliente');
        $this->dropTable('compra_mat_pri');
        $this->dropTable('empresa');
        $this->dropTable('hoja_produccion_vino');
        $this->dropTable('inventario_empresa');
        $this->dropTable('item');
        $this->dropTable('materia_prima');
        $this->dropTable('pedido');
        $this->dropTable('producto_terminado');
        $this->dropTable('proveedor');
        $this->dropTable('salidas');
        $this->dropTable('socio');
        $this->dropTable('trabajador');
        $this->dropTable('unidad_medida');
        $this->dropTable('venta');
    }
}

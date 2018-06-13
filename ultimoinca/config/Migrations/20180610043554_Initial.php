<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('area_produccion')
            ->addColumn('fecha_elaboracion', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('inventario_empresa_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('cantidad_litros', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('uni_medida_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('procesos_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('brix_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('clase_vino_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('temperatura_vino', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('fecha_control', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('trabajador_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('observaciones_area_pro', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addIndex(
                [
                    'brix_id',
                ]
            )
            ->addIndex(
                [
                    'clase_vino_id',
                ]
            )
            ->addIndex(
                [
                    'inventario_empresa_id',
                ]
            )
            ->addIndex(
                [
                    'procesos_id',
                ]
            )
            ->addIndex(
                [
                    'trabajador_id',
                ]
            )
            ->addIndex(
                [
                    'uni_medida_id',
                ]
            )
            ->create();

        $this->table('brix')
            ->addColumn('contidad', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('catalogo')
            ->addColumn('Descripcion', 'string', [
                'default' => null,
                'limit' => 300,
                'null' => true,
            ])
            ->addColumn('Imagen', 'binary', [
                'default' => null,
                'limit' => 4294967295,
                'null' => true,
            ])
            ->create();

        $this->table('clase_vino')
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('descripcion', 'string', [
                'default' => null,
                'limit' => 300,
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
            ->addColumn('proveedor_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('trabajador_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('id_mat_prim', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('materia_prima_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('unidad_medida_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'materia_prima_id',
                ]
            )
            ->addIndex(
                [
                    'proveedor_id',
                ]
            )
            ->addIndex(
                [
                    'trabajador_id',
                ]
            )
            ->addIndex(
                [
                    'unidad_medida_id',
                ]
            )
            ->create();

        $this->table('detalle_pedidos')
            ->addColumn('cantidad', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('detalle', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('valor_unitario', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('valor_total', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('pedidos_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('unidad_medida_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('produccion_total_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'pedidos_id',
                ]
            )
            ->addIndex(
                [
                    'produccion_total_id',
                ]
            )
            ->addIndex(
                [
                    'unidad_medida_id',
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
            ->addColumn('inventario_empresa_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('procesos_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('trabajador_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('fecha_pro', 'date', [
                'default' => null,
                'limit' => null,
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
            ->addIndex(
                [
                    'inventario_empresa_id',
                ]
            )
            ->addIndex(
                [
                    'procesos_id',
                ]
            )
            ->addIndex(
                [
                    'trabajador_id',
                ]
            )
            ->create();

        $this->table('hoja_producto_terminado')
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('fecha', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('valor_IVA', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('valor_ICE', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('pasteurizacion_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('fecha_elb', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('lote_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('nombre_cantidad', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('valor_cantidad', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('brix_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('nombre_etiqueta', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('cantidad_etiqueta', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('nombre_corcho', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('cantidad_corcho', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('cantidad_capuchon', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('cantidad_cintas_SRI', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('cantidad_cintas_ultimoInca', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('trabajador_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('observaciones', 'string', [
                'default' => null,
                'limit' => 300,
                'null' => true,
            ])
            ->addIndex(
                [
                    'brix_id',
                ]
            )
            ->addIndex(
                [
                    'lote_id',
                ]
            )
            ->addIndex(
                [
                    'pasteurizacion_id',
                ]
            )
            ->addIndex(
                [
                    'trabajador_id',
                ]
            )
            ->create();

        $this->table('hoja_ventas')
            ->addColumn('fecha', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('trabajador_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('users_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('cantidad', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('precio_unitario', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('precio_total', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('estado_venta', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('valor_estado', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('observaciones', 'string', [
                'default' => null,
                'limit' => 300,
                'null' => true,
            ])
            ->addIndex(
                [
                    'trabajador_id',
                ]
            )
            ->addIndex(
                [
                    'users_id',
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
            ->addColumn('item_inventario_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'item_inventario_id',
                ]
            )
            ->create();

        $this->table('item_inventario')
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

        $this->table('lote')
            ->addColumn('valor', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('detalle', 'string', [
                'default' => null,
                'limit' => 300,
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
            ->addColumn('contidad', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('pasteurizacion')
            ->addColumn('valor', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('detalle', 'string', [
                'default' => null,
                'limit' => 300,
                'null' => true,
            ])
            ->create();

        $this->table('pedidos')
            ->addColumn('fecha_ven', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('trabajador_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('users_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('estado_cuenta', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('observaciones_ven', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addIndex(
                [
                    'trabajador_id',
                ]
            )
            ->addIndex(
                [
                    'users_id',
                ]
            )
            ->create();

        $this->table('prevee')
            ->addColumn('proveedor_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('materia_prima_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'materia_prima_id',
                ]
            )
            ->addIndex(
                [
                    'proveedor_id',
                ]
            )
            ->create();

        $this->table('procesos')
            ->addColumn('nombre_proceso', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('detalle', 'string', [
                'default' => null,
                'limit' => 300,
                'null' => true,
            ])
            ->create();

        $this->table('produccion_total')
            ->addColumn('nombre_producto', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => true,
            ])
            ->addColumn('valor_total_producto', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('valor_ultima_suma', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('precio', 'float', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('presentacion', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
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
            ->addColumn('empresa_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addIndex(
                [
                    'empresa_id',
                ]
            )
            ->create();

        $this->table('roles')
            ->addColumn('role', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('salida_hoja_inventario')
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

        $this->table('users')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('lastname', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('Telefono', 'string', [
                'default' => null,
                'limit' => 12,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('roles_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('area_produccion')
            ->addForeignKey(
                'brix_id',
                'brix',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'clase_vino_id',
                'clase_vino',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'inventario_empresa_id',
                'inventario_empresa',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'procesos_id',
                'procesos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'trabajador_id',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'uni_medida_id',
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
                'materia_prima_id',
                'materia_prima',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'proveedor_id',
                'proveedor',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'trabajador_id',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'unidad_medida_id',
                'unidad_medida',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('detalle_pedidos')
            ->addForeignKey(
                'pedidos_id',
                'pedidos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'produccion_total_id',
                'produccion_total',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'unidad_medida_id',
                'unidad_medida',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('hoja_produccion_vino')
            ->addForeignKey(
                'inventario_empresa_id',
                'inventario_empresa',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'procesos_id',
                'procesos',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'trabajador_id',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('hoja_producto_terminado')
            ->addForeignKey(
                'brix_id',
                'brix',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'lote_id',
                'lote',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'pasteurizacion_id',
                'pasteurizacion',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'trabajador_id',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('hoja_ventas')
            ->addForeignKey(
                'trabajador_id',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'users_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('inventario_empresa')
            ->addForeignKey(
                'item_inventario_id',
                'item_inventario',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('pedidos')
            ->addForeignKey(
                'trabajador_id',
                'trabajador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'users_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('prevee')
            ->addForeignKey(
                'materia_prima_id',
                'materia_prima',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'proveedor_id',
                'proveedor',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('proveedor')
            ->addForeignKey(
                'empresa_id',
                'empresa',
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
                'brix_id'
            )
            ->dropForeignKey(
                'clase_vino_id'
            )
            ->dropForeignKey(
                'inventario_empresa_id'
            )
            ->dropForeignKey(
                'procesos_id'
            )
            ->dropForeignKey(
                'trabajador_id'
            )
            ->dropForeignKey(
                'uni_medida_id'
            );

        $this->table('compra_mat_pri')
            ->dropForeignKey(
                'materia_prima_id'
            )
            ->dropForeignKey(
                'proveedor_id'
            )
            ->dropForeignKey(
                'trabajador_id'
            )
            ->dropForeignKey(
                'unidad_medida_id'
            );

        $this->table('detalle_pedidos')
            ->dropForeignKey(
                'pedidos_id'
            )
            ->dropForeignKey(
                'produccion_total_id'
            )
            ->dropForeignKey(
                'unidad_medida_id'
            );

        $this->table('hoja_produccion_vino')
            ->dropForeignKey(
                'inventario_empresa_id'
            )
            ->dropForeignKey(
                'procesos_id'
            )
            ->dropForeignKey(
                'trabajador_id'
            );

        $this->table('hoja_producto_terminado')
            ->dropForeignKey(
                'brix_id'
            )
            ->dropForeignKey(
                'lote_id'
            )
            ->dropForeignKey(
                'pasteurizacion_id'
            )
            ->dropForeignKey(
                'trabajador_id'
            );

        $this->table('hoja_ventas')
            ->dropForeignKey(
                'trabajador_id'
            )
            ->dropForeignKey(
                'users_id'
            );

        $this->table('inventario_empresa')
            ->dropForeignKey(
                'item_inventario_id'
            );

        $this->table('pedidos')
            ->dropForeignKey(
                'trabajador_id'
            )
            ->dropForeignKey(
                'users_id'
            );

        $this->table('prevee')
            ->dropForeignKey(
                'materia_prima_id'
            )
            ->dropForeignKey(
                'proveedor_id'
            );

        $this->table('proveedor')
            ->dropForeignKey(
                'empresa_id'
            );

        $this->dropTable('area_produccion');
        $this->dropTable('brix');
        $this->dropTable('catalogo');
        $this->dropTable('clase_vino');
        $this->dropTable('compra_mat_pri');
        $this->dropTable('detalle_pedidos');
        $this->dropTable('empresa');
        $this->dropTable('hoja_produccion_vino');
        $this->dropTable('hoja_producto_terminado');
        $this->dropTable('hoja_ventas');
        $this->dropTable('inventario_empresa');
        $this->dropTable('item_inventario');
        $this->dropTable('lote');
        $this->dropTable('materia_prima');
        $this->dropTable('pasteurizacion');
        $this->dropTable('pedidos');
        $this->dropTable('prevee');
        $this->dropTable('procesos');
        $this->dropTable('produccion_total');
        $this->dropTable('proveedor');
        $this->dropTable('roles');
        $this->dropTable('salida_hoja_inventario');
        $this->dropTable('socio');
        $this->dropTable('trabajador');
        $this->dropTable('unidad_medida');
        $this->dropTable('users');
    }
}

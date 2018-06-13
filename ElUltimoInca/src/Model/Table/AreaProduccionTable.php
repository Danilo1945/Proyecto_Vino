<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreaProduccion Model
 *
 * @property \App\Model\Table\InventarioEmpresaTable|\Cake\ORM\Association\BelongsTo $InventarioEmpresa
 * @property \App\Model\Table\UnidadMedidaTable|\Cake\ORM\Association\BelongsTo $UnidadMedida
 * @property \App\Model\Table\ProcesosTable|\Cake\ORM\Association\BelongsTo $Procesos
 * @property \App\Model\Table\BrixTable|\Cake\ORM\Association\BelongsTo $Brix
 * @property \App\Model\Table\ClaseVinoTable|\Cake\ORM\Association\BelongsTo $ClaseVino
 * @property \App\Model\Table\TrabajadorTable|\Cake\ORM\Association\BelongsTo $Trabajador
 *
 * @method \App\Model\Entity\AreaProduccion get($primaryKey, $options = [])
 * @method \App\Model\Entity\AreaProduccion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AreaProduccion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AreaProduccion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AreaProduccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AreaProduccion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AreaProduccion findOrCreate($search, callable $callback = null, $options = [])
 */
class AreaProduccionTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('area_produccion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('InventarioEmpresa', [
            'foreignKey' => 'inventario_empresa_id'
        ]);
        $this->belongsTo('UnidadMedida', [
            'foreignKey' => 'uni_medida_id'
        ]);
        $this->belongsTo('Procesos', [
            'foreignKey' => 'procesos_id'
        ]);
        $this->belongsTo('Brix', [
            'foreignKey' => 'brix_id'
        ]);
        $this->belongsTo('ClaseVino', [
            'foreignKey' => 'clase_vino_id'
        ]);
        $this->belongsTo('Trabajador', [
            'foreignKey' => 'trabajador_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('fecha_elaboracion')
            ->allowEmpty('fecha_elaboracion');

        $validator
            ->numeric('cantidad_litros')
            ->allowEmpty('cantidad_litros');

        $validator
            ->numeric('temperatura_vino')
            ->allowEmpty('temperatura_vino');

        $validator
            ->date('fecha_control')
            ->allowEmpty('fecha_control');

        $validator
            ->scalar('observaciones_area_pro')
            ->maxLength('observaciones_area_pro', 200)
            ->allowEmpty('observaciones_area_pro');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['inventario_empresa_id'], 'InventarioEmpresa'));
        $rules->add($rules->existsIn(['uni_medida_id'], 'UnidadMedida'));
        $rules->add($rules->existsIn(['procesos_id'], 'Procesos'));
        $rules->add($rules->existsIn(['brix_id'], 'Brix'));
        $rules->add($rules->existsIn(['clase_vino_id'], 'ClaseVino'));
        $rules->add($rules->existsIn(['trabajador_id'], 'Trabajador'));

        return $rules;
    }
}

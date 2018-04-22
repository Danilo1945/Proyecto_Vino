<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreaProduccion Model
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
        $this->setDisplayField('id_area_pro');
        $this->setPrimaryKey('id_area_pro');
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
            ->integer('id_area_pro')
            ->allowEmpty('id_area_pro', 'create');

        $validator
            ->date('fecha_elaboracion')
            ->allowEmpty('fecha_elaboracion');

        $validator
            ->scalar('num_procesos')
            ->maxLength('num_procesos', 20)
            ->allowEmpty('num_procesos');

        $validator
            ->integer('brix_area_pro')
            ->allowEmpty('brix_area_pro');

        $validator
            ->scalar('clase_vino')
            ->maxLength('clase_vino', 20)
            ->allowEmpty('clase_vino');

        $validator
            ->integer('temperatura_vino')
            ->allowEmpty('temperatura_vino');

        $validator
            ->date('fecha_control')
            ->allowEmpty('fecha_control');

        $validator
            ->scalar('observaciones_area_pro')
            ->maxLength('observaciones_area_pro', 200)
            ->allowEmpty('observaciones_area_pro');

        $validator
            ->integer('id_uni_medi')
            ->allowEmpty('id_uni_medi');

        $validator
            ->scalar('id_tra')
            ->maxLength('id_tra', 15)
            ->allowEmpty('id_tra');

        $validator
            ->scalar('id_inv')
            ->maxLength('id_inv', 20)
            ->allowEmpty('id_inv');

        return $validator;
    }
}

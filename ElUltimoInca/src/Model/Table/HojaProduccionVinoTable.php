<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HojaProduccionVino Model
 *
 * @method \App\Model\Entity\HojaProduccionVino get($primaryKey, $options = [])
 * @method \App\Model\Entity\HojaProduccionVino newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HojaProduccionVino[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HojaProduccionVino|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HojaProduccionVino patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HojaProduccionVino[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HojaProduccionVino findOrCreate($search, callable $callback = null, $options = [])
 */
class HojaProduccionVinoTable extends Table
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

        $this->setTable('hoja_produccion_vino');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->date('fecha_pro')
            ->allowEmpty('fecha_pro');

        $validator
            ->integer('id_inv')
            ->allowEmpty('id_inv');

        $validator
            ->numeric('cant_fruta_klg')
            ->allowEmpty('cant_fruta_klg');

        $validator
            ->numeric('cant_agua_lts')
            ->allowEmpty('cant_agua_lts');

        $validator
            ->numeric('cant_azucar_klg')
            ->allowEmpty('cant_azucar_klg');

        $validator
            ->numeric('cant_levadura_grms')
            ->allowEmpty('cant_levadura_grms');

        $validator
            ->numeric('numero_procesos')
            ->allowEmpty('numero_procesos');

        $validator
            ->scalar('observacion_pro')
            ->maxLength('observacion_pro', 200)
            ->allowEmpty('observacion_pro');

        $validator
            ->integer('id_tra')
            ->allowEmpty('id_tra');

        return $validator;
    }
}

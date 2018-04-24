<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Venta Model
 *
 * @method \App\Model\Entity\Ventum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ventum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ventum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ventum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ventum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ventum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ventum findOrCreate($search, callable $callback = null, $options = [])
 */
class VentaTable extends Table
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

        $this->setTable('venta');
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
            ->date('fecha_ven')
            ->allowEmpty('fecha_ven');

        $validator
            ->integer('id_tra')
            ->allowEmpty('id_tra');

        $validator
            ->integer('Idcliente')
            ->allowEmpty('Idcliente');

        $validator
            ->integer('id_pro_ter')
            ->allowEmpty('id_pro_ter');

        $validator
            ->numeric('precio_uni')
            ->allowEmpty('precio_uni');

        $validator
            ->numeric('precio_total')
            ->allowEmpty('precio_total');

        $validator
            ->scalar('estado_cuenta')
            ->maxLength('estado_cuenta', 20)
            ->allowEmpty('estado_cuenta');

        $validator
            ->numeric('valor_donacion_vent')
            ->allowEmpty('valor_donacion_vent');

        $validator
            ->scalar('observaciones_ven')
            ->maxLength('observaciones_ven', 200)
            ->allowEmpty('observaciones_ven');

        return $validator;
    }
}

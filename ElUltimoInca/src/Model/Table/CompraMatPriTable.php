<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompraMatPri Model
 *
 * @method \App\Model\Entity\CompraMatPri get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompraMatPri newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompraMatPri[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompraMatPri|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompraMatPri patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompraMatPri[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompraMatPri findOrCreate($search, callable $callback = null, $options = [])
 */
class CompraMatPriTable extends Table
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

        $this->setTable('compra_mat_pri');
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
            ->date('fecha_mat')
            ->allowEmpty('fecha_mat');

        $validator
            ->numeric('precio_u_mat')
            ->allowEmpty('precio_u_mat');

        $validator
            ->numeric('precio_tot_mat')
            ->allowEmpty('precio_tot_mat');

        $validator
            ->scalar('observaciones_mat')
            ->maxLength('observaciones_mat', 100)
            ->allowEmpty('observaciones_mat');

        $validator
            ->integer('id_pro')
            ->allowEmpty('id_pro');

        $validator
            ->integer('id_tra')
            ->allowEmpty('id_tra');

        $validator
            ->integer('id_mat_prim')
            ->allowEmpty('id_mat_prim');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProduccionTotal Model
 *
 * @property |\Cake\ORM\Association\HasMany $DetallePedidos
 *
 * @method \App\Model\Entity\ProduccionTotal get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProduccionTotal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProduccionTotal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProduccionTotal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProduccionTotal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProduccionTotal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProduccionTotal findOrCreate($search, callable $callback = null, $options = [])
 */
class ProduccionTotalTable extends Table
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

        $this->setTable('produccion_total');
        $this->setDisplayField('nombre_producto');
        $this->setPrimaryKey('id');

        $this->hasMany('DetallePedidos', [
            'foreignKey' => 'produccion_total_id'
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
            ->scalar('nombre_producto')
            ->maxLength('nombre_producto', 30)
            ->allowEmpty('nombre_producto');

        $validator
            ->integer('valor_total_producto')
            ->allowEmpty('valor_total_producto');

        $validator
            ->integer('valor_ultima_suma')
            ->allowEmpty('valor_ultima_suma');

        $validator
            ->numeric('precio')
            ->requirePresence('precio', 'create')
            ->notEmpty('precio');

        $validator
            ->scalar('presentacion')
            ->maxLength('presentacion', 255)
            ->requirePresence('presentacion', 'create')
            ->notEmpty('presentacion');

        return $validator;
    }
}

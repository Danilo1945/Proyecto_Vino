<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proveedor Model
 *
 * @method \App\Model\Entity\Proveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class ProveedorTable extends Table
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

        $this->setTable('proveedor');
        $this->setDisplayField('id_pro');
        $this->setPrimaryKey('id_pro');
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
            ->scalar('id_pro')
            ->maxLength('id_pro', 30)
            ->allowEmpty('id_pro', 'create');

        $validator
            ->scalar('nombres_pro')
            ->maxLength('nombres_pro', 30)
            ->allowEmpty('nombres_pro');

        $validator
            ->scalar('apellidos_pro')
            ->maxLength('apellidos_pro', 30)
            ->allowEmpty('apellidos_pro');

        $validator
            ->scalar('telefono_pro')
            ->maxLength('telefono_pro', 12)
            ->allowEmpty('telefono_pro');

        $validator
            ->scalar('email_pro')
            ->maxLength('email_pro', 30)
            ->allowEmpty('email_pro');

        $validator
            ->integer('id_emp')
            ->allowEmpty('id_emp');

        return $validator;
    }
}

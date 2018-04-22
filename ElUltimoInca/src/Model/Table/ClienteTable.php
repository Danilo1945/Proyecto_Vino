<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cliente Model
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 */
class ClienteTable extends Table
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

        $this->setTable('cliente');
        $this->setDisplayField('Idcliente');
        $this->setPrimaryKey('Idcliente');
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
            ->scalar('Idcliente')
            ->maxLength('Idcliente', 10)
            ->allowEmpty('Idcliente', 'create');

        $validator
            ->scalar('Nombres')
            ->maxLength('Nombres', 30)
            ->allowEmpty('Nombres');

        $validator
            ->scalar('Apellidos')
            ->maxLength('Apellidos', 30)
            ->allowEmpty('Apellidos');

        $validator
            ->scalar('Telefono')
            ->maxLength('Telefono', 12)
            ->allowEmpty('Telefono');

        $validator
            ->scalar('Direccion')
            ->maxLength('Direccion', 100)
            ->allowEmpty('Direccion');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 50)
            ->allowEmpty('Email');

        $validator
            ->scalar('user')
            ->maxLength('user', 30)
            ->allowEmpty('user');

        $validator
            ->scalar('password')
            ->maxLength('password', 30)
            ->allowEmpty('password');

        return $validator;
    }
}

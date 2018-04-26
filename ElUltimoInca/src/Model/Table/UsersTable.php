<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
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
            ->scalar('Cedula')
            ->maxLength('Cedula', 11)
            ->allowEmpty('Cedula');

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
            ->maxLength('user', 10)
            ->allowEmpty('user');

        $validator
            ->scalar('password')
            ->maxLength('password', 10)
            ->allowEmpty('password');

        $validator
            ->scalar('Rol')
            ->maxLength('Rol', 20)
            ->allowEmpty('Rol');

        return $validator;
    }
}

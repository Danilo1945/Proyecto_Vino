<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Socio Model
 *
 * @method \App\Model\Entity\Socio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Socio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Socio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Socio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Socio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Socio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Socio findOrCreate($search, callable $callback = null, $options = [])
 */
class SocioTable extends Table
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

        $this->setTable('socio');
        $this->setDisplayField('id_so');
        $this->setPrimaryKey('id_so');
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
            ->scalar('id_so')
            ->maxLength('id_so', 10)
            ->allowEmpty('id_so', 'create');

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

        return $validator;
    }
}

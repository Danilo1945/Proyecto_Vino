<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trabajador Model
 *
 * @method \App\Model\Entity\Trabajador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trabajador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trabajador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trabajador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trabajador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trabajador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trabajador findOrCreate($search, callable $callback = null, $options = [])
 */
class TrabajadorTable extends Table
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

        $this->setTable('trabajador');
        $this->setDisplayField('id_tra');
        $this->setPrimaryKey('id_tra');
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
            ->scalar('id_tra')
            ->maxLength('id_tra', 15)
            ->allowEmpty('id_tra', 'create');

        $validator
            ->scalar('Nombres_tra')
            ->maxLength('Nombres_tra', 30)
            ->allowEmpty('Nombres_tra');

        $validator
            ->scalar('Apellidos_tra')
            ->maxLength('Apellidos_tra', 30)
            ->allowEmpty('Apellidos_tra');

        $validator
            ->scalar('Telefono_tra')
            ->maxLength('Telefono_tra', 12)
            ->allowEmpty('Telefono_tra');

        $validator
            ->scalar('Direccion_tra')
            ->maxLength('Direccion_tra', 100)
            ->allowEmpty('Direccion_tra');

        $validator
            ->scalar('Email_tra')
            ->maxLength('Email_tra', 50)
            ->allowEmpty('Email_tra');

        return $validator;
    }
}

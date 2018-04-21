<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administrador Model
 *
 * @method \App\Model\Entity\Administrador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administrador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Administrador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administrador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administrador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administrador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administrador findOrCreate($search, callable $callback = null, $options = [])
 */
class AdministradorTable extends Table
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

        $this->setTable('administrador');
        $this->setDisplayField('id_adm');
        $this->setPrimaryKey('id_adm');
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
            ->integer('id_adm')
            ->allowEmpty('id_adm', 'create');

        $validator
            ->scalar('usuario_adm')
            ->maxLength('usuario_adm', 20)
            ->allowEmpty('usuario_adm');

        $validator
            ->scalar('contrasenia_adm')
            ->maxLength('contrasenia_adm', 100)
            ->allowEmpty('contrasenia_adm');

        return $validator;
    }
}

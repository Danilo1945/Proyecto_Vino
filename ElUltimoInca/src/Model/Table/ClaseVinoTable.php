<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClaseVino Model
 *
 * @property \App\Model\Table\AreaProduccionTable|\Cake\ORM\Association\HasMany $AreaProduccion
 *
 * @method \App\Model\Entity\ClaseVino get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClaseVino newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClaseVino[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClaseVino|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClaseVino patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClaseVino[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClaseVino findOrCreate($search, callable $callback = null, $options = [])
 */
class ClaseVinoTable extends Table
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

        $this->setTable('clase_vino');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('AreaProduccion', [
            'foreignKey' => 'clase_vino_id'
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
            ->scalar('nombre')
            ->maxLength('nombre', 30)
            ->allowEmpty('nombre');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 300)
            ->allowEmpty('descripcion');

        return $validator;
    }
}

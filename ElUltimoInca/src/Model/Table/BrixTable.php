<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Brix Model
 *
 * @property \App\Model\Table\AreaProduccionTable|\Cake\ORM\Association\HasMany $AreaProduccion
 * @property \App\Model\Table\HojaProductoTerminadoTable|\Cake\ORM\Association\HasMany $HojaProductoTerminado
 *
 * @method \App\Model\Entity\Brix get($primaryKey, $options = [])
 * @method \App\Model\Entity\Brix newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Brix[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Brix|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Brix patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Brix[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Brix findOrCreate($search, callable $callback = null, $options = [])
 */
class BrixTable extends Table
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

        $this->setTable('brix');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('AreaProduccion', [
            'foreignKey' => 'brix_id'
        ]);
        $this->hasMany('HojaProductoTerminado', [
            'foreignKey' => 'brix_id'
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
            ->numeric('contidad')
            ->allowEmpty('contidad');

        return $validator;
    }
}

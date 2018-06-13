<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pasteurizacion Model
 *
 * @property \App\Model\Table\HojaProductoTerminadoTable|\Cake\ORM\Association\HasMany $HojaProductoTerminado
 *
 * @method \App\Model\Entity\Pasteurizacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pasteurizacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pasteurizacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pasteurizacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pasteurizacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pasteurizacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pasteurizacion findOrCreate($search, callable $callback = null, $options = [])
 */
class PasteurizacionTable extends Table
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

        $this->setTable('pasteurizacion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('HojaProductoTerminado', [
            'foreignKey' => 'pasteurizacion_id'
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
            ->integer('valor')
            ->allowEmpty('valor');

        $validator
            ->scalar('detalle')
            ->maxLength('detalle', 300)
            ->allowEmpty('detalle');

        return $validator;
    }
}

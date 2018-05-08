<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MateriaPrima Model
 *
 * @property \App\Model\Table\UnidadMedidaTable|\Cake\ORM\Association\BelongsTo $UnidadMedida
 *
 * @method \App\Model\Entity\MateriaPrima get($primaryKey, $options = [])
 * @method \App\Model\Entity\MateriaPrima newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MateriaPrima[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MateriaPrima|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MateriaPrima patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MateriaPrima[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MateriaPrima findOrCreate($search, callable $callback = null, $options = [])
 */
class MateriaPrimaTable extends Table
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

        $this->setTable('materia_prima');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('UnidadMedida', [
            'foreignKey' => 'unm_id'
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
            ->scalar('nombre_mat_pri')
            ->maxLength('nombre_mat_pri', 50)
            ->allowEmpty('nombre_mat_pri');

        $validator
            ->scalar('descripcion_mat_pri')
            ->maxLength('descripcion_mat_pri', 100)
            ->allowEmpty('descripcion_mat_pri');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['unm_id'], 'UnidadMedida'));

        return $rules;
    }
}

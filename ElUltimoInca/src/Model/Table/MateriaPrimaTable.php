<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MateriaPrima Model
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
        $this->setDisplayField('id_mat_prim');
        $this->setPrimaryKey('id_mat_prim');
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
            ->scalar('id_mat_prim')
            ->maxLength('id_mat_prim', 15)
            ->allowEmpty('id_mat_prim', 'create');

        $validator
            ->scalar('nombre_mat_pri')
            ->maxLength('nombre_mat_pri', 50)
            ->allowEmpty('nombre_mat_pri');

        $validator
            ->scalar('descripcion_mat_pri')
            ->maxLength('descripcion_mat_pri', 100)
            ->allowEmpty('descripcion_mat_pri');

        $validator
            ->integer('id_uni_medi')
            ->allowEmpty('id_uni_medi');

        return $validator;
    }
}

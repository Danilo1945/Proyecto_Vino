<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UnidadMedida Model
 *
 * @method \App\Model\Entity\UnidadMedida get($primaryKey, $options = [])
 * @method \App\Model\Entity\UnidadMedida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UnidadMedida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UnidadMedida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnidadMedida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UnidadMedida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UnidadMedida findOrCreate($search, callable $callback = null, $options = [])
 */
class UnidadMedidaTable extends Table
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

        $this->setTable('unidad_medida');
        $this->setDisplayField('id_uni_medi');
        $this->setPrimaryKey('id_uni_medi');
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
            ->integer('id_uni_medi')
            ->allowEmpty('id_uni_medi', 'create');

        $validator
            ->scalar('nombre_umed')
            ->maxLength('nombre_umed', 30)
            ->allowEmpty('nombre_umed');

        $validator
            ->scalar('detalle_umed')
            ->maxLength('detalle_umed', 50)
            ->allowEmpty('detalle_umed');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DetallePedidos Model
 *
 * @property \App\Model\Table\PedidosTable|\Cake\ORM\Association\BelongsTo $Pedidos
 * @property \App\Model\Table\UnidadMedidaTable|\Cake\ORM\Association\BelongsTo $UnidadMedida
 * @property \App\Model\Table\ProduccionTotalTable|\Cake\ORM\Association\BelongsTo $ProduccionTotal
 *
 * @method \App\Model\Entity\DetallePedido get($primaryKey, $options = [])
 * @method \App\Model\Entity\DetallePedido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DetallePedido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DetallePedido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DetallePedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DetallePedido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DetallePedido findOrCreate($search, callable $callback = null, $options = [])
 */
class DetallePedidosTable extends Table
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

        $this->setTable('detalle_pedidos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pedidos', [
            'foreignKey' => 'pedidos_id'
        ]);
        $this->belongsTo('UnidadMedida', [
            'foreignKey' => 'unidad_medida_id'
        ]);
        $this->belongsTo('ProduccionTotal', [
            'foreignKey' => 'produccion_total_id'
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
            ->numeric('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->scalar('detalle')
            ->maxLength('detalle', 255)
            ->allowEmpty('detalle');

        $validator
            ->numeric('valor_unitario')
            ->allowEmpty('valor_unitario');

        $validator
            ->numeric('valor_total')
            ->allowEmpty('valor_total');

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
        $rules->add($rules->existsIn(['pedidos_id'], 'Pedidos'));
        $rules->add($rules->existsIn(['unidad_medida_id'], 'UnidadMedida'));
        $rules->add($rules->existsIn(['produccion_total_id'], 'ProduccionTotal'));

        return $rules;
    }
}

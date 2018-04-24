<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedido Model
 *
 * @method \App\Model\Entity\Pedido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pedido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pedido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pedido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido findOrCreate($search, callable $callback = null, $options = [])
 */
class PedidoTable extends Table
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

        $this->setTable('pedido');
        $this->setDisplayField('Idpedido');
        $this->setPrimaryKey('Idpedido');
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
            ->integer('Idpedido')
            ->allowEmpty('Idpedido', 'create');

        $validator
            ->date('Fecha')
            ->allowEmpty('Fecha');

        $validator
            ->integer('Cantidad')
            ->allowEmpty('Cantidad');

        $validator
            ->scalar('unidad_medida')
            ->maxLength('unidad_medida', 20)
            ->allowEmpty('unidad_medida');

        $validator
            ->scalar('Idcliente')
            ->maxLength('Idcliente', 10)
            ->allowEmpty('Idcliente');

        $validator
            ->integer('id_pro_ter')
            ->allowEmpty('id_pro_ter');

        return $validator;
    }
}

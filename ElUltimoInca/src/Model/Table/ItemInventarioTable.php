<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ItemInventario Model
 *
 * @property \App\Model\Table\InventarioEmpresaTable|\Cake\ORM\Association\HasMany $InventarioEmpresa
 *
 * @method \App\Model\Entity\ItemInventario get($primaryKey, $options = [])
 * @method \App\Model\Entity\ItemInventario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ItemInventario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ItemInventario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ItemInventario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ItemInventario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ItemInventario findOrCreate($search, callable $callback = null, $options = [])
 */
class ItemInventarioTable extends Table
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

        $this->setTable('item_inventario');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('InventarioEmpresa', [
            'foreignKey' => 'item_inventario_id'
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
            ->scalar('nom_item')
            ->maxLength('nom_item', 50)
            ->allowEmpty('nom_item');

        $validator
            ->scalar('detalle_item')
            ->maxLength('detalle_item', 200)
            ->allowEmpty('detalle_item');

        return $validator;
    }
}

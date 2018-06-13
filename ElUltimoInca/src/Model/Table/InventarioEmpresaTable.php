<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InventarioEmpresa Model
 *
 * @property \App\Model\Table\ItemInventarioTable|\Cake\ORM\Association\BelongsTo $ItemInventario
 * @property \App\Model\Table\AreaProduccionTable|\Cake\ORM\Association\HasMany $AreaProduccion
 * @property \App\Model\Table\HojaProduccionVinoTable|\Cake\ORM\Association\HasMany $HojaProduccionVino
 *
 * @method \App\Model\Entity\InventarioEmpresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\InventarioEmpresa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InventarioEmpresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InventarioEmpresa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InventarioEmpresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InventarioEmpresa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InventarioEmpresa findOrCreate($search, callable $callback = null, $options = [])
 */
class InventarioEmpresaTable extends Table
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

        $this->setTable('inventario_empresa');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ItemInventario', [
            'foreignKey' => 'item_inventario_id'
        ]);
        $this->hasMany('AreaProduccion', [
            'foreignKey' => 'inventario_empresa_id'
        ]);
        $this->hasMany('HojaProduccionVino', [
            'foreignKey' => 'inventario_empresa_id'
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
            ->scalar('nombre_art_inv')
            ->maxLength('nombre_art_inv', 40)
            ->allowEmpty('nombre_art_inv');

        $validator
            ->scalar('descripcion_inv')
            ->maxLength('descripcion_inv', 200)
            ->allowEmpty('descripcion_inv');

        $validator
            ->scalar('color_inv')
            ->maxLength('color_inv', 20)
            ->allowEmpty('color_inv');

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
        $rules->add($rules->existsIn(['item_inventario_id'], 'ItemInventario'));

        return $rules;
    }
}

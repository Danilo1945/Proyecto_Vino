<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HojaVentas Model
 *
 * @property \App\Model\Table\TrabajadorTable|\Cake\ORM\Association\BelongsTo $Trabajador
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\HojaVenta get($primaryKey, $options = [])
 * @method \App\Model\Entity\HojaVenta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HojaVenta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HojaVenta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HojaVenta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HojaVenta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HojaVenta findOrCreate($search, callable $callback = null, $options = [])
 */
class HojaVentasTable extends Table
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

        $this->setTable('hoja_ventas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Trabajador', [
            'foreignKey' => 'trabajador_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'users_id'
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
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->numeric('cantidad')
            ->allowEmpty('cantidad');

        $validator
            ->numeric('precio_unitario')
            ->allowEmpty('precio_unitario');

        $validator
            ->numeric('precio_total')
            ->allowEmpty('precio_total');

        $validator
            ->scalar('estado_venta')
            ->maxLength('estado_venta', 20)
            ->allowEmpty('estado_venta');

        $validator
            ->numeric('valor_estado')
            ->allowEmpty('valor_estado');

        $validator
            ->scalar('observaciones')
            ->maxLength('observaciones', 300)
            ->allowEmpty('observaciones');

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
        $rules->add($rules->existsIn(['trabajador_id'], 'Trabajador'));
        $rules->add($rules->existsIn(['users_id'], 'Users'));

        return $rules;
    }
}

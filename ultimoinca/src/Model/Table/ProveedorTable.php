<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proveedor Model
 *
 * @property \App\Model\Table\EmpresaTable|\Cake\ORM\Association\BelongsTo $Empresa
 * @property \App\Model\Table\CompraMatPriTable|\Cake\ORM\Association\HasMany $CompraMatPri
 * @property \App\Model\Table\PreveeTable|\Cake\ORM\Association\HasMany $Prevee
 *
 * @method \App\Model\Entity\Proveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class ProveedorTable extends Table
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

        $this->setTable('proveedor');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Empresa', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('CompraMatPri', [
            'foreignKey' => 'proveedor_id'
        ]);
        $this->hasMany('Prevee', [
            'foreignKey' => 'proveedor_id'
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
            ->scalar('cedula')
            ->maxLength('cedula', 11)
            ->allowEmpty('cedula');

        $validator
            ->scalar('nombres_pro')
            ->maxLength('nombres_pro', 30)
            ->allowEmpty('nombres_pro');

        $validator
            ->scalar('apellidos_pro')
            ->maxLength('apellidos_pro', 30)
            ->allowEmpty('apellidos_pro');

        $validator
            ->scalar('telefono_pro')
            ->maxLength('telefono_pro', 12)
            ->allowEmpty('telefono_pro');

        $validator
            ->scalar('email_pro')
            ->maxLength('email_pro', 30)
            ->allowEmpty('email_pro');

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
        $rules->add($rules->existsIn(['empresa_id'], 'Empresa'));

        return $rules;
    }
}

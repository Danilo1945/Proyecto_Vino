<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HojaProductoTerminado Model
 *
 * @property \App\Model\Table\PasteurizacionTable|\Cake\ORM\Association\BelongsTo $Pasteurizacion
 * @property \App\Model\Table\LoteTable|\Cake\ORM\Association\BelongsTo $Lote
 * @property \App\Model\Table\BrixTable|\Cake\ORM\Association\BelongsTo $Brix
 * @property \App\Model\Table\TrabajadorTable|\Cake\ORM\Association\BelongsTo $Trabajador
 *
 * @method \App\Model\Entity\HojaProductoTerminado get($primaryKey, $options = [])
 * @method \App\Model\Entity\HojaProductoTerminado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HojaProductoTerminado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HojaProductoTerminado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HojaProductoTerminado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HojaProductoTerminado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HojaProductoTerminado findOrCreate($search, callable $callback = null, $options = [])
 */
class HojaProductoTerminadoTable extends Table
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

        $this->setTable('hoja_producto_terminado');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pasteurizacion', [
            'foreignKey' => 'pasteurizacion_id'
        ]);
        $this->belongsTo('Lote', [
            'foreignKey' => 'lote_id'
        ]);
        $this->belongsTo('Brix', [
            'foreignKey' => 'brix_id'
        ]);
        $this->belongsTo('Trabajador', [
            'foreignKey' => 'trabajador_id'
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
            ->scalar('nombre')
            ->maxLength('nombre', 30)
            ->allowEmpty('nombre');

        $validator
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->integer('valor_IVA')
            ->allowEmpty('valor_IVA');

        $validator
            ->integer('valor_ICE')
            ->allowEmpty('valor_ICE');

        $validator
            ->date('fecha_elb')
            ->allowEmpty('fecha_elb');

        $validator
            ->scalar('nombre_cantidad')
            ->maxLength('nombre_cantidad', 30)
            ->allowEmpty('nombre_cantidad');

        $validator
            ->integer('valor_cantidad')
            ->allowEmpty('valor_cantidad');

        $validator
            ->scalar('nombre_etiqueta')
            ->maxLength('nombre_etiqueta', 30)
            ->allowEmpty('nombre_etiqueta');

        $validator
            ->integer('cantidad_etiqueta')
            ->allowEmpty('cantidad_etiqueta');

        $validator
            ->scalar('nombre_corcho')
            ->maxLength('nombre_corcho', 30)
            ->allowEmpty('nombre_corcho');

        $validator
            ->integer('cantidad_corcho')
            ->allowEmpty('cantidad_corcho');

        $validator
            ->integer('cantidad_capuchon')
            ->allowEmpty('cantidad_capuchon');

        $validator
            ->integer('cantidad_cintas_SRI')
            ->allowEmpty('cantidad_cintas_SRI');

        $validator
            ->integer('cantidad_cintas_ultimoInca')
            ->allowEmpty('cantidad_cintas_ultimoInca');

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
        $rules->add($rules->existsIn(['pasteurizacion_id'], 'Pasteurizacion'));
        $rules->add($rules->existsIn(['lote_id'], 'Lote'));
        $rules->add($rules->existsIn(['brix_id'], 'Brix'));
        $rules->add($rules->existsIn(['trabajador_id'], 'Trabajador'));

        return $rules;
    }
}

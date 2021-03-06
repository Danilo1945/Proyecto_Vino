<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Salidas Model
 *
 * @method \App\Model\Entity\Salida get($primaryKey, $options = [])
 * @method \App\Model\Entity\Salida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Salida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Salida|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Salida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Salida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Salida findOrCreate($search, callable $callback = null, $options = [])
 */
class SalidasTable extends Table
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

        $this->setTable('salidas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->date('fecha_sal')
            ->allowEmpty('fecha_sal');

        $validator
            ->numeric('saldo_sal')
            ->allowEmpty('saldo_sal');

        $validator
            ->numeric('ingreso_sal')
            ->allowEmpty('ingreso_sal');

        $validator
            ->numeric('egreso_sal')
            ->allowEmpty('egreso_sal');

        $validator
            ->numeric('donacion_sal')
            ->allowEmpty('donacion_sal');

        $validator
            ->numeric('devolucion_sal')
            ->allowEmpty('devolucion_sal');

        $validator
            ->numeric('saldo_total')
            ->allowEmpty('saldo_total');

        $validator
            ->scalar('observaciones_sal')
            ->maxLength('observaciones_sal', 200)
            ->allowEmpty('observaciones_sal');

        return $validator;
    }
}

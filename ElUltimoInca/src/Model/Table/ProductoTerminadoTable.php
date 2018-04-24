<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductoTerminado Model
 *
 * @method \App\Model\Entity\ProductoTerminado get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductoTerminado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductoTerminado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductoTerminado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductoTerminado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoTerminado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductoTerminado findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductoTerminadoTable extends Table
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

        $this->setTable('producto_terminado');
        $this->setDisplayField('id_pro_ter');
        $this->setPrimaryKey('id_pro_ter');
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
            ->integer('id_pro_ter')
            ->allowEmpty('id_pro_ter', 'create');

        $validator
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->integer('pasteurizacion')
            ->allowEmpty('pasteurizacion');

        $validator
            ->date('fecha_elb')
            ->allowEmpty('fecha_elb');

        $validator
            ->scalar('lote_pro_ter')
            ->maxLength('lote_pro_ter', 20)
            ->allowEmpty('lote_pro_ter');

        $validator
            ->scalar('cantidad_pro_ter')
            ->maxLength('cantidad_pro_ter', 40)
            ->allowEmpty('cantidad_pro_ter');

        $validator
            ->integer('valor_cantidad_pro')
            ->allowEmpty('valor_cantidad_pro');

        $validator
            ->integer('brix')
            ->allowEmpty('brix');

        $validator
            ->integer('valor_etiqueta')
            ->allowEmpty('valor_etiqueta');

        $validator
            ->integer('valor_corcho')
            ->allowEmpty('valor_corcho');

        $validator
            ->integer('valor_capuchon')
            ->allowEmpty('valor_capuchon');

        $validator
            ->integer('num_cinta_sri')
            ->allowEmpty('num_cinta_sri');

        $validator
            ->integer('num_cinta_inca')
            ->allowEmpty('num_cinta_inca');

        $validator
            ->scalar('observaciones')
            ->maxLength('observaciones', 200)
            ->allowEmpty('observaciones');

        $validator
            ->scalar('id_mat_prim')
            ->maxLength('id_mat_prim', 15)
            ->allowEmpty('id_mat_prim');

        $validator
            ->scalar('id_tra')
            ->maxLength('id_tra', 15)
            ->allowEmpty('id_tra');

        return $validator;
    }
}

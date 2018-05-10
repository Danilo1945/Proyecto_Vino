<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Catalogo Model
 *
 * @method \App\Model\Entity\Catalogo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catalogo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Catalogo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catalogo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catalogo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catalogo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catalogo findOrCreate($search, callable $callback = null, $options = [])
 */
class CatalogoTable extends Table
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

        $this->setTable('catalogo');
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
            ->scalar('Descripcion')
            ->maxLength('Descripcion', 300)
            ->allowEmpty('Descripcion');

        $validator
            ->allowEmpty('Imagen');

        $validator
            ->integer('id_pro_ter')
            ->allowEmpty('id_pro_ter');

        return $validator;
    }
}
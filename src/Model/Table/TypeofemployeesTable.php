<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typeofemployees Model
 *
 * @method \App\Model\Entity\Typeofemployee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typeofemployee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Typeofemployee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typeofemployee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typeofemployee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typeofemployee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typeofemployee findOrCreate($search, callable $callback = null, $options = [])
 */
class TypeofemployeesTable extends Table
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

        $this->setTable('typeofemployees');
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}

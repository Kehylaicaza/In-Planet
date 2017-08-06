<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Payements Model
 *
 * @property \App\Model\Table\PlansTable|\Cake\ORM\Association\BelongsTo $Plans
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\InternetServicesTable|\Cake\ORM\Association\BelongsTo $InternetServices
 *
 * @method \App\Model\Entity\Payement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Payement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Payement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Payement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Payement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Payement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Payement findOrCreate($search, callable $callback = null, $options = [])
 */
class PayementsTable extends Table
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

        $this->setTable('payements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Plans', [
            'foreignKey' => 'plan_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('InternetServices', [
            'foreignKey' => 'internet_service_id',
            'joinType' => 'INNER'
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
            ->date('dates')
            ->allowEmpty('dates');

        $validator
            ->allowEmpty('credit_card');

        $validator
            ->date('limit_date')
            ->allowEmpty('limit_date');

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
        $rules->add($rules->existsIn(['plan_id'], 'Plans'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['internet_service_id'], 'InternetServices'));

        return $rules;
    }
}

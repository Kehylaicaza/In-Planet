<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InternetServices Model
 *
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\ModemsTable|\Cake\ORM\Association\BelongsTo $Modems
 * @property \App\Model\Table\PayementsTable|\Cake\ORM\Association\HasMany $Payements
 *
 * @method \App\Model\Entity\InternetService get($primaryKey, $options = [])
 * @method \App\Model\Entity\InternetService newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InternetService[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InternetService|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InternetService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InternetService[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InternetService findOrCreate($search, callable $callback = null, $options = [])
 */
class InternetServicesTable extends Table
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

        $this->setTable('internet_services');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Modems', [
            'foreignKey' => 'modem_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Payements', [
            'foreignKey' => 'internet_service_id'
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
            ->date('active_date')
            ->allowEmpty('active_date');

        $validator
            ->date('date_expiry')
            ->allowEmpty('date_expiry');

        $validator
            ->allowEmpty('internet_status');

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['modem_id'], 'Modems'));

        return $rules;
    }
}

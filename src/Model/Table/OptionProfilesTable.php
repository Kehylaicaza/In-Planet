<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OptionProfiles Model
 *
 * @property \App\Model\Table\OptionsTable|\Cake\ORM\Association\BelongsTo $Options
 * @property \App\Model\Table\ProfilesTable|\Cake\ORM\Association\BelongsTo $Profiles
 *
 * @method \App\Model\Entity\OptionProfile get($primaryKey, $options = [])
 * @method \App\Model\Entity\OptionProfile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OptionProfile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OptionProfile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OptionProfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OptionProfile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OptionProfile findOrCreate($search, callable $callback = null, $options = [])
 */
class OptionProfilesTable extends Table
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

        $this->setTable('option_profiles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Options', [
            'foreignKey' => 'option_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
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
        $rules->add($rules->existsIn(['option_id'], 'Options'));
        $rules->add($rules->existsIn(['profile_id'], 'Profiles'));

        return $rules;
    }
}

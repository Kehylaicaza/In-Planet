<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProfilesUsers Model
 *
 * @property \App\Model\Table\ProfilesTable|\Cake\ORM\Association\BelongsTo $Profiles
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\ProfilesUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProfilesUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProfilesUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProfilesUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProfilesUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProfilesUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProfilesUser findOrCreate($search, callable $callback = null, $options = [])
 */
class ProfilesUsersTable extends Table
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

        $this->setTable('profiles_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
        $rules->add($rules->existsIn(['profile_id'], 'Profiles'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}

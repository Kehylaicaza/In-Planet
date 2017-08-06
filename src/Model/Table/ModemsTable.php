<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modems Model
 *
 * @property \App\Model\Table\InstalationsTable|\Cake\ORM\Association\HasMany $Instalations
 * @property \App\Model\Table\InternetServicesTable|\Cake\ORM\Association\HasMany $InternetServices
 *
 * @method \App\Model\Entity\Modem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Modem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Modem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Modem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Modem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Modem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Modem findOrCreate($search, callable $callback = null, $options = [])
 */
class ModemsTable extends Table
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

        $this->setTable('modems');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Instalations', [
            'foreignKey' => 'modem_id'
        ]);
        $this->hasMany('InternetServices', [
            'foreignKey' => 'modem_id'
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
            ->allowEmpty('model');

        $validator
            ->allowEmpty('serial');

        return $validator;
    }
}

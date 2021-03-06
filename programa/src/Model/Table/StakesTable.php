<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stakes Model
 *
 * @property \App\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsTo $Teams
 *
 * @method \App\Model\Entity\Stake get($primaryKey, $options = [])
 * @method \App\Model\Entity\Stake newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Stake[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Stake|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Stake patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Stake[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Stake findOrCreate($search, callable $callback = null, $options = [])
 */
class StakesTable extends Table
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

        $this->setTable('stakes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id'
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
            ->scalar('question')
            ->allowEmpty('question');

        $validator
            ->allowEmpty('sel');

        $validator
            ->integer('ambit')
            ->allowEmpty('ambit');

        $validator
            ->allowEmpty('votes');

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
        $rules->add($rules->existsIn(['team_id'], 'Teams'));

        return $rules;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ppchallenges Model
 *
 * @property \App\Model\Table\PainpointsTable|\Cake\ORM\Association\BelongsTo $Painpoints
 * @property \App\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsTo $Teams
 *
 * @method \App\Model\Entity\Ppchallenge get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ppchallenge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ppchallenge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ppchallenge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ppchallenge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ppchallenge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ppchallenge findOrCreate($search, callable $callback = null, $options = [])
 */
class PpchallengesTable extends Table
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

        $this->setTable('ppchallenges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Painpoints', [
            'foreignKey' => 'painpoint_id'
        ]);
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
        $rules->add($rules->existsIn(['painpoint_id'], 'Painpoints'));
        $rules->add($rules->existsIn(['team_id'], 'Teams'));

        return $rules;
    }
}

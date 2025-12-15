<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kelas Model
 *
 * @property \App\Model\Table\SemsetersTable&\Cake\ORM\Association\BelongsTo $Semesters
 *
 * @method \App\Model\Entity\Kela newEmptyEntity()
 * @method \App\Model\Entity\Kela newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Kela[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kela get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kela findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Kela patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kela[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kela|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kela saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kela[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kela[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kela[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kela[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class KelasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('kelas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('semseters', [
            'foreignKey' => 'semseters_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('semseters_id')
            ->notEmptyString('semseters_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['id']), ['errorField' => 'id']);
        $rules->add($rules->existsIn('semseters_id', 'semseters'), ['errorField' => 'semester_id']);

        return $rules;
    }
}

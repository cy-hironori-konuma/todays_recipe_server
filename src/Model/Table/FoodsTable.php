<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Foods Model
 *
 * @property \Cake\ORM\Association\HasMany $RecipeFoods
 *
 * @method \App\Model\Entity\Food get($primaryKey, $options = [])
 * @method \App\Model\Entity\Food newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Food[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Food|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Food patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Food[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Food findOrCreate($search, callable $callback = null)
 */
class FoodsTable extends Table
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

        $this->table('foods');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('RecipeFoods', [
            'foreignKey' => 'food_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('unit', 'create')
            ->notEmpty('unit');

        $validator
            ->integer('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');

        $validator
            ->integer('updated_at')
            ->requirePresence('updated_at', 'create')
            ->notEmpty('updated_at');

        return $validator;
    }
}

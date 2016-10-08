<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RecipeFoods Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recipes
 * @property \Cake\ORM\Association\BelongsTo $Foods
 *
 * @method \App\Model\Entity\RecipeFood get($primaryKey, $options = [])
 * @method \App\Model\Entity\RecipeFood newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RecipeFood[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RecipeFood|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RecipeFood patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RecipeFood[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RecipeFood findOrCreate($search, callable $callback = null)
 */
class RecipeFoodsTable extends Table
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

        $this->table('recipe_foods');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Recipes', [
            'foreignKey' => 'recipe_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Foods', [
            'foreignKey' => 'food_id',
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
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['recipe_id'], 'Recipes'));
        $rules->add($rules->existsIn(['food_id'], 'Foods'));

        return $rules;
    }
}

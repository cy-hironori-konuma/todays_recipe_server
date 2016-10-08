<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recipe Entity
 *
 * @property int $id
 * @property int $amount
 * @property string $img_url
 * @property string $order
 * @property int $created_at
 * @property int $updated_at
 *
 * @property \App\Model\Entity\RecipeFood[] $recipe_foods
 */
class Recipe extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    public function index()
    {
        $recipes = $this->Recipes->find('all');
        $this->set([
            'recipes' => $recipes,
            '_serialize' => ['recipes']
        ]);
    }
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Food Entity
 *
 * @property int $id
 * @property string $name
 * @property string $unit
 * @property int $created_at
 * @property int $updated_at
 *
 * @property \App\Model\Entity\RecipeFood[] $recipe_foods
 */
class Food extends Entity
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
}

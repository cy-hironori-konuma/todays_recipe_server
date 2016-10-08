<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recipe'), ['action' => 'edit', $recipe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipe'), ['action' => 'delete', $recipe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipe Foods'), ['controller' => 'RecipeFoods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe Food'), ['controller' => 'RecipeFoods', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recipes view large-9 medium-8 columns content">
    <h3><?= h($recipe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipe->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($recipe->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($recipe->amount) ?></td>
        </tr>
        <tr>Ï
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= $this->Number->format($recipe->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= $this->Number->format($recipe->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Order') ?></h4>
        <?= $this->Text->autoParagraph(h($recipe->order)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Recipe Foods') ?></h4>
        <?php if (!empty($recipe->recipe_foods)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Recipe Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($recipe->recipe_foods as $recipeFoods): ?>
            <tr>
                <td><?= h($recipeFoods->id) ?></td>
                <td><?= h($recipeFoods->recipe_id) ?></td>
                <td><?= h($recipeFoods->food_id) ?></td>
                <td><?= h($recipeFoods->amount) ?></td>
                <td><?= h($recipeFoods->created_at) ?></td>
                <td><?= h($recipeFoods->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RecipeFoods', 'action' => 'view', $recipeFoods->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RecipeFoods', 'action' => 'edit', $recipeFoods->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RecipeFoods', 'action' => 'delete', $recipeFoods->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipeFoods->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

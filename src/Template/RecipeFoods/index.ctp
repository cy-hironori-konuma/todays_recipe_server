<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recipe Food'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recipeFoods index large-9 medium-8 columns content">
    <h3><?= __('Recipe Foods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recipe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipeFoods as $recipeFood): ?>
            <tr>
                <td><?= $this->Number->format($recipeFood->id) ?></td>
                <td><?= $recipeFood->has('recipe') ? $this->Html->link($recipeFood->recipe->id, ['controller' => 'Recipes', 'action' => 'view', $recipeFood->recipe->id]) : '' ?></td>
                <td><?= $recipeFood->has('food') ? $this->Html->link($recipeFood->food->name, ['controller' => 'Foods', 'action' => 'view', $recipeFood->food->id]) : '' ?></td>
                <td><?= $this->Number->format($recipeFood->amount) ?></td>
                <td><?= $this->Number->format($recipeFood->created_at) ?></td>
                <td><?= $this->Number->format($recipeFood->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recipeFood->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipeFood->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipeFood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipeFood->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

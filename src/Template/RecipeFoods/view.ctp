<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recipe Food'), ['action' => 'edit', $recipeFood->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipe Food'), ['action' => 'delete', $recipeFood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipeFood->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipe Foods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe Food'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recipeFoods view large-9 medium-8 columns content">
    <h3><?= h($recipeFood->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Recipe') ?></th>
            <td><?= $recipeFood->has('recipe') ? $this->Html->link($recipeFood->recipe->id, ['controller' => 'Recipes', 'action' => 'view', $recipeFood->recipe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Food') ?></th>
            <td><?= $recipeFood->has('food') ? $this->Html->link($recipeFood->food->name, ['controller' => 'Foods', 'action' => 'view', $recipeFood->food->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recipeFood->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($recipeFood->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= $this->Number->format($recipeFood->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= $this->Number->format($recipeFood->updated_at) ?></td>
        </tr>
    </table>
</div>

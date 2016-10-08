<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Food'), ['action' => 'edit', $food->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Food'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipe Foods'), ['controller' => 'RecipeFoods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipe Food'), ['controller' => 'RecipeFoods', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="foods view large-9 medium-8 columns content">
    <h3><?= h($food->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($food->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit') ?></th>
            <td><?= h($food->unit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($food->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= $this->Number->format($food->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= $this->Number->format($food->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Recipe Foods') ?></h4>
        <?php if (!empty($food->recipe_foods)): ?>
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
            <?php foreach ($food->recipe_foods as $recipeFoods): ?>
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

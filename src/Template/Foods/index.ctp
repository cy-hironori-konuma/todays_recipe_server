<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipe Foods'), ['controller' => 'RecipeFoods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe Food'), ['controller' => 'RecipeFoods', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foods index large-9 medium-8 columns content">
    <h3><?= __('Foods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($foods as $food): ?>
            <tr>
                <td><?= $this->Number->format($food->id) ?></td>
                <td><?= h($food->name) ?></td>
                <td><?= h($food->unit) ?></td>
                <td><?= $this->Number->format($food->created_at) ?></td>
                <td><?= $this->Number->format($food->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $food->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $food->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?>
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

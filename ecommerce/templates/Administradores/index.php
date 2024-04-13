<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Administradore> $administradores
 */
?>
<div class="administradores index content">
    <?= $this->Html->link(__('New Admin'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Administradores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Cargo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($administradores as $administradore): ?>
                <tr>
                    <td><?= $this->Number->format($administradore->ID) ?></td>
                    <td><?= h($administradore->Nome) ?></td>
                    <td><?= h($administradore->Cargo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $administradore->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administradore->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administradore->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

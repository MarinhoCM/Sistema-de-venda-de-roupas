<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vendedore> $vendedores
 */
?>
<div class="vendedores index content">
    <?= $this->Html->link(__('Novo Vendedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vendedores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Turno') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendedores as $vendedore): ?>
                <tr>
                    <td><?= $this->Number->format($vendedore->ID) ?></td>
                    <td><?= h($vendedore->Nome) ?></td>
                    <td><?= h($vendedore->Turno) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vendedore->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendedore->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendedore->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->ID)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pedido> $pedidos
 */
?>
<div class="pedidos index content">
    <?= $this->Html->link(__('New Pedido'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pedidos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('IDPedido') ?></th>
                    <th><?= $this->Paginator->sort('IDUsuario') ?></th>
                    <th><?= $this->Paginator->sort('DataPedido') ?></th>
                    <th><?= $this->Paginator->sort('StatusPedido') ?></th>
                    <th><?= $this->Paginator->sort('Total') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidos as $pedido): ?>
                <tr>
                    <td><?= $this->Number->format($pedido->IDPedido) ?></td>
                    <td><?= $pedido->IDUsuario === null ? '' : $this->Number->format($pedido->IDUsuario) ?></td>
                    <td><?= h($pedido->DataPedido) ?></td>
                    <td><?= h($pedido->StatusPedido) ?></td>
                    <td><?= $pedido->Total === null ? '' : $this->Number->format($pedido->Total) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pedido->IDPedido]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedido->IDPedido]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedido->IDPedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->IDPedido)]) ?>
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

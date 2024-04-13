<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->IDPedido], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->IDPedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->IDPedido), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pedidos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pedido'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pedidos view content">
            <h3><?= h($pedido->IDPedido) ?></h3>
            <table>
                <tr>
                    <th><?= __('StatusPedido') ?></th>
                    <td><?= h($pedido->StatusPedido) ?></td>
                </tr>
                <tr>
                    <th><?= __('IDPedido') ?></th>
                    <td><?= $this->Number->format($pedido->IDPedido) ?></td>
                </tr>
                <tr>
                    <th><?= __('IDUsuario') ?></th>
                    <td><?= $pedido->IDUsuario === null ? '' : $this->Number->format($pedido->IDUsuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $pedido->Total === null ? '' : $this->Number->format($pedido->Total) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataPedido') ?></th>
                    <td><?= h($pedido->DataPedido) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

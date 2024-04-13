<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedore $vendedore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vendedore'), ['action' => 'edit', $vendedore->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vendedore'), ['action' => 'delete', $vendedore->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vendedore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vendedores view content">
            <h3><?= h($vendedore->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($vendedore->Nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Turno') ?></th>
                    <td><?= h($vendedore->Turno) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($vendedore->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

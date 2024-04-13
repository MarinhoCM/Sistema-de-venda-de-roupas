<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore $administradore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Administradore'), ['action' => 'edit', $administradore->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Administradore'), ['action' => 'delete', $administradore->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Administradores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Administradore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="administradores view content">
            <h3><?= h($administradore->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($administradore->Nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo') ?></th>
                    <td><?= h($administradore->Cargo) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($administradore->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($usuario->Nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($usuario->Email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($usuario->Senha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($usuario->Endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('InformacoesDePagamento') ?></th>
                    <td><?= h($usuario->InformacoesDePagamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($usuario->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

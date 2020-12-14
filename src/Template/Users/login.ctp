<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your employee_id and password') ?></legend>
        <?= $this->Form->control('employee') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>

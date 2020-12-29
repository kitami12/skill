<h1>ユーザー登録</h1>

<!-- FormHelperのFormでフォームやボタンを作成してる -->
<?= $this->Form->create() ?>
<p>社員ID</p>
<input type="text" name="employee_id" id="employee_id">
<?= $this->Form->control('password') ?>
<?= $this->Form->button('ログイン') ?>
<?= $this->Form->end() ?>

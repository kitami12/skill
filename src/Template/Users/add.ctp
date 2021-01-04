<h1>ユーザー新規登録</h1>

<!-- FormHelperのFormでフォームやボタンを作成してる -->
<?= $this->Form->create('User') ?>
<p>社員ID</p>
<input type="text" name="employee_id" id="employee_id">

<p>パスワード</p>
<input type="password" name="password" id="password">


<p>メールアドレス</p>
<input type="text" name="email" id="email">

<p>年齢</p>
<input type="text" name="age" id="age">

<p>性別</p>
<input type="radio" name="gender" id="man">男
<input type="radio" name="gender" id="woman">女

<p>会社名</p>
<select name="会社名">
    <option>アンドロボティクス</option>
    <option>アンドロボウェブサービス</option>
    <option>アンドロボクイック</option>
    <option>アンドロボディオーナ</option>
    <option>アンドロボコアテクノロジー</option>
</select>
<?= $this->Form->button('登録') ?>

<?= $this->Form->end() ?>

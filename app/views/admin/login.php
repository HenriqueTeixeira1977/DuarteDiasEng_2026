<?php 

$this->loadViewInTemplate('admin/login', ['titulo'=>$titulo]); ?>
<!-- app/views/admin/login.php -->
<div class="container py-5" style="max-width:420px">
  <h3 class="mb-3">Acesso Admin</h3>
  <?php if(isset($_GET['error'])): ?>
    <div class="alert alert-danger">Credenciais inválidas.</div>
  <?php endif; ?>
  <form action="<?= BASE_URL ?>admin/auth" method="post">
    <div class="mb-3">
      <label class="form-label">E-mail</label>
      <input type="email" name="email" required class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Senha</label>
      <input type="password" name="senha" required class="form-control">
    </div>
    <button class="btn btn-primary w-100">Entrar</button>
  </form>
</div>

<!-- app/views/admin/dashboard.php -->
<div class="container py-4">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Dashboard</h2>
    <a href="<?= BASE_URL ?>admin/logout" class="btn btn-outline-secondary">Sair</a>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="card p-3">
        <h5>Total de Leads</h5>
        <h2><?= $totalLeads ?></h2>
      </div>
    </div>
    <!-- mais cards aqui -->
  </div>

  <div class="mt-4">
    <h5>Leads Recentes</h5>
    <table class="table table-striped">
      <thead><tr><th>Nome</th><th>Email</th><th>Telefone</th><th>Data</th></tr></thead>
      <tbody>
      <?php foreach($leadsRecentes as $l): ?>
        <tr>
          <td><?= htmlspecialchars($l['nome']) ?></td>
          <td><?= htmlspecialchars($l['email']) ?></td>
          <td><?= htmlspecialchars($l['telefone']) ?></td>
          <td><?= $l['created_at'] ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

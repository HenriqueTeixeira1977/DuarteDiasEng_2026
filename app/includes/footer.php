<?php if (!defined('BASE_URL')) { define('BASE_URL', ''); } ?>
<footer class="site-footer">
  <div class="container py-5">
    <div class="row gy-4">
      <div class="col-lg-4">
        <img src="<?php echo BASE_URL; ?>/assets/img/logos/dde-logo-white.png" alt="<?php echo EMPRESA_NOME; ?>" height="46" class="mb-3">
        <p class="footer-text">Especialistas em pintura e restauração de fachadas prediais, com assessoria técnica completa para síndicos e condomínios em Campinas e região.</p>
        <div class="d-flex gap-2 mt-3">
          <a href="https://wa.me/<?php echo EMPRESA_WHATSAPP; ?>" target="_blank" rel="noopener" class="social-icon" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
          <a href="#" target="_blank" rel="noopener" class="social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" target="_blank" rel="noopener" class="social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" target="_blank" rel="noopener" class="social-icon" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-6">
        <h6 class="footer-heading">Menu</h6>
        <ul class="footer-links">
          <li><a href="<?php echo BASE_URL; ?>/index.php">Home</a></li>
          <li><a href="<?php echo BASE_URL; ?>/app/views/pages/sobre.php">Sobre</a></li>
          <li><a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php">Serviços</a></li>
          <li><a href="<?php echo BASE_URL; ?>/app/views/pages/projetos.php">Projetos</a></li>
          <li><a href="<?php echo BASE_URL; ?>/app/views/pages/blog.php">Blog</a></li>
          <li><a href="<?php echo BASE_URL; ?>/app/views/pages/contato.php">Contato</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-6">
        <h6 class="footer-heading">Serviços</h6>
        <ul class="footer-links">
          <li><a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#pintura">Pintura de Fachadas</a></li>
          <li><a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#restauracao">Restauração de Fachadas</a></li>
          <li><a href="<?php echo BASE_URL; ?>/app/views/pages/servicos.php#assessoria">Assessoria Condominial</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h6 class="footer-heading">Contato</h6>
        <ul class="footer-links">
          <li><i class="bi bi-whatsapp me-2"></i><?php echo EMPRESA_WHATSAPP_EXIBE; ?></li>
          <li><i class="bi bi-envelope me-2"></i><?php echo EMPRESA_EMAIL; ?></li>
          <li><i class="bi bi-geo-alt me-2"></i><?php echo EMPRESA_CIDADE; ?></li>
        </ul>
      </div>
    </div>
    <hr class="footer-divider">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> <?php echo EMPRESA_NOME; ?> — Todos os direitos reservados.</span>
      <span>CREA registrado</span>
    </div>
  </div>
</footer>

<script src="<?php echo BASE_URL; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/site.js"></script>
</body>
</html>

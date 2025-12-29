<?php include '../../views/partials/header.php'; ?>

<link rel="stylesheet" href="../../../public/assets/css/contato.css">

<!-- HERO CONTATO -->
<section class="hero-contato d-flex align-items-center text-white">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-up">
                <h1 class="display-5 fw-bold">Entre em Contato</h1>
                <p class="lead mt-3">
                    Fale com a Duarte Dias Engenharia e tenha uma solução segura e eficiente para o seu projeto.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section class="py-5" id="contato">
    <div class="container">
        <div class="row g-5 align-items-stretch">

            <!-- INFORMAÇÕES -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="contato-info h-100">
                    <h3 class="fw-bold mb-4">Informações de Contato</h3>

                    <p>
                        Estamos prontos para atender sua demanda com responsabilidade técnica,
                        clareza e agilidade.
                    </p>

                    <ul class="list-unstyled mt-4">
                        <li>
                            <i class="bi bi-geo-alt"></i>
                            <strong>Atendimento:</strong> Campinas e Região
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <strong>Email:</strong> contato@duartediasengenharia.com.br
                        </li>
                        <li>
                            <i class="bi bi-whatsapp"></i>
                            <strong>WhatsApp:</strong> (19) 99733-9148
                        </li>
                    </ul>
                </div>
            </div>

            <!-- FORMULÁRIO -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contato-form h-100">
                    <h3 class="fw-bold mb-4">Solicite um Orçamento</h3>

                    <form action="/contato/enviar" method="POST">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="telefone" class="form-control" placeholder="Telefone / WhatsApp" required>
                            </div>

                            <div class="col-md-6">
                                <select name="servico" class="form-control" required>
                                    <option value="">Tipo de Serviço</option>
                                    <option>Projeto Estrutural</option>
                                    <option>Laudo Técnico</option>
                                    <option>Consultoria</option>
                                    <option>Acompanhamento de Obra</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <textarea name="mensagem" rows="4" class="form-control" placeholder="Descreva sua necessidade"></textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary btn-lg w-100">
                                    Enviar Solicitação
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MAPA -->
<section class="mapa">
    <iframe 
        src="https://www.google.com/maps?q=Campinas%20SP&output=embed" 
        loading="lazy">
    </iframe>
</section>

<!-- AOS -->
<script>
  AOS.init({
    duration: 900,
    once: true
  });
</script>

<?php include '../../views/partials/footer.php'; ?>

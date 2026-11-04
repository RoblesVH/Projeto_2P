<?php
include 'inc/header.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="bg-light">
    <div class="container-fluid py-5">
        <h2 class="mb-4 fw-bold"><i class="bi bi-cart3 text-success me-2"></i>Meu Carrinho</h2>

        <div class="row g-4">
            <!-- Lista de Produtos (Coluna Esquerda) -->
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 rounded-3 p-3">
                    <div class="table-responsive">
                        <table class="table align-middle table-borderless">
                            <thead>
                                <tr class="text-muted border-bottom fs-7 text-uppercase">
                                    <th scope="col" style="min-width: 250px;">Produto</th>
                                    <th scope="col" class="text-center" style="width: 120px;">Qtd</th>
                                    <th scope="col" class="text-end" style="width: 120px;">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Item 1 -->
                                <tr class="border-bottom">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/bananaPrata_p.png" class="img-fluid rounded me-3" alt="Banana" style="width: 60px; height: 60px; object-fit: cover;">
                                            <div>
                                                <h6 class="mb-0 fw-bold">Banana Prata Orgânica</h6>
                                                <small class="text-muted">Kg</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm border rounded">
                                            <button class="btn btn-link text-dark text-decoration-none px-2" type="button"><i class="bi bi-minus"></i></button>
                                            <input type="text" class="form-control text-center border-0 bg-transparent px-0" value="1" readonly>
                                            <button class="btn btn-link text-dark text-decoration-none px-2" type="button"><i class="bi bi-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="text-end fw-bold text-success">R$ 4,99</td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-danger border-0"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- Item 2 -->
                                <tr class="border-bottom">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="img/whisky_p.png" class="img-fluid rounded me-3" alt="Leite" style="width: 60px; height: 60px; object-fit: cover;">
                                            <div>
                                                <h6 class="mb-0 fw-bold">Whisky</h6>
                                                <small class="text-muted">Garrafa</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm border rounded">
                                            <button class="btn btn-link text-dark text-decoration-none px-2" type="button"><i class="bi bi-minus"></i></button>
                                            <input type="text" class="form-control text-center border-0 bg-transparent px-0" value="1" readonly>
                                            <button class="btn btn-link text-dark text-decoration-none px-2" type="button"><i class="bi bi-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="text-end fw-bold text-success">R$ 50,49</td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-danger border-0"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Ações do fundo da tabela -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <a href="index.php" class="btn btn-link text-decoration-none p-0 fw-bold" style="color: #F5B800;">
                            <i class="bi bi-arrow-left me-2"></i>Continuar Comprando
                        </a>
                        <button class="btn btn-outline-secondary btn-sm rounded-pill">Limpar Carrinho</button>
                    </div>
                </div>
            </div>

            <!-- Resumo do Pedido (Coluna Direita) -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 rounded-3 p-4 mb-3">
                    <h5 class="mb-4 fw-bold">Resumo da Compra</h5>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal (2 itens)</span>
                        <span class="fw-semibold">R$  55,48</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Entrega</span>
                        <span class="text-success fw-semibold">Grátis (Próximo ao Mercado)</span>
                    </div>

                    <hr class="my-3">

                    <!-- Cupom de Desconto -->
                    <div class="mb-4">
                        <label class="form-label small text-muted text-uppercase fw-bold">Cupom de Desconto</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Código do cupom">
                            <button class="btn btn-success" type="button">Aplicar</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-5 fw-bold">Total estimado:</span>
                        <span class="fs-4 fw-bold text-success">R$ 55,48</span>
                    </div>

                    <a href="entrega.php"><button class="btn btn-danger w-100 py-2.5 fw-bold rounded-pill shadow-sm mb-2">
                            Finalizar Compra <i class="bi bi-arrow-right ms-2"></i>
                        </button></a>
                </div>

                <!-- Aviso de Segurança/Entrega -->
                <div class="card bg-white border-0 p-3 shadow-sm rounded-3">
                    <div class="d-flex align-items-center text-muted">
                        <i class="bi bi-shield-check fs-4 text-success me-3"></i>
                        <p class="mb-0 small">Sua compra é 100% segura. Aceitamos Pix, Cartão de Crédito e Vale Alimentação.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--<script src="https://jsdelivr.net"></script>-->

    <?php
    include 'inc/footer.inc.php';
    ?>
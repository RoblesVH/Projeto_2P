<?php
include 'inc/header.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="bg-light">
    <div class="container-fluid py-5">
        <h2 class="mb-4 fw-bold"><i class="bi bi-cart3 text-success me-2"></i>Entrega</h2>

        <div class="row g-4">
            <!-- Lista de Produtos (Coluna Esquerda) -->
            <div class="col-lg-8">
    <div class="card shadow-sm border-0 rounded-3 p-4">
        <h5 class="mb-4 fw-bold">Dados de Entrega</h5>

        <form method="POST" action="processar_entrega.php">
            <div class="row g-3">
                <div class="col-12">
                    <label class="form-label">Nome completo</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu Nome" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF" required>
                </div>
                <div class="col-md-8">
                    <label class="form-label">Telefone</label>
                    <input type="tel" name="telefone" class="form-control" placeholder="Digite seu Número de Telefone" required>
                </div>
 
                <div class="col-md-4">
                    <label class="form-label">CEP</label>
                    <input type="text" name="cep" class="form-control" placeholder="Digite o CEP do local de entrega" required>
                </div>
                <div class="col-md-8">
                    <label class="form-label">Rua</label>
                    <input type="text" name="endereco" class="form-control" placeholder="Exemplo: Rua Indio Emo Bombado" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Número</label>
                    <input type="text" name="numero" class="form-control" placeholder="Exemplo: 1211" required>
                </div>
                <div class="col-md-8">
                    <label class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Digite o nome do Bairro do local de entrega" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Complemento</label>
                    <input type="text" name="complemento" class="form-control" placeholder="Digite os complementos(OPCIONAL)">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Digite o nome da cidade do local de entrega" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Estado</label>
                    <select name="estado" class="form-select" required>
                        <option value="">Selecione</option>
                        <option value="PR">PR</option>
                        <option value="PR">SP</option>
                        <option value="PR">SC</option>
                        <option value="PR">RJ</option>
                        <!-- ... demais UFs -->
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Forma de entrega</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="entrega" value="motoboy" id="motoboy" checked>
                        <label class="form-check-label" for="motoboy">Motoboy</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="entrega" value="retirada" id="retirada">
                        <label class="form-check-label" for="retirada">Retirada na loja</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="entrega" value="caminhao" id="caminhao">
                        <label class="form-check-label" for="retirada">Caminhão da Empresa</label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="carrinho.php" class="btn btn-link text-decoration-none fw-bold" style="color: #F5B800;">
                    <i class="bi bi-arrow-left me-2"></i>Voltar ao Carrinho
                </a>
                <button type="submit" class="btn btn-danger px-4 rounded-pill fw-bold">
                    Confirmar Entrega <i class="bi bi-arrow-right ms-2"></i>
                </button>
            </div>
        </form>
    </div>
</div>   

            <!-- Resumo do Pedido (Coluna Direita) -->
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 rounded-3 p-4 mb-3">
                    <h5 class="mb-4 fw-bold">Resumo da entrega + compra</h5>

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal (2 itens)</span>
                        <span class="fw-semibold">R$ 55,48</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Entrega</span>
                        <span class="text-success fw-semibold">R$ 15,99</span>
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
                        <span class="fs-4 fw-bold text-success">R$ 71,47</span>
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
<?php
session_start(); // Certifique-se de que esta linha está no topo
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<link rel="stylesheet" href="/online-pharmacy-system-main/styles/settings/color.css">
<link rel="stylesheet" href="/online-pharmacy-system-main/styles/settings/text.css">

<link rel="stylesheet" href="/online-pharmacy-system-main/styles/components/fm-checkout.css">

<script src="finalizar-compra.js"></script>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h4 class="mb-3">Informações do Cliente</h4>
                <form >

                    <div class="mb-3">
                        <label for="address">Endereço</label>
                        <input type="text" class="form-control" id="address" placeholder="Rua Exemplo, 123" >
                    </div>

                    <div class="mb-3">
                        <label for="city">Cidade</label>
                        <input type="text" class="form-control" id="city" placeholder="São Paulo" >
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="state">Estado</label>
                            <select class="custom-select d-block w-100" id="state" >
                                <option value="">Escolha...</option>
                                <option>Acre</option>
                                <option>Alagoas</option>
                                <option>Amapá</option>
                                <option>Amazonas</option>
                                <option>Bahia</option>
                                <option>Ceará</option>
                                <option>Distrito Federal</option>
                                <option>Espírito Santo</option>
                                <option>Goiás</option>
                                <option>Maranhão</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                                <option>Minas Gerais</option>
                                <option>Pará</option>
                                <option>Paraíba</option>
                                <option>Paraná</option>
                                <option>Pernambuco</option>
                                <option>Piauí</option>
                                <option>Rio de Janeiro</option>
                                <option>Rio Grande do Norte</option>
                                <option>Rio Grande do Sul</option>
                                <option>Rondônia</option>
                                <option>Roraima</option>
                                <option>Santa Catarina</option>
                                <option>São Paulo</option>
                                <option>Sergipe</option>
                                <option>Tocantins</option>
                            </select>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="zip">CEP</label>
                            <input type="text" class="form-control" id="zip" placeholder="12345-678">
                        </div>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Forma de Pagamento</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked >
                            <label class="custom-control-label" for="credit">Cartão de Crédito</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" >
                            <label class="custom-control-label" for="debit">Cartão de Débito</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input">
                            <label class="custom-control-label" for="paypal">Pix</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Nome no Cartão</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="João Silva">
                            <small class="text-muted">Nome completo exibido no cartão</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Número do Cartão</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="1234 5678 9012 3456">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiração</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="12/24">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="123">
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button style="background-color: var(--fm-color-primary);" class="btn btn-primary btn-lg btn-block" type="button" data-toggle="modal" data-target="#comprarModal">Finalizar Pedido</button>
                    <hr class="mb-4">
                </form>
            </div>

            <div class="col-md-4 order-md-2 mb-4">
                <h4 style="color: var(--fm-color-primary);" class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Seu Carrinho</span>
                    <span class="badge badge-secondary badge-pill"></span>
                </h4>
                <ul class="list-group mb-3" id="itens-container">
                    <?php include 'get-checkout.php'; ?>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Código promocional">
                        <div class="input-group-append">
                            <button style="background-color: var(--fm-color-primary);" type="submit" class="btn btn-secondary">Aplicar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="comprarModal" tabindex="-1" role="dialog" aria-labelledby="comprarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comprarModalLabel">Compra Realizada</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Sua compra foi realizada com sucesso!
                </div>
                <form class="modal-footer" action="http://localhost/home.php">
                    <button style="background-color: var(--fm-color-primary);" type="submit" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
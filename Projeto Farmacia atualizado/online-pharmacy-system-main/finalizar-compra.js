document.addEventListener('DOMContentLoaded', () => {
    const abrirCarrinhoBtn = document.getElementById('open-carrinho-btn');

    if (abrirCarrinhoBtn){
        abrirCarrinhoBtn.addEventListener('click', () => {
            itensCarrinho();
        })
    }


})



function itensCarrinho() {
    const allItens = document.querySelectorAll('.item');
    console.log(allItens);

    allItens.forEach(item => {
        console.log(item.id);

    });

    finalizar(allItens);
}

function finalizar(allItens) {
    const finalizarCompraBtn = document.getElementById('finalizar-compra-btn');

    finalizarCompraBtn.addEventListener('click', () => {
        window.location.href = 'teste.html'
    });

    const itensContainer = document.getElementById('itens-container');
   

    allItens.forEach(item => {
        const itemBody = `  <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
            <h6 class="my-0">${item.id}</h6>
            <small class="text-muted">Descrição breve</small>
        </div>
        <span class="text-muted">R$ 50,00</span>
    </li>`;

        itensContainer.insertAdjacentHTML('beforeend', itemBody);
    })
}
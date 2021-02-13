function exibirDetalhes(dados) {
    console.log(dados.id);
    resultado = getAjax('./detalhes_produtos', 'POST', dados.id, '');
    console.log(resultado)
}
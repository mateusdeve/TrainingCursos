$( ".btn-remover" ).click(function() {
    $("input[name=id_usuario]").val($(this).data('id'));
});

$( ".btn-alterar" ).click(function() {
    var user = $(this).data('user');
    $("#update_modal").find("input[name=nome]").val(user.nome);
    $("#update_modal").find("input[name=sobrenome]").val(user.sobrenome);
    $("#update_modal").find("input[name=telefonemovel]").val(user.telefonemovel);
    $("#update_modal").find("input[name=telefonefixo]").val(user.telefonefixo);
    $("#update_modal").find("input[name=cpfcnpj]").val(user.cpfcnpj);
    $("#update_modal").find("input[name=email]").val(user.email);
    $("#update_modal").find("input[name=cep]").val(user.cep);
    $("#update_modal").find("input[name=cidade]").val(user.cidade);
    $("#update_modal").find("input[name=endereco]").val(user.endereco);
    $("#update_modal").find("input[name=bairro]").val(user.bairro);
    $("#update_modal").find("input[name=curso]").val(user.curso);
    $("#update_modal").find("input[name=tipopessoa]").val(user.tipopessoa);
    $("#update_modal").find("input[name=id]").val(user.id);
    $("#update_modal").modal("show");
   //console.log(user)
});
$(document).ready(function() {
    $('#table').DataTable();
} );
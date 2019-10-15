//$('.modal_open').modal('show')

$( ".btn-remover" ).click(function() {
    $("input[name=id_usuario]").val($(this).data('id'));
});

$( ".btn-alterar" ).click(function() {
    var user = $(this).data('user');
    $("#update_modal").find("input[name=nome]").val(user.nome);
    $("#update_modal").find("input[name=email]").val(user.email);
    $("#update_modal").find("input[name=telefonemovel]").val(user.telefonemovel);
    $("#update_modal").find("input[name=curso]").val(user.curso);
    $("#update_modal").find("input[name=pg]").val(user.pg);
    $("#update_modal").find("input[name=id]").val(user.id);
    $("#update_modal").modal("show");
   //console.log(user)
});
$(document).ready(function() {
    $('#table').DataTable();
} );
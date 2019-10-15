$( ".btn-remover" ).click(function() {
    $("input[name=id_usuario]").val($(this).data('id'));
});

$( ".btn-alterar" ).click(function() {
    var user = $(this).data('user');
    $("#update_modal").find("input[name=curso]").val(user.curso);
    $("#update_modal").find("input[name=modal]").val(user.modal);
    $("#update_modal").find("input[name=sobre]").val(user.sobre);
    $("#update_modal").find("input[name=implemento]").val(user.implemento);
    $("#update_modal").find("input[name=valor]").val(user.valor);
    $("#update_modal").find("input[name=sobre1]").val(user.sobre1);
    $("#update_modal").find("input[name=sobre2]").val(user.sobre2);
    $("#update_modal").find("input[name=sobre3]").val(user.sobre3);
    $("#update_modal").find("input[name=sobre4]").val(user.sobre4);
    $("#update_modal").find("input[name=chamada]").val(user.chamada);
    $("#update_modal").find("input[name=sobrecurso]").val(user.sobrecurso);
    $("#update_modal").find("input[name=nomeimg]").val(user.nomeimg);
    $("#update_modal").find("input[name=id]").val(user.id);
    $("#update_modal").modal("show");
   //console.log(user)
});

$(document).ready(function() {
    $('#table').DataTable();
} );
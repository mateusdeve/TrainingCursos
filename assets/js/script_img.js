$( ".btn-img" ).click(function() {
    var user = $(this).data('user');
    $("#update_modalimg").find("input[name=fileimg]").val(user.fileimg);
    $("#update_modalimg").find("input[name=nomeimg]").val(user.imagem);
    $("#update_modalimg").find("input[name=id]").val(user.id);
    $("#update_modalimg").modal("show");
   // console.log(user.fileimg)
});
function scrollToElement(id)
{
  var offset = document.getElementById(id).offsetTop;
  window.scroll({
    top: offset,
    behavior: 'smooth',
  });
}

$(function(){
    const path      = window.location.href; //
    var array_path  = path.split( '/' );
    array_path.pop();
    var array_base_path = Object.assign( [], array_path );
    array_path.push( 'search' );

    const full_path = array_path.join( '/' );
    const base_path = array_base_path.join( '/' );

    $('#submit').click( function(e){

        e.preventDefault();
        const value = $('#text_field').val();

        req = $.ajax({
            type: "POST",
            url: full_path,
            data: {'busca' : value},
            dataType: "text",
            success: function(msg){
                $('#search_content').html('');

                if( msg == 'null' ){
                  return;
                }

                var array         = JSON.parse(msg);
                var first_element = null;
                
                array.forEach( (element, index, array) => {
                    var node_id = 'content' + element.id;
                    const {id, codigo, link_certificado, nome, curso, sobrenome} = element;

                    if(index == 0)
                    {
                        first_element = node_id;
                    }

                    var content = 
                    `
                    <br>
                     <div id="${node_id}" class="container-fluid mb-5 pb-5">

                          <h1 class="mt-4 mb-3 text-center">
                          </h1>
                          <div class="table-responsive">
                           <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Aluno</th>
                                    <th scope="col">Link do Certificado</th>
                                    <th scope="col">Curso</th>
                                    
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <th scope="row">
                                            ${codigo}
                                        </th>
                                        <th scope="row">
                                            ${nome} ${sobrenome}
                                        </th>
                                        <td>
                                            <a href="${link_certificado}" target="_blank">Clique aqui para vizualizar seu certificado</a>
                                        </td>
                                        <td>
                                           ${curso}
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                        </div>
                    `;
                    /*var node = $(`#${node_id}`).html();
                    if(node !== undefined)
                    {
                        return;
                    }*/

                    $('#search_content').append( content ); 

                });
              
                scrollToElement(first_element);
            }
        });

    });

});


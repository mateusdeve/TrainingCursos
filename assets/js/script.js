
$(function(){
	paginar( 0, true );
});

function goToPage( element ) {
  paginar( element.innerHTML - 1 );
}

function paginar( pagina, onload = false ) {

	const path            = window.location.href; //
    var array_path      = path.split( '/' );

    array_path.pop();

    var array_base_path = Object.assign( [], array_path );

    array_path.push( 'paginacao' );

    const full_path = array_path.join( '/' );
    const base_path = array_base_path.join( '/' );

    //e.preventDefault();

    //const value = $('#text_field').val();

    req = $.ajax({
        type: "POST",
        url: full_path,
        data: {'pagina' : pagina},
        dataType: "text",
        success: function(msg){
    		    if( msg == 'null' ){
              return;
            }

            var array         = JSON.parse(msg);
            var first_element = null;

            var cursos        = [];
            var nav_pages     = [];
            
            array.cursos.forEach( (element, index, array) => {
  
                const {id, sobre, curso, imagem, implemento, chamada, modal} = element;
                //const full_imagens = Array.isArray(imagens) ? imagens[0] : imagens;

                /*if(index == 0)
                {
                    first_element = node_id;
                }*/

                let content = 
                `<div class="col-lg-3 mb-3">
                      <div class="card h-100 text-center wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="0.4s">
                        <img class="card-img-top wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="0.4s" src="assets/img/${imagem}?>" alt="">
                        <div class="card-body wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                          <h4 class="card-title">${curso}</h4>
                          <h6 class="card-subtitle text-muted">${sobre}</h6>
                          <h6 class="card-subtitle mt-2 mb-4 text-dark"> ${implemento} </h6>
                          
                        </div>
                        <div class="card-footer wow flipInX" data-wow-delay="0.7s" data-wow-duration="0.8s" id="paginationLocationAll">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#${chamada}">
                            Saiba mais 
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="${chamada}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Como funciona o curso</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <p> ${modal} </p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>

                                    <form class="needs-validation" action="${base_path}/curso" method="post" novalidate>
                                        <input type="text" style="display:none" name="id" value="${id}"></input>
                                        <button class="btn btn-primary" role="button">Ir para o curso</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                        function scrollSmooth(dir, id)
                        {
                          var url = window.location.pathname.split('/');
                          if(url[url.length - 1] == dir)
                          {
                            var offset = document.getElementById(id).offsetTop;
                            window.scroll({
                              top: offset,
                              behavior: 'smooth',
                            });
                          }
                        }

                        window.onload = scrollSmooth('home','nome4');
                    </script>
                    `;

                cursos.push( content ); 

            });

            $(`#row`).html('');
            $('#row').append( cursos.join('') );

            if( !onload || parseInt(array.paginas) < 2 )
            {
              return;
            }

            for( let i = 0; i < parseInt(array.paginas); i++ )
            {
              let content = `<li id="page${i}" class="page-item page-item-ajax"> <a class="page-link" onclick="goToPage(this)">${i+1}</a> </li>`;

              /*var node = $(`#${node_id}`).html();
              if(node !== undefined)
              {
                  return;
              }*/
              
              nav_pages.push( content );
            }

            $(`#nav-pages`).html('');

            var previous = `
            <li class="page-item disabled">
              <a class="page-link" tabindex="-1"> Anterior </a>
            </li>`;

            var next = `          
            <li class="page-item">
              <a class="page-link"> Próximo </a>
            </li>`;

            //$('#nav-pages').append( previous );
            $('#nav-pages').append( nav_pages.join('') );
            //$('#nav-pages').append( next );

        },
        error: function(msg) {
        	console.log( msg );
        }
    });
}

$(document).ready(function(){
    var URLactual = window.location.href;
    $.ajax({
        url:'bdd/get_cars1.php',//cambiar a productos destacados
        type:'POST',
        data:{},
        success:function(data){
            console.log(data);
            let html=''
            for(var i = 0; i < data.datos.length;i++){
                if(URLactual =="http://localhost/idaPI/index.php?precio=1"){
                   
                    document.getElementById("enc").innerHTML= "Autos 0-30,000$";
                    html+=
                    '<div class="col-md-6 col-lg-4  col-sm-12 mt-2 mb-4">'+
                        '<a href="index.php?p='+data.datos[i].id+'">'+
                            '<div class="card shadow-lg p-4 mb-4 bg-white">'+
                                '<form action="index.php?p='+data.datos[i].id+'" method="post">'+
                                '<input type="hidden" name="nombre" value="'+data.datos[i].nombre+'"></input>'+
                                '<input type="hidden" name="precio" value="'+data.datos[i].precio+'"></input>'+





                                    '<img class="card-img-top" src="images/'+data.datos[i].rutimg+'">'+
                                    '<div class="card-body d-flex justify-content-center">'+
                                            '<h4 class="card-title d-flex justify-content-center text-dark">'+data.datos[i].nombre+'</h4>'+
                                            '<div class="input-group mb-3">'+
                                               '<ul class="list-group list-group-flush ">'+
                                                    '<li class="list-group-item text-dark">Vendedor: '+data.datos[i].vendedor+'</li>'+
                                                '</ul>'+
                                            '</div>'+
                                                            '<div>'+
                                                                    '<p class="h5 d-flex justify-content-center">'+'$'+data.datos[i].precio+ '</p>'+
                                                            '</div>'+
                        '</a>'+
                                                                    
                                
                                    '</div>'+
                                    '<div class="d-flex justify-content-center"> '+   
                                                                        '<button class="btn btn-outline-secondary" type="submit">Contactar</button>'+
                                                                    '</div>'+



                                '</form>'+
                            '</div>'+
                        
                    '</div>';
                }
                
                 
            }
            document.getElementById("lista_enc").innerHTML=html;
            
            
            

        },
        error:function(err){
            console.log(err);
        }
    });
   
});


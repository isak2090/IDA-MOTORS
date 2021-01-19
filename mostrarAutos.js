
    $(document).ready(function(){
        $.ajax({
            url:'bdd/get_cars.php',//cambiar a productos destacados
            type:'POST',
            data:{},
            success:function(data){
                console.log(data);
                let html=''
                for(var i = 0; i < data.datos.length;i++){
                    if(data.datos[i].id == p){
                        
                        document.getElementById("precio").innerHTML=data.datos[i].precio;
                        document.getElementById("nombre").innerHTML=data.datos[i].nombre;
                        document.getElementById("modelo").innerHTML=data.datos[i].modelo;
                        document.getElementById("marca").innerHTML=data.datos[i].marca;
                        document.getElementById("contacto").innerHTML=data.datos[i].contacto;
                        document.getElementById("vendedor").innerHTML=data.datos[i].vendedor;
                        document.getElementById("img").src="images/"+data.datos[i].rutimg;
                        //htmlImg+='<img src="images/'+data.datos[i].rutimg+'" class="img-fluid" alt="Responsive image"></img>"';
                        
                    }
                   
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
                document.getElementById("lista_p").innerHTML=html;
                
                //document.getElementById("img").innerHTML=htmlImg;
                

            },
            error:function(err){
                console.log(err);
            }
        });
       
    });

    
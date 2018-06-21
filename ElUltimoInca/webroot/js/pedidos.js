/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).ready(function () {


    $("#img1").click(function () {
        $("#txt_codigo").html("1");
        $("#txt_descripcion").html("Vino 750ml");
        $("#txt_precio").html("6");
        $("#txt_cantidad").val("1");
        var imagen = $("#img1").prop('src');

        document.getElementById("imgGeneral").src = "" + imagen + "";

    });
    $("#img2").click(function () {
        $("#txt_codigo").html("");
        $("#txt_descripcion").html("");
        $("#txt_precio").html("");

        ;

        var imagen = $("#img2").prop('src');

        document.getElementById("imgGeneral").src = "" + imagen + "";

    });
    $("#img3").click(function () {
        $("#txt_codigo").html("");
        $("#txt_descripcion").html("");
        $("#txt_precio").html("");



        var imagen = $("#img3").prop('src');
        document.getElementById("imgGeneral").src = "" + imagen + "";

    });






      var a=0;


    $("#btn_Agrega").click(function () {
        var codigo;
        var descripcion;
        var precio;
        var cantidad;


        $('#txt_codigo').each(function () {
            codigo = $(this).text();

        });
        $('#txt_descripcion').each(function () {
            descripcion = $(this).text();
        });
         $('#txt_precio').each(function () {
            precio = $(this).text();
        });
        cantidad=$("#txt_cantidad").val();
        
//        alert(codigo);
//        alert(descripcion);
//        alert(precio);
//        alert(cantidad);
        
        var total =precio*cantidad;
       
        $("#txt_total").html(""+total+"");
        
           
      
        
       
                    var items = "";
                    items += "<tr   >";
                    items += "<td><input type='hidden' name='periodo[]' value='"+codigo+"'>"+codigo+"</td>";
                    items += "<td><input type='hidden'  name='periodo[]' value='"+descripcion+"'>"+descripcion+"</td>";
                     items += "<td><input type='hidden' name='periodo[]' value='"+precio+"'>"+precio+"</td>";
                     items += "<td><input type='hidden' name='periodo[]' value='"+cantidad+"'>"+cantidad+"</td>";
                     items += " <td><input type='hidden' name='periodo[]' value='"+total+"'>"+total+"</td>";
                     
                    items += "<td><input type='button'class='btn btn-danger' id='borrar' name='borrar' value='Borrar'></td>";
                    items += "</tr>";

                    if ($("tbody#itemlist tr").length == 0)
                    {
                        $("#itemlist").append(items);
                        clear();
                    } else {
                        $("#itemlist").append(items);
                        clear();
                        return false;
                    }
        

    });
    

/////para tabla detalle pedidos
 $("tbody#itemlist").on("click", "#borrar", function () {
                    $(this).parent().parent().remove();
                });

                function clear() {
                    $("#itemperiodo").val("");
                    $("#itemanio").val("");

                }

                $('#anadir').on('click', function (e) {
                    e.preventDefault();
                   
                });

/// fin table detalle pedidos




function conts(valor){
        valor=valor+1;
        
        return valor;
    }


















window.onload = (function(){
try{
     $("#txt_cantidad").on('keyup', function(){
     var precio;
        var cantidad;
     $('#txt_precio').each(function () {
            precio = $(this).text();
        });
        cantidad=$("#txt_cantidad").val();
        var total =precio*cantidad;
        $("#txt_total").html(""+total+"");
        }).keyup();
//    $("input").on('keyup', function(){
//        var value = $(this).val().length;
//        $("p").html(value);
//    }).keyup();
    
    
}catch(e){}});






    $("#img1").mouseout(function () {
        $("#txt_stock").val("");
    });

    $("#img3").mouseout(function () {
        $("#txt_stock").val("");
    });


    $("#img2").mouseout(function () {
        $("#txt_stock").val(" ");
    });




    $("#img1").mouseover(function () {
        $("#txt_stock").text(" Vino de Mortiño 750ml");
    });

    $("#img3").mouseover(function () {
        $("#txt_stock").text("HAY STOCK");

    });


    $("#img2").mouseover(function () {
        $("#txt_stock").text(" NO HAY STOCK");
    });



});
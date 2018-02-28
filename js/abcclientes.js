/**
 * Created by admin on 18/01/2018.
 */
$('document').ready(function () {
    loadgrid();

    var contador = 1;

    function main(){
        $('.menu_bar').click(function(){
            // $('nav').toggle();

            if(contador == 1){
                $('nav').animate({
                    left: '0'
                });
                contador = 0;
            } else {
                contador = 1;
                $('nav').animate({
                    left: '-100%'
                });
            }

        });

    }


    $("#btn001").click(function (e) {
        e.preventDefault();
        //var vid, vnombre, vpaterno, vmaterno, vdireccion;
        var es ="";
        es+= validar('matricula');
        es+= validar('nombre');
        es+= validar('paterno');
        es+= validar('materno');
        es+= validar('direccion');
        es+= validar('edad');
        es+= validar('email');
        es +=validaredad();
        //es+=validarmail();

        if (es =="")
        {
            var matriculajq =$('#matricula').val();
            var nombrejq    =$('#nombre').val();
            var paternojq   =$('#paterno').val();
            var maternojq   =$('#materno').val();
            var direccionjq =$('#direccion').val();
            var edadjq      =$('#edad').val();
            var emailjq     =$('#email').val();

            jQuery.get("abcclientes.php",{matriculajs:matriculajq, nombrejs:nombrejq,
                appaternojs:paternojq, apmaternojs:maternojq, direccionjs:direccionjq,
            edadjs:edadjq, emailjs:emailjq},

                function (data, textStatus) {
                    if (data == "101"){
                        alert("Error. se esta intentando evadir un campo del formulario.");
                    }
                    if (data == "201"){
                        alert("Exito al enviar los datos al servidor");
                        limpiar();
                        $('#bootgrid').bootgrid('reload');


                    }
                    if (data == "102"){
                        alert("Hay un error en la query");
                    }
                    if (data == "103"){
                        alert("Error. intento de evadir o esta mal escrito email.");
                    }
                })


        }

        else{

            alert("te falta llenar los campos: "+ es );

        }



        })

    $("#btn002").click(function (e) {
        e.preventDefault();
        //var vid, vnombre, vpaterno, vmaterno, vdireccion;
        var es ="";
        es+= validar('matricula');
        es+= validar('nombre');
        es+= validar('paterno');
        es+= validar('materno');
        es+= validar('direccion');
        es+= validar('edad');
        es+= validar('email');
        es+= validar('id');

        es +=validaredad();
        //es+=validarmail();


        if (es =="")
        {
            var idjq        =$('#id').val();
            var matriculajq =$('#matricula').val();
            var nombrejq    =$('#nombre').val();
            var paternojq   =$('#paterno').val();
            var maternojq   =$('#materno').val();
            var direccionjq =$('#direccion').val();
            var edadjq      =$('#edad').val();
            var emailjq     =$('#email').val();


            jQuery.get("cambiosclientes.php",{seljs:2, updateidjs:idjq, matriculajs:matriculajq, nombrejs:nombrejq,
                    appaternojs:paternojq, apmaternojs:maternojq, direccionjs:direccionjq,
                    edadjs:edadjq, emailjs:emailjq},

                function (data, textStatus) {
                    if (data == "101"){
                        alert("Error. se esta intentando evadir un campo del formulario.");
                    }
                    if (data == "201"){
                        alert("Exito al enviar los datos al servidor");
                        limpiar();
                        $('#bootgrid').bootgrid('reload');

                    }
                    if (data == "102"){
                        alert("Hay un error en la query");
                    }
                    if (data == "103"){
                        alert("Error. intento de evadir o esta mal escrito email.");
                    }
                })


        }

        else{

            alert("te falta llenar los campos: "+ es );

        }



    })
    $("#btn0010").click(function (e) {
        e.preventDefault();

        var es ="";
        es+= validar('id');



        if (es =="")
        {
            var idjq  =$('#id').val();


            if (window.confirm("¿estas seguro en dar de baja el ID: "+$('#id').val()+"?")) {

                jQuery.get("bajaclientes.php",{ updateidjs:idjq},

                    function (data, textStatus) {
                        if (data == "101"){
                            alert("Error. se estan intentando evadir un campo del formulario.");
                        }
                        if (data == "201"){
                            alert("El ID "+$('#id').val()+" fue dado de baja correctamente");
                            limpiar();
                            $('#bootgrid').bootgrid('reload');


                        }
                        if (data == "102"){
                            alert("Hay un error en la query");
                        }
                    })


            }
                else {
                alert("Cancelacion correcta");
                return;


            }





        }

        else{

            alert("te falta llenar los campos: "+ es );

        }



    })
});
function validaredad() {
    if  ($('#edad').val() <=0)
    {
        return "La edad no puede ser menor a 0";   }
      else{
        return "";
    }

}

function validarmail() {
    var expresionregular =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    var email =$('#email').val();


        if(expresionregular.test (email)){
        return "";

    }
    else{
            return("Correo mal escrito");
    }

}
function validar(palabra) {
    if ($('#'+palabra).val()=="" )

    {
        $('#'+palabra).css('border-color', '#B40404');
        return palabra +"";
    }
    else
    {
        $('#'+palabra).css('border-color', '#48cc56');
        return "";
    }


}

function limpiar() {

    $('#matricula').val("");
    $('#nombre').val("");
    $('#paterno').val("");
    $('#materno').val("");
    $('#direccion').val("");
    $('#edad').val("");
    $('#email').val("");
    $('#id').val("");
}
function refresh()
{

    location.reload(true);
}



function loadgrid()
{


    var grid = $("#bootgrid").bootgrid({
        ajax: true,
        post: function ()
        {
            return {
                id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
            };
        },
        url: "selectclientes.php",
        formatters: {
            "commands": function(column, row)
            {
                return "<button type=\"button\" class=\"btedit command-edit\" data-row-id=\"" + row.id + "\" data-row-id2=\"" + row.clave + "\" data-row-id3=\"" + row.nombre + "\" data-row-id4=\"" + row.appaterno + "\" data-row-id5=\"" + row.apmaterno + "\" data-row-id6=\"" + row.direccion + "\" data-row-id7=\"" + row.edad + "\" data-row-id8=\"" + row.email +  "\"><span class=\"fa fa-pencil\"></span></button> " +
                    "<button type=\"button\" class=\"btdelete command-delete\" data-row-id=\"" + row.id + "\"><span class=\"fa fa-trash-o\"></span></button>";
            }
        }
    }).on("loaded.rs.jquery.bootgrid", function()
    {
        /* Executes after data is loaded and rendered */
        grid.find(".command-edit").on("click", function(e)
        {
            var updid=$(this).data("row-id");
            var updmat=$(this).data("row-id2");
            var updnom=$(this).data("row-id3");
            var updapp=$(this).data("row-id4");
            var updapm=$(this).data("row-id5");
            var upddir=$(this).data("row-id6");
            var updedad=$(this).data("row-id7");
            var updmail=$(this).data("row-id8");

            $('#matricula').val(updmat);
            $('#nombre').val(updnom);
            $('#paterno').val(updapp);
            $('#materno').val(updapm);
            $('#direccion').val(upddir);
            $('#edad').val(updedad);
            $('#email').val(updmail);
            $('#id').val(updid);

            $('body,html').animate({scrollTop : 0}, 500);
            return false;


            /*alert("mat:"+updmat+" nombre:"+updnom+" paterno:"
                +updapp+" materno:"+updmat+" direccion:"+upddir+" edad:"+updedad+" id:"+updid);

           */

        }).end().find(".command-delete").on("click", function(e)
        {
            if (window.confirm("¿estas seguro en dar de baja el ID: "+$(this).data("row-id")+"?")) {
                var idb = $(this).data("row-id");
                jQuery.get("bajaclientes.php",{ updateidjs:idb })
                $('#bootgrid').bootgrid('reload');

            }


        });
    });


}
function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;

    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sababado'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" De "+curMonth+" Del "+curYear;
    document.getElementById("date").innerHTML = date;

    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

var postbackSample =$(function(){

    var onSampleResized = function(e){
        var table = $(e.currentTarget); //tabla redimensionada
                };
    //$("#bootgrid").colResizable({resizeMode:'overflow'});

    $('#bootgrid').colResizable({
        liveDrag:true,
        gripInnerHtml:"<div class='grip'></div>",
        draggingClass:"dragging",
        postbackSafe:true,
        partialRefresh:true,
        onResize:onSampleResized
    });

});

var fakePostback = function(){
    //simulate postback here
    setTimeout(function(){
        //on postback over
        onPostbackOver();
    }, 700);
};

var onPostbackOver = function(){
    postbackSample();
};



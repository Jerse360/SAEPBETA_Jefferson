// $('.btnEditarPrograma').click(function(){
$(document).on('click','.btnEditarPrograma', function(){

    let idPrograma = $(this).attr("idPrograma");
    console.log("id programa:", idPrograma);
    let datos = new FormData();
    datos.append("id_programa", idPrograma);
    $.ajax({
        url: "ajax/programas.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
            $("#editDescripcionPrograma").val(respuesta["nombre_programa"]);
            $("#editVersionPrograma").val(respuesta["version_programa"]);
            $("#editIdPrograma").val(respuesta["ID_programas"]);

        }//funcion success


    })//fn ajax


})//fin click btnEditarPrograma

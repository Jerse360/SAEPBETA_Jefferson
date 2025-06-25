// EDITAR MODALIDAD
$(document).on('click', '.btnEditarModalidad', function () {
    let idModalidad = $(this).attr("idModalidad");
    console.log("id modalidad:", idModalidad);
    let datos = new FormData();
    datos.append("id_modalidad", idModalidad);

    $.ajax({
        url: "ajax/modalidades.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            $("#editIdModalidad").val(respuesta["ID_modalidad"]);
            $("#editNombreModalidad").val(respuesta["modalidad"]);
        }
    });
});


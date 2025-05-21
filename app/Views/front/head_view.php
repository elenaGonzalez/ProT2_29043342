<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/micss/styles.css">
    <title>Turismo Corrientes</title>
    <link rel="shortcut icon" href="assets/img/tyc_icon.png">
</head>

<body class="container-fluid">
    <div class="mt-2 p-2 bg-success">
        <header class="text-center">
            <h1 class="bg-success opacity-75">Vení a conocer Corrientes!!</h1>
        </header>
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
            function en_construccion() {
                alert("En construcción")
            }

            function limpiar_formulario() {
                document.getElementById("formulario_registro").reset();
            }

            function validar_registro() {
                let n = document.forms["formulario_registro"]["nombre"].value;
                let a = document.forms["formulario_registro"]["apellido"].value;
                let e = document.forms["formulario_registro"]["email"].value;
                let u = document.forms["formulario_registro"]["usuario"].value;
                let c = document.forms["formulario_registro"]["contraseña"].value;
                let rc = document.forms["formulario_registro"]["repetir_contraseña"].value;


                if (n == "") {
                    alert("El campo Nombre puede ser vacio");
                    return false;
                }
                if (a == "") {
                    alert("El campo Apellido puede ser vacio");
                    return false;
                }
                if (e == "") {
                    alert("El campo Email puede ser vacio");
                    return false;
                }
                if (u == "") {
                    alert("El campo Usuario puede ser vacio");
                    return false;
                }
                if (c == "") {
                    alert("El campo Contraseña puede ser vacio");
                    return false;
                }
                 if (rc == "") {
                    alert("El campo Contraseña puede ser vacio");
                    return false;
                }
                if (rc !== c ) {
                    alert("Las Contraseñas no coinciden");
                    return false;
                }

                 if (c == "") {
                    alert("El campo Contraseña puede ser vacio");
                    return false;
                }

                alert(`${n} Muchas gracias por registrarte :) `)
                limpiar_formulario();
            }
        </script>
    </div>
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

                const mensaje_n = document.getElementById("pn");
                const mensaje_a = document.getElementById("pa");
                const mensaje_e = document.getElementById("pe");
                const mensaje_u = document.getElementById("pu");
                const mensaje_c = document.getElementById("pc");
                const mensaje_rc = document.getElementById("prc");
                const mensaje_rc2 = document.getElementById("prc");

                mensaje_n.innerHTML = "";
                mensaje_a.innerHTML = "";
                mensaje_e.innerHTML = "";
                mensaje_u.innerHTML = "";
                mensaje_c.innerHTML = "";
                mensaje_rc.innerHTML = "";
                mensaje_rc2.innerHTML = "";

                let error = false;

                    if (n == "") {
                        mensaje_n.innerHTML = "El campo Nombre no puede ser vacio";
                        error = true;
                    }
                    if (a == "") {
                         mensaje_a.innerHTML = "El campo Apellido puede ser vacio";
                          error = true;
                    }
                    if (e == "") {
                         mensaje_e.innerHTML = "El campo Email puede ser vacio";
                          error = true;
                    }
                    if (u == "") {
                         mensaje_u.innerHTML = "El campo Usuario puede ser vacio";
                         error = true;
                    }
                    if (c == "") {
                         mensaje_c.innerHTML = "El campo Contraseña puede ser vacio";
                         error = true;
                    }
                    if (rc == "") {
                        mensaje_rc.innerHTML = "El campo Repetir Contraseña puede ser vacio";
                         error = true;
                    }
                    if (rc !== c) {
                        mensaje_rc2.innerHTML = "Las Contraseñas no coinciden";
                         error = true;
                    }
                     
                    if( error ){
                        return false;
                    }
                    alert(`${n}, gracias por registrarte!!`);
                    limpiar_formulario();
            }
        </script>
    </div>
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

            function limpiar_f_registro() {
                document.getElementById("formulario_registro").reset();
            }
             function limpiar_f_contacto() {
                document.getElementById("formulario_contacto").reset();
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
                         mensaje_a.innerHTML = "El campo Apellido no puede ser vacio";
                          error = true;
                    }
                    if (e == "") {
                         mensaje_e.innerHTML = "El campo Email no puede ser vacio";
                          error = true;
                    }
                    if (u == "") {
                         mensaje_u.innerHTML = "El campo Usuario no puede ser vacio";
                         error = true;
                    }
                    if (c == "") {
                         mensaje_c.innerHTML = "El campo Contraseña no puede ser vacio";
                         error = true;
                    }
                    if (rc == "") {
                        mensaje_rc.innerHTML = "El campo Repetir Contraseña no puede ser vacio";
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

            function validar_contacto() {
                let cn = document.forms["formulario_contacto"]["nombre"].value;
                let ca = document.forms["formulario_contacto"]["apellido"].value;
                let cs = document.forms["formulario_contacto"]["servicio"][0].text;
                let ce = document.forms["formulario_contacto"]["email"].value;
                let cc = document.forms["formulario_contacto"]["celular"].value;
                let cm = document.forms["formulario_contacto"]["consulta"].value;

                const mensaje_cn = document.getElementById("cn");
                const mensaje_ca = document.getElementById("ca");
                const mensaje_cs = document.getElementById("cs");
                const mensaje_ce = document.getElementById("ce");
                const mensaje_cc = document.getElementById("cc");
                const mensaje_cm = document.getElementById("cm");

                mensaje_cn.innerHTML = "";
                mensaje_ca.innerHTML = "";
                //mensaje_cs.innerHTML = "";
                mensaje_ce.innerHTML = "";
                mensaje_cc.innerHTML = "";
                mensaje_cm.innerHTML = "";

                let error_c = false;

                    if (cn == "") {
                        mensaje_cn.innerHTML = "El campo Nombre no puede ser vacio";
                        error_c = true;
                    }
                    if (ca == "") {
                         mensaje_ca.innerHTML = "El campo Apellido no puede ser vacio";
                          error_c = true;
                    }
                     if (cs == "") {
                         mensaje_u.innerHTML = "El campo Servicio no puede ser vacio";
                         error = true;
                    }
                    if (ce == "") {
                         mensaje_ce.innerHTML = "El campo Email no puede ser vacio";
                          error_c = true;
                    }
                    if (cc == "") {
                         mensaje_ce.innerHTML = "El campo Celular no puede ser vacio";
                         error_c = true;
                    }
                    if (cm == "") {
                        mensaje_cm.innerHTML = "El campo Mensaje no puede ser vacio";
                         error_c = true;
                    }
                     
                    if( error_c ){
                        return false;
                    }
                    alert(`${cn}, gracias por tu consulta. Nos comunicaremos en breve!!`);
                    limpiar_formulario();
            }
        </script>
    </div>
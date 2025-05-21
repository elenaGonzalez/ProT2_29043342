<div class="p-5 d-flex align-items-center justify-content-center">
    <div class="w-50">
            <form class="bg-success-subtle p-2" id="formulario_registro" onsubmit="return validar_registro()" >
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" 
                    name="nombre" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" 
                    name="apellido" placeholder="Apellido">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput3" 
                    name="email" placeholder="email@ejemplo.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label">Usuario</label>
                    <input type="usuario" class="form-control" id="exampleFormControlInput4" 
                    name="usuario" placeholder="Nombre de usuario">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Contraseña</label>
                    <input type="password" id="exampleFormControlInput5" class="form-control" 
                    name="contraseña" placeholder="Contraseña">
                </div>
                 <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">Contraseña</label>
                    <input type="password" id="exampleFormControlInput5" class="form-control" 
                    name="repetir_contraseña" placeholder="Repetir Contraseña">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Registrar</button>
                <button type="button" class="btn btn-sm btn-danger" onclick="limpiar_formulario()">Cancelar</button>
            </form>
           
        </div>
</div>
<main class="principal">
    <div class="container">
        <form action="" class="form">
            <h2>Lista de Usuarios</h2>

            <div class="form__group">
                <select name="alfabeto" id="alfabeto">
                    <option value="">Item 1</option>
                    <option value="">Item 2</option>
                    <option value="">Item 3</option>
                </select>

                <select name="rol" id="rol">
                    <option value="">Item 1</option>
                    <option value="">Item 2</option>
                    <option value="">Item 3</option>
                </select>
            </div>
            <div class="form__group">
                <select name="departamento" id="departamento">
                    <option value="">Item 1</option>
                    <option value="">Item 2</option>
                    <option value="">Item 3</option>
                </select>

                <select name="municipio" id="municipio">
                    <option value="">Item 1</option>
                    <option value="">Item 2</option>
                    <option value="">Item 3</option>
                </select>
            </div>

            <div class="form__base">
                <table class="form__table">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Departamento</th>
                        <th>municipio</th>
                    </tr>
                    <?php
                    foreach($listado as $row=>$list){
                    ?>
                        <tr>
                        <td><?=$list['id_usuario']?></td>
                        <td><?=$list['nombre_usuario']?></td>
                        <td><?=$list['apellido_usuario']?></td>
                        <td><?=$list['user_usuario']?></td>
                        <td><?=$list['rol_usuario']?></td>
                        <td><?=$list['nombre_departamento']?></td>
                        <td><?=$list['nombre_municipio']?></td>
                    </tr><?php
                    
                    };
                    ?>
                </table>
            </div>
        </form>
    </div>
</main>
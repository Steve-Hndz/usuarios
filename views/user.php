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
                    <option value="">Roles</option>
                        <?php
                        foreach($roles as $row=>$rol){
                            ?>
                            <option value="<?= $rol['rol_usuario']?>"><?= $rol['rol_usuario']?></option>
                            <?php
                        }
                        ?>
                </select>
            </div>
            <div class="form__group">
                <select name="departamento" id="departamento">
                    <option value="">Departamento</option>
                    <?php
                    foreach($departamentos as $row=>$depa){
                        ?>
                        <option value="<?= $depa['nombre_departamento']?>"><?= $depa['nombre_departamento']?></option>
                        <?php
                    }
                    ?>
                </select>

                <select name="municipio" id="municipio">
                    <option value="">Municipio</option>
                        <?php
                        foreach($municipios as $row=>$muni){
                            ?>
                            <option value="<?= $muni['nombre_municipio']?>"><?= $muni['nombre_municipio']?></option>
                            <?php
                        }
                        ?>
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
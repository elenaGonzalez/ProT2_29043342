<div class="shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="container p-5">
        <h1>Reservas</h1>
        <a class="btn btn-primary" href="<?php echo base_url('/panel') ?>" role="button">Perfil</a>
        <div class="table-responsive">
            <table class="table table-responsive-md table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">Paseo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Origen</th>
                        <th scope="col">Comentario</th>
                        <th scope="col">Calificación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($reservas) && is_array($reservas)): ?>
                        <?php foreach ($reservas as $reservas_item): ?>
                            <tr>
                                <td><?= esc($reservas_item["id_servicio"]); ?></td>
                                <td><?= esc($reservas_item["fecha"]); ?></td>
                                <td><?= esc($reservas_item["origen"]); ?></td>
                                <td><?= esc($reservas_item["comentario"]); ?></td>
                                <td>
                                <?php for ($i = 0; $i < $reservas_item["calificacion"]; $i++) : ?>
                                    <span class="fa fa-start">
                                        <i class="icono">
                                            <img src="<?php echo base_url('assets/img/star-fill.svg') ?>" alt="Icono" width="24" height="24">
                                        </i>
                                    </span>
                                <?php endfor; ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else : ?>
                        <td class="col-5">No hay reservas</td>
                        </tr>
                </tbody>
            </table>
        <?php endif ?>
        </tbody>
        </table>
        </div>
    </div>
</div>
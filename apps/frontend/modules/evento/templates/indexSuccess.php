<h1>Eventos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>User</th>
      <th>Categoria</th>
      <th>Fecha inicio</th>
      <th>Fecha termino</th>
      <th>Lugar</th>
      <th>Tipo evento</th>
      <th>Logo</th>
      <th>Telefono</th>
      <th>Mail</th>
      <th>Twitter</th>
      <th>Facebook</th>
      <th>Web1</th>
      <th>Ranking</th>
      <th>Estado</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($eventos as $evento): ?>
    <tr>
      <td><a href="<?php echo url_for('evento/show?id='.$evento->getId()) ?>"><?php echo $evento->getId() ?></a></td>
      <td><?php echo $evento->getNombre() ?></td>
      <td><?php echo $evento->getUserId() ?></td>
      <td><?php echo $evento->getCategoriaId() ?></td>
      <td><?php echo $evento->getFechaInicio() ?></td>
      <td><?php echo $evento->getFechaTermino() ?></td>
      <td><?php echo $evento->getLugar() ?></td>
      <td><?php echo $evento->getTipoEvento() ?></td>
      <td><?php echo $evento->getLogo() ?></td>
      <td><?php echo $evento->getTelefono() ?></td>
      <td><?php echo $evento->getMail() ?></td>
      <td><?php echo $evento->getTwitter() ?></td>
      <td><?php echo $evento->getFacebook() ?></td>
      <td><?php echo $evento->getWeb1() ?></td>
      <td><?php echo $evento->getRanking() ?></td>
      <td><?php echo $evento->getEstado() ?></td>
      <td><?php echo $evento->getCreatedAt() ?></td>
      <td><?php echo $evento->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('evento/new') ?>">New</a>

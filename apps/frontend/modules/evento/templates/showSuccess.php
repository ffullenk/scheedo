<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $evento->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $evento->getNombre() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $evento->getUserId() ?></td>
    </tr>
    <tr>
      <th>Categoria:</th>
      <td><?php echo $evento->getCategoriaId() ?></td>
    </tr>
    <tr>
      <th>Fecha inicio:</th>
      <td><?php echo $evento->getFechaInicio() ?></td>
    </tr>
    <tr>
      <th>Fecha termino:</th>
      <td><?php echo $evento->getFechaTermino() ?></td>
    </tr>
    <tr>
      <th>Lugar:</th>
      <td><?php echo $evento->getLugar() ?></td>
    </tr>
    <tr>
      <th>Tipo evento:</th>
      <td><?php echo $evento->getTipoEvento() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $evento->getLogo() ?></td>
    </tr>
    <tr>
      <th>Telefono:</th>
      <td><?php echo $evento->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Mail:</th>
      <td><?php echo $evento->getMail() ?></td>
    </tr>
    <tr>
      <th>Twitter:</th>
      <td><?php echo $evento->getTwitter() ?></td>
    </tr>
    <tr>
      <th>Facebook:</th>
      <td><?php echo $evento->getFacebook() ?></td>
    </tr>
    <tr>
      <th>Web1:</th>
      <td><?php echo $evento->getWeb1() ?></td>
    </tr>
    <tr>
      <th>Ranking:</th>
      <td><?php echo $evento->getRanking() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $evento->getEstado() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $evento->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $evento->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('evento/edit?id='.$evento->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('evento/index') ?>">List</a>

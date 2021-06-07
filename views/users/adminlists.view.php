<h1 style="display: flex; justify-content:center; ">Admin Lists</h1>
<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php foreach($data as $users): ?>
  <tbody>
    <tr>
      <th scope="row"><?= $users->u_id; ?></th>
      <td><?= $users->u_name; ?></td>
      <td><?= $users->u_email; ?></td>
      <td colspan="2"><?= $users->status; ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
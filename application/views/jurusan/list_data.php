<?php
$no = 1;
foreach ($datajurusan as $jurusan) {
?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $jurusan->nama; ?></td>
    <td class="text-center" style="min-width:230px;">
      <button class="btn btn-warning update-datajurusan" data-id="<?php echo $jurusan->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
      <button class="btn btn-danger konfirmasiHapus-jurusan" data-id="<?php echo $jurusan->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      <button class="btn btn-info detail-datajurusan" data-id="<?php echo $jurusan->id; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
    </td>
  </tr>
<?php
  $no++;
}
?>
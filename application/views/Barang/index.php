<br>

<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row-mt3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa<strong> berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="container ">
        <table class="table table-striped table-hover ">

            <thead>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Alamat Supplier</th>
                <th>Jenis</th>
                <th>Stock</th>
                <th>Merek</th>
                <th>Lokasi Barang</th>
                <th> Aksi</th>

            </thead>
            <?php
            $count = 0;
            foreach ($barang as $row) {
                $count = $count + 1;

            ?>

                <tr>
                    <td><?php echo $count ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->kode ?></td>
                    <td><?php echo $row->alamat ?></td>
                    <td><?php echo $row->jenis ?> </td>
                    <td><?php echo $row->stock ?></td>
                    <td><?php echo $row->merek ?></td>
                    <td><?php echo $row->lokasi ?></td>
                    <td>
                        <a href='<?php echo base_url('Barang/AksiDeleteData/') . $row->kode ?>' class='btn btn-sm btn-danger'>Delete</a>
                        <a href='<?php echo base_url() . $row->kode ?>' class='btn btn-sm btn-warning'>Update</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>

</div>
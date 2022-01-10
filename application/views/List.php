<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    
    <link rel="icon" type="image/png" href="assets/image/icon.png"/>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"/>

</head>

<body>

<div class="container">
        <div class="row">
           <div class="mx-auto mt-5">
                <a class="navbar-brand" href="c_Home">
                    <img src="<?= base_url() ?>assets/img/logo.png" style="width: 162px; height: 34;">
                </a>
           </div>
        </div>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">Id Produk</th>
                <th class="text-center">Nama Produk</th>
                <th class="text-center">Jumlah Produk</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Hapus</th>        
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($dataProduk as $data){
                    echo" <td class='text-center'>". $data['id_list']." </td>
                        <td class='text-center'>". $data['nama_barang']." </td>
                        <td class='text-center'>". $data['jumlah_barang']." </td>
                        <td class='text-center'>". $data['harga_barang']." </td>
                        <td class='text-center'>
                        <button data-toggle='modal' data-target='#editBarang".$data['id_list']."' type='button' style='background-color: #4183D7; border: 1px; border-radius: 7px; color:whitesmoke; font-size:13px;'> Edit </button> </td>
                        <td class='text-center'>
                        <button data-toggle='modal' data-target='#hapusBarang".$data['id_list']."' type='button' style='background-color: #F6404F; border: 1px; border-radius: 7px; color:whitesmoke; font-size:13px;'> Hapus </button> </td> </tr> ";} 
                ?>
        </tbody>
    </table>
</div>

                <!-- Edit Barang -->
                <form method="post" action='<?php echo base_url().'c_List/update';?>'>
                <?php foreach ($dataProduk as $data){
                    echo "<div class='modal fade' id='editBarang".$data['id_list']."' tabindex='-1' aria-labelledby='exampleBarangLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleBarangLabel'>Edit Berobat</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body' style='text-align: left'>
                                    <input hidden class='form-control' name='id_list' value='".$data['id_list']."'></input>
                            <input class='form-control' name='namaProduk' value='".$data['nama_barang']."'></input>
                            <input class='form-control' name='jumlahBarang' value='".$data['jumlah_barang']."'></input>
                            </div>
                            <div class='modal-footer'>
                                <button type='submit' class='btn btn-primary' style='background-color: #119e37; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);'>Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>";
                }?></form>

                <!-- Hapus Barang -->
                <form method="post" action='<?php echo base_url().'c_List/hapus';?>'>
                <?php foreach ($dataProduk as $data){
                    echo "<div class='modal fade' id='hapusBarang".$data['id_list']."' tabindex='-1' aria-labelledby='exampleBarangLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleBarangLabel'>Edit Tempat Cuci</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body' style='text-align: left'>
                                    <input hidden class='form-control' name='id_list' value='".$data['id_list']."'></input>
                                    <h6> Apakah Anda Yakin Ingin Menghapus Data dengan ID : ".$data['id_list']." ? </h6>
                            </div>
                            <div class='modal-footer'>
                                <button type='submit' class='btn btn-primary' style='background-color: #FF0000; border: 3px solid whitesmoke; border-radius: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);'>Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>";
                }?></form>

                <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <!--Ajax for json-->
                <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>  
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>


</body>
</html>

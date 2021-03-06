<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <style type="text/css" media="print">
        @page { 
            size: 21cm 29.7cm;
            margin: 1cm 1cm 1cm 1cm}
    </style>

    <title><?php echo $judul?></title>

    </head>
    <body>
        <div class="card p-4 col-md-5" style="width: 31rem">
            <img class="img-card-top img-fluid" src="<?php echo base_url()?>assets/img/header.jpg" alt="">
            <div class="card-body">
                <hr class="m-0 p-0 mb-2">
                <h5 class="mb-4 text-center">Kartu Anggota</h5>
                <?php foreach($kartu as $kar) {?>
                <table class="mb-2">
                    <tr><th>NIS</th><td>: <?php echo $kar->nis?></td></tr>
                    <tr><th>Nama</th><td>: <?php echo $kar->nama?></td></tr>
                    <tr><th>Jenis Kelamin</th><td>: <?php echo $kar->jk?></td></tr>
                    <tr><th>Kelas</th><td>: <?php echo $kar->kelas?></td></tr>
                    <tr><th>Jurusan</th><td>: <?php echo $kar->jurusan?></td></tr>
                </table>
                <?php } ?>
            </div>
            <img src="<?php echo base_url()?>assets/img/bc.png" alt="">
        </div>

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

    <script>
        window.print();
        window.open('_blank');
    </script>
  </body>
</html>
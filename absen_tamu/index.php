<!DOCTYPE html>
<html>
<head>
    <title>Absen Tamu</title>
    <!-- CSS -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="icon" href="../assets/img/favicon2.svg"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/font/style.css"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>

    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"/>

    <!-- JS -->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- META -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include 'modal.php' ?>
    <div class="container container-list d-none">
        <h3 class="font-normal my-3">List Kehadiran Tamu</h3>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Kehadiran</th>
                <!-- <th scope="col">Tgl</th> -->
              </tr>
            </thead>
            <tbody>
            <?php 
                include '../conn.php';

                $result = mysqli_query($conn, "SELECT * FROM kehadiran");
                $i = 1;
                while ($row=mysqli_fetch_row($result))
                {
            ?>
              <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td class="font-weight-bold <?php if($row[3] == 'Hadir'){ echo 'text-success'; }else{ echo 'text-danger'; } ?>"><?php echo $row[3]; ?></td>
                <!-- <td><?php echo $row[4]; ?></td> -->
              </tr>
            <?php } ?>
            </tbody>
          </table>
    </div>
<script>
    $(document).ready(function(){
        $("#btn-lihat-list").click(function(){
            var pw = $("#pwlist").val();
            if(pw == 'melzha-rizki'){
                $('.modal-lihat-list').addClass('d-none');
                $('.container-list').removeClass('d-none');
            }else{
                $('.error-list').removeClass('d-none');
            }
        });
    });
</script>
</body>
</html>
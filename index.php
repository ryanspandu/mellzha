<!DOCTYPE html>
<html>
<head>
    <title>Melzha & Rizki - Wedding Invitation</title>
    <?php include 'head.php'; ?>
</head>
<body>
    <?php include 'modal/_welcome.php'; ?>
    <div class="container-fluid px-0">

        <!-- Section 1 -->
        <div class="bg-main-container" style="background-image: url('assets/img/bg-main-container.jpg');">
            <div class="bg-main-hide-container w-100 h-100 d-flex flex-column align-items-center justify-content-end text-white pb-5">
                <p class="">WE ARE GETTING MARRIED</p>
                <h1 class="signature3">
                    Melzha & Rizki
                </h1>
                <p class="">06 JUNE 2021</p>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="bg-blue-main pb-4 section2">
            <div class="container-lg d-flex flex-column align-items-center text-white">
                <img src="assets/img/002-bouquet.svg" width="120px" class="mb-4"/>
                <p class="text-center mt-3" style="max-width: 550px;">
                    “And of His signs is that He created for you from yourselves mates that you may find tranquillity in them; and He placed between you affection and mercy. Indeed in that are signs for a people who give thought.”
                </p>
                <p class="text-center mt-5">
                    ( QS. Ar- Rum 21 )
                </p>
            </div>
        </div>
    </div>
</body>

<!-- Script JS -->
<script>
    $(document).ready(function(){
        $('.open-invitation').click(function(){
            $('.modal-welcome').addClass('d-none');
            $('.modal-welcome').removeClass('d-flex');
        });
    });
</script>

</html>
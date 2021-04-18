<!DOCTYPE html>
<html>
<head>
    <title>Melzha & Rizki - Wedding Invitation</title>
    <?php include 'head.php'; ?>
</head>
<body>
    <?php include 'modal/_welcome.php'; ?>
    <div class="container-fluid px-0 d-none">

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
                <img src="assets/img/002-bouquet.svg" width="90px" class="mb-4"/>
                <p class="text-center mt-3 text-light" style="max-width: 550px;">
                    “And of His signs is that He created for you from yourselves mates that you may find tranquillity in them; and He placed between you affection and mercy. Indeed in that are signs for a people who give thought.”
                </p>
                <p class="text-center mt-2 text-light">
                    ( QS. Ar- Rum 21 )
                </p>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="section3 py-5">
            <div class="container-lg py-4">
                <div class="row text-blue-main">
                    <div class="col-12 col-md-4 text-center">
                        <h4 class="">Demelzha</h4>
                        <p class="mb-0">Putri dari</p>
                        <p class="mb-0">Bapak</p>
                        <p class="mb-0">& Ibu</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <p class="font-weight-bold signature3 text-center" style="font-size: 100px;">&</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <h4 class="">Rizki</h4>
                        <p class="mb-0">Putra dari</p>
                        <p class="mb-0">Bapak</p>
                        <p class="mb-0">& Ibu</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="section4 bg-blue-second py-5">
            <div class="container-lg py-4 text-white">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="signature3">Save The Date</h1>
                    </div>
                    <div class="col-12 text-center">
                        <div id="countdown"></div>
                    </div>
                </div>
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
            $('.container-fluid').removeClass('d-none');
        });
    });
</script>

<!-- Countdown -->
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jun 5, 2021 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
    }, 1000);
</script>

</html>
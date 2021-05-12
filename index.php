<!DOCTYPE html>
<html>
<head>
    <title>Melzha & Rizki - Wedding Invitation</title>
    <!-- CSS -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="icon" href="./assets/img/favicon2.svg"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./assets/font/style.css"/>
    <link rel="stylesheet" href="./assets/css/style.css"/>

    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"/>

    <!-- JS -->
    <script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- META -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include 'modal/welcome.php'; ?>
    <div class="container-fluid px-0 d-none">

        <!-- Section 1 -->
        <div class="bg-main-container" style="background-image: url('assets/img/foto2-min.jpg');">
            <div class="bg-main-hide-container w-100 h-100 d-flex flex-column align-items-center justify-content-end text-white pb-5">
                <p class="">WE ARE GETTING MARRIED!</p>
                <h1 class="signature3" style="font-size: 75px;">
                    Melzha & Rizki
                </h1>
                <p class="">19th June 2021</p>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="bg-blue-main pb-2 section2 position-relative">
            <div class="container-lg d-flex flex-column align-items-center text-white">
                <img src="assets/img/wedding-ring.svg" width="90px" class="mb-2"/>
                <p class="text-center mt-3 text-white-50" style="max-width: 550px;">
                    “And of His signs is that He created for you from yourselves mates that you may find tranquillity in them; and He placed between you affection and mercy. Indeed in that are signs for a people who give thought.”
                </p>
                <p class="text-center mt-2 text-light">
                    ( QS. Ar- Rum 21 )
                </p>
            </div>
            <div class="w-100 position-absolute waves-motif">
                <img src="assets/img/waves.svg" width="100%"/>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="section3 py-5">
            <div class="container-lg py-4">
                <div class="row text-blue-main">
                    <div class="col-12 col-md-4 text-center">
                        <h4 class="font-normal">Demeellzha Raizha</h4>
                        <p class="mb-0">Putri dari</p>
                        <p class="mb-0">Bapak Helmi (Alm.)</p>
                        <p class="mb-0">& Ibu Dian Agustin</p>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img src="assets/img/handrawn.png" width="190px" class="my-3 my-md-0"/>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <h4 class="font-normal">Rizki Adi Nugraha</h4>
                        <p class="mb-0">Putra dari</p>
                        <p class="mb-0">Bapak Sukardi</p>
                        <p class="mb-0">& Ibu Endah Ratnasartika</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="section4 bg-section-4 py-5 position-relative" style="background-image: url('assets/img/flower-min.jpg');">
            <div class="w-100 position-absolute waves2-motif">
                <img src="assets/img/waves2.svg" width="100%"/>
            </div>
            <div class="container-lg py-4 text-white">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="signature3" style="font-size: 75px;">Save The Date</h1>
                    </div>
                    <div class="col-12 text-center">
                        <div id="countdown"></div>
                    </div>
                </div>
            </div>
            <div class="position-relative container px-4 mt-5">
                <div class="row mx-0">
                   <div class="col-12 text-center bg-white border" style="height: 600px;">
s
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 5 -->
        <!-- <div class="section5 bg-white py-5 position-relative" style="top:-20px;">
            <div class="w-100 position-absolute waves2-motif">
                <img src="assets/img/waves2.svg" width="100%"/>
            </div>
            <div class="container-lg py-4 text-white">
                <div class="row px-4">
                    <div class="col-12 text-center">
                        <h1 class="signature3" style="font-size: 75px;">Save The Date</h1>
                    </div>
                    <div class="col-12 text-center">
                        <div id="countdown"></div>
                    </div>
                </div>
            </div>
        </div> -->
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

    // Set the date we're counting down to
    var countDownDate = new Date("Jun 19, 2021 11:00:00").getTime();

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
    var html = ''; 
        html += '<div class="d-flex flex-row text-success font-weight-bold justify-content-center align-items-center mt-4 text-count">';
            html += '<div class="mr-2 bg-light border rounded-lg p-3">';
                html += '<p class="mb-0">'+days+'d </p>';
            html += '</div>';
            html += '<h4 class="mr-2 text-white">:</h4>';
            html += '<div class="mr-2 bg-light border rounded-lg p-3">';
                html += '<p class="mb-0">'+hours+'h </p>';
            html += '</div>';
            html += '<h4 class="mr-2 text-white">:</h4>';
            html += '<div class="mr-2 bg-light border rounded-lg p-3">';
                html += '<p class="mb-0">'+minutes+'m </p>';
            html += '</div>';
            html += '<h4 class="mr-2 text-white">:</h4>';
            html += '<div class="bg-light border rounded-lg p-3">';
                html += '<p class="mb-0">'+seconds+'s </p>';
            html += '</div>';
        html += '</div>';

    var expired = ''; 
        expired += '<div class="d-flex flex-row text-success font-weight-bold justify-content-center mt-4" style="font-size: 56px;">';
            expired += '<div class="mr-2 bg-light border rounded-lg p-3">';
                expired += '<p class="">00 </p>';
            expired += '</div>';
            expired += '<div class="mr-2 bg-light border rounded-lg p-3">';
                expired += '<p class="">00 </p>';
            expired += '</div>';
            expired += '<div class="mr-2 bg-light border rounded-lg p-3">';
                expired += '<p class="">00 </p>';
            expired += '</div>';
            expired += '<div class="bg-light border rounded-lg p-3">';
                expired += '<p class="">00 </p>';
            expired += '</div>';
            expired += '</div>';
    document.getElementById("countdown").innerHTML = html;

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = expired;
    }
    }, 1000);
});
</script>
</html>
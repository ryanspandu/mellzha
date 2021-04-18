<!DOCTYPE html>
<html>
<head>
    <title>Melzha & Rizki - Wedding Invitation</title>
    <?php include 'head.php'; ?>
</head>
<body>
    <?php include 'modal/welcome.php'; ?>
    <?php include 'content.php'; ?>
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
    var html = ''; 
        html += '<div class="d-flex flex-row text-primary font-weight-bold justify-content-center align-items-center mt-4 text-count">';
            html += '<div class="mr-3 bg-light border rounded-lg p-3">';
                html += '<p class="mb-0">'+days+'d </p>';
            html += '</div>';
            html += '<h2 class="mr-3 text-white">:</h2>';
            html += '<div class="mr-3 bg-light border rounded-lg p-3">';
                html += '<p class="mb-0">'+hours+'h </p>';
            html += '</div>';
            html += '<h2 class="mr-3 text-white">:</h2>';
            html += '<div class="mr-3 bg-light border rounded-lg p-3">';
                html += '<p class="mb-0">'+minutes+'m </p>';
            html += '</div>';
            html += '<h2 class="mr-3 text-white">:</h2>';
            html += '<div class="bg-light border rounded-lg p-3">';
                html += '<p class="mb-0">'+seconds+'s </p>';
            html += '</div>';
        html += '</div>';

    var expired = ''; 
        expired += '<div class="d-flex flex-row text-primary font-weight-bold justify-content-center mt-4" style="font-size: 56px;">';
            expired += '<div class="mr-3 bg-light border rounded-lg p-3">';
                expired += '<p class="">00 </p>';
            expired += '</div>';
            expired += '<div class="mr-3 bg-light border rounded-lg p-3">';
                expired += '<p class="">00 </p>';
            expired += '</div>';
            expired += '<div class="mr-3 bg-light border rounded-lg p-3">';
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
</script>

</html>
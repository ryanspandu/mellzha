<!DOCTYPE html>
<html>
<head>
    <title>Wedding Invitation - Rizky & Melzha</title>
    <?php include 'head.php'; ?>
</head>
<body>
    <?php include 'modal/_welcome.php'; ?>
    
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
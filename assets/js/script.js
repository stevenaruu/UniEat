$(document).ready(function() {

    $("#guestKeyword").on('keyup', function() {
        $("#search").load('./controllers/search.php?guestKeyword=' + $("#guestKeyword").val());
    })

    $("#adminKeyword").on('keyup', function() {
        $("#search").load('./controllers/search.php?adminKeyword=' + $("#adminKeyword").val());
    })

    $("#tenantKeyword").on('keyup', function() {
        $("#search").load('./controllers/search.php?tenantKeyword=' + $("#tenantKeyword").val());
    })

    $("#customerKeyword").on('keyup', function() {
        $("#search").load('./controllers/search.php?customerKeyword=' + $("#customerKeyword").val());
    })

    $("#all").on('click', function() {
        $("#search").load('./controllers/listAll.php?all=' + $("#all").val());
    })

    $("#makanan").on('click', function() {
        $("#search").load('./controllers/listMakanan.php?makanan=' + 'foods');
    })

    $("#minuman").on('click', function() {
        $("#search").load('./controllers/listMinuman.php?minuman=' + 'drinks');
    })

    $("#snack").on('click', function() {
        $("#search").load('./controllers/listSnack.php?snack=' + 'snacks');
    })

})
$(document).ready(function(){
    $('.table').DataTable({
        responsive: true,
        ordering: true,
        searching: true,
        paging: true
    })


    //ajax asynchronous and xml

    /*$.ajax({
        url: 'api/auth/display/moderate',
        type: 'GET',
        success: function(response){
            var transact = response.moderate
            console.log(transact)
        },
        error: function(xhr, status, error){
            console.error(xhr.responseText)
        }
    })*/
});

$(document).ready(function(){
    $('.table').DataTable({
        responsive: true,
        ordering: true,
        searching: true,
        pagingType: "numbers",
    });


    //ajax asynchronous and xml

    /* $.ajax({
        url: 'api/auth/display/transactionsrecord',
        type: 'GET',
        success: function(response){
            var transact = response.transactionsrecord

            if(response.success){
                console.log(transact)
            }

        },
        error: function(xhr, status, error){
            console.error(xhr.responseText)
        }
    }) */

    axios.get('http://127.0.0.1:8000/api/auth/transactionsrecord').then(function(response){
        var transact = response.data.transactionsrecord
            if(response.data.success){
                console.log(transact)
            }
        }).catch(function(error){
                console.error(error)
    })
/*
    fetch('api/auth/display/transactionsrecord')
    .then(response => response.json())
    .then(data=>{
        if(data.success){
            var transact = data.transact
            console.log(transact)
        }
    }).catch(function(error){
        console.error(error)
    })
 */

$('.btnAddProducts').on('click', ()=>{
    $('.productModal').show()
})


})

function closeModal(){
    $('.productModal').hide()
}

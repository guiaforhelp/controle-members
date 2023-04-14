/** EXEMPLO */

// Recuperando od dados na pagina script.php
// $.ajax({
//     url: "script.php",
//     method: "POST",
//     data: {name: 'miqueias', coment: 'este é um teste'},
//     dataType: "html"

// }).done(function(result) {
//     console.log(result);
//     getComments();
// })

// //data: "campo1=dado1&campo2=dado2&campo3=dado3",


// // setando os dados do banco de dados para pg validation.php
// function getComments(){
//     $.ajax({
//         url: "http://localhost/",
//         method: "GET",
//         dataType: "html"
    
//     }).done(function(result) {
//         console.log(result);
//         $('.teste').prepend(result);
       
//     });
// }

/** END EXEMPLO */


// Cadastro de usuarios
$('#form-new-member').submit(()=> {   
    $.ajax({
        url: "",
        method: "POST",
        data: {
            addname: $('#add-name').val(), 
            addrg: $('#add-rg').val(), 
            addnascimento: $('#add-nascimento').val(), 
            addestcivil: $('#add-estcivil').val(), 
            addnaturalidade: $('#add-naturalidade').val(), 
            addadress: $('#add-adress').val(), 
            addnadress: $('#add-n-adress').val(), 
            addcep: $('#add-cep').val(), 
            addcidade: $('#add-cidade').val(),
            adddatebatismo: $('#add-date-batismo').val(), 
            adddatecarteirinha: $('#add-date-carteirinha').val(), 
            addtypemember: $('#add-type-member').val(), 
            addcargo: $('#add-cargo').val(), 
            addobs: $('#add-obs').val()
        },
        dataType: "html"
    
    }).done(function() {
        // $('#add-name').val(''), 
        // $('#add-rg').val(''), 
        // $('#add-nascimento').val(''), 
        // $('#add-estcivil').val(''), 
        // $('#add-naturalidade').val(''), 
        // $('#add-adress').val(''), 
        // $('#add-n-adress').val(''), 
        // $('#add-cep').val(''), 
        // $('#add-cidade').val(''),
        // $('#add-date-batismo').val(''), 
        // $('#add-date-carteirinha').val(''),         
        // $('#add-obs').val('')
        
        // if($('.inputs-validation').val() == ''){
        //     console.log($('.inputs-validation').val());
        //     $('#alert-message').html('falha');
        // }else {
        //     $('#alert-message').html('sucesso');
        // }
    })
});



$('#edit_members').submit((event)=>{
    event.preventDefault();  
    
    $.ajax({
        url: "",
        method: "POST",
        data: {
            eidtid: $('#id').val(),
            editrg: $('#rg').val(),
            editdatanasc: $('#data_nascimento').val(),
            editestcivil: $('#estado_civil').val(),
            editnatestado: $('#estado_natu').val(),
            editnatcidade: $('#cidade_natu').val(),
            editend: $('#endereco').val(),
            editnend: $('#n').val(),
            editcep: $('#cep').val(),
            editendcidade: $('#cidade').val(),
            editdatabatismo: $('#data_batismo').val(),
            editvalcarteirinha: $('#validade_carteirinha').val(),
            editsitumembro: $('#situacao_membro').val(),
            editcargo: $('#cargo').val(),
            editobs: $('#obs').val()
        },
        dataType: "html"
    }).done(function(){
        console.log('carregado com sucesso');
    });
});
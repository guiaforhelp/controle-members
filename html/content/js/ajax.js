$.ajax({
    url: "script.php",
    method: "POST",
    data: {name: 'miqueias', coment: 'este é um teste'},
    dataType: "html"

}).done(function(result) {
    console.log(result);
    getComments();
})

//data: "campo1=dado1&campo2=dado2&campo3=dado3",


function getComments(){
    $.ajax({
        url: "http://localhost/content/include/validation.php",
        method: "GET",
        dataType: "html"
    
    }).done(function(result) {
        console.log(result);
        $('.teste').prepend(result);
       
    });
}
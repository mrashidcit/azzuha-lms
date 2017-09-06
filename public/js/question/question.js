var url = "hello";
$(document).ready(function(){

    console.log('question loaded');

    url = $('#new-question').attr('action');

});

$('#new-question').on('submit', function(e){

    e.preventDefault();

    console.log('url = ' + url);

    console.log($('#new-question').attr('action'));

    // console.log($(this).serialize());

    $.post(
        url,
        $(this).serialize(),
        function(data, status) {
            var question = JSON.stringify(data['question']);
            console.log("data: " + JSON.stringify(data['question']));
            console.log("status: " + status);

            showMessage();
            $('#new-question').trigger("reset");

            $('#question').focus();

        }
    );

});

// show Success Message
function showMessage(){
    $('#success').slideDown(600);
    setTimeout(hideMessage, 2000);
}

// hide Success Message
function hideMessage(){
    $('#success').slideUp(600);
}





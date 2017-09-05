

$(document).ready(function(){

    // contains id of currently selected subject
    var subject_id;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    $('#submit').click(function(e){

        e.preventDefault();

        subject_id = $('#subject_id  option:selected').val();

        console.log('subject_id = ' + subject_id );


        var token = $('meta[name="csrf-token"]').attr('content');
        /*


        $.get("quiz/start-quiz/" + 1 , function(data, status){
            console.log(JSON.stringify(data['questions']));
            console.log("Status: " + status);
        });

        /*

        $.get("/subjects", function(data, status){
            console.log(JSON.stringify(data['subjects']) );
            console.log("Status: " + status);

        });
         */


        console.log('Token = ' + token);
        console.log('Button Clicked');



        /*
        $.get("", function(data, status){
            console.log(data);
        });
        */
    });

});


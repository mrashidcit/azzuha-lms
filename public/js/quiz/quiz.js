

$(document).ready(function(){

    $('#subject-info').hide();



    // contains info of currently selected subject
    var currentSubject = {id: '', name: 'default' };
    var questions = [];

    var totalQuestions;
    var currentIndex = 0;
    var currentQuestion;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    $('#submit').click(function(e){

        e.preventDefault();

        currentSubject.id = $('#subject_id  option:selected').val();
        currentSubject.name = $('#subject_id  option:selected').text();

        console.log(currentSubject);

        console.log('subject_id = ' + currentSubject.id );

        $.get("quiz/start-quiz/" + currentSubject.id , function(data, status){
            questions = JSON.stringify(data['questions']);
            questions = JSON.parse(questions);
            totalQuestions = questions.length;



            resetCurrentIndex();
            // console.log(questions);
            // console.log(JSON.stringify(data['questions']));
            console.log("Status: " + status);

            hideSubjectMenu();

            show(questions[currentIndex++]);
        });

    });

    // Show Question in Control

    function show(question){
        currentQuestion = question;
        $('#question').text(question.question);
        $('#a').text(question.a);
        $('#b').text(question.b);
        $('#c').text(question.c);
        $('#d').text(question.d);

        console.log('show');
        console.log("currentQuestion = " ,currentQuestion);

    }

    $('#next').click(function(e){
       e.preventDefault();
        console.log('Move next');
        next();
    });

    // Reset currentIndex Value
    function resetCurrentIndex(){
        currentIndex = 0;
        return ;
    }


    // Move to the Next Question
    function next(){
        if (!(currentIndex < questions.length)){
            console.log('quiz completed ' + currentIndex);
            return ;
        }

        show(questions[currentIndex++]);
        updateOtherValues();

    }

    // Hide Subject Menu
    function hideSubjectMenu(){
        var state =  $('#select-subject').hide();

        // If we are hiding SubjectMenu
        // then we need to show SubjectInfo.
        showSubjectInfo();

    }

    // Show Subject Info If Subject is selected by user
    function showSubjectInfo(){
        $('#subject-info').show();
        $('#subject-name').text(currentSubject.name);

        // currentIndex + 1 becuase index is starting
        // from 0
        $('#current-question').text(currentIndex + 1);
        $('#total-questions').text(questions.length);
    }

    // Update other needed values after moveNext()
    function updateOtherValues(){
        $('#current-question').text(currentIndex);
        $('#total-questions').text(questions.length);
    }

});


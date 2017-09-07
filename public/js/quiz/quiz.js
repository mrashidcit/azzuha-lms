// contains info of currently selected subject
var currentSubject = {id: '', name: 'default' };
var questions = [];

var totalQuestions;
var currentIndex = 0;
var currentQuestion;

$(document).ready(function(){

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

        show(questions[currentIndex]);
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

}

/*
    ***********************************************
    Save Answer and move to the net question
 */

$("input[name='option']").click(function(e){

    // Saving user answer
    saveAnswer();
    console.log('option clicked');
});

// Save user Answer
function saveAnswer(){
    // Selected Option
    var selectedOption =  $("input[name='option']:checked");



    if (currentIndex < totalQuestions){
        // Storing User Answer
        questions[currentIndex].user_answer = selectedOption.val();


        console.log(questions[currentIndex].user_answer);
        console.log(selectedOption.val());
    }

}

// reset Selected Radio Option
function resetRadio(){
    var selectedOption =  $("input[name='option']:checked");
    selectedOption.prop('checked', false);

}


$('#save-and-next').click(function(e){
    e.preventDefault();

    console.log('Move next');

    resetRadio(); // reseting radio options
    next(); // moving to the next question
});

// Move to the Next Question
function next(){
    // First move to the Index of next Question
    currentIndex++;

    if (!(currentIndex < questions.length)){
        // Called when quiz is completed
        quizCompleted();
        return ;
    }

    show(questions[currentIndex]);
    updateOtherValues();

}


// Update other needed values after moveNext()
function updateOtherValues(){
    $('#current-question').text(currentIndex + 1);
    $('#total-questions').text(questions.length);
}

// Reset currentIndex Value
function resetCurrentIndex(){
    currentIndex = 0;
    return ;
}




// Hide Subject Menu
function hideSubjectMenu(){
    var state =  $('#select-subject').hide();

    // If we are hiding SubjectMenu
    // then we need to show SubjectInfo.
    showSubjectInfo();
    showQuiz();

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

function showQuiz(){
    $('#quiz').show();
}





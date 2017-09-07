/*
 *  Contains all the code
 *  when the quiz will be completed
*/

var totalMarks = 0;
var obtainMarks = 0;

$(document).ready(function(){
    // Hiding Quiz Form Section
    $('#quiz').hide();

    // showResult();


    // Show Info. about result of the quiz
    $('#quiz-completed').show();

});

// This will be called when the All Questions of the
// quiz will be conducted
function quizCompleted(){

    // Hiding Quiz Form when the questions are completed
    $('#quiz').hide();
    $('#question-info').hide();

    // Calculating Result
    computeResult();


    // Showing when the quiz will be completed
    $('#quiz_completed').show();
}

$('#btn-show-result').click(function(e){
    console.log("show-result");

    showResult();


});

// Calculate results of the questions
function computeResult(){
    totalMarks = questions.length;

    // Reseting currentIndex to traverse
    // through questions to compute result
    resetCurrentIndex();

    for(q of questions){
        console.log(q);
        console.log(q.correct_option + "==" + q.user_answer);
        if(q.correct_option == q.user_answer){
            obtainMarks++;
        }
    }

    // Showing marks on the page
    showMarks();

    console.log("TotalMarks = " + totalMarks);
    console.log("ObtainMarks = " + obtainMarks);

}

// Show total and Obtain Marks of the quiz
function showMarks(){
    $('#total-marks').text(totalMarks);
    $('#obtain-marks').text(obtainMarks);
}

// Show Result with Correct_Answer and User_Answer
function showResult(){
    var element = $('#show-result').show();

    var resultPanel;

    // Before traversing through questions reset the index value 0
    resetCurrentIndex();

    // Only used for number the questions
    var no = 1;
    // contain icon name for true or false
    var icon;

    var correctOption;
    var userAnswer;

    for(q of questions){

        correctOption = q.correct_option;
        userAnswer = q.user_answer;

         icon = (correctOption == userAnswer) ?
                    'glyphicon glyphicon-ok' : 'glyphicon glyphicon-remove';
        resultPanel =
            `<div class="panel panel-default">
                <div class="panel-heading">
                    <b>${no++}.</b> ${q.question}  ${status}
                    <span class="glyphicon ${icon} " aria-hidden="true"></span>
                </div>
                <div class="panel-body">
                    <p style="${makeBoldCorrectOption('a', correctOption)} ${makeRedIncorrectAnswer('a', correctOption, userAnswer)}">A: ${q.a}</p>
                    <p style="${makeBoldCorrectOption('b', correctOption)} ${makeRedIncorrectAnswer('b', correctOption, userAnswer)}">B: ${q.b}</p>
                    <p style="${makeBoldCorrectOption('c', correctOption)} ${makeRedIncorrectAnswer('c', correctOption, userAnswer)}">C: ${q.c}</p>
                    <p style="${makeBoldCorrectOption('d', correctOption)} ${makeRedIncorrectAnswer('d', correctOption, userAnswer)}">D: ${q.d}</p>
                    
                </div>
            </div>`;

        element.append(resultPanel);
    }

} // end showResult()

// make option bold if currentOption is a correctOption
function makeBoldCorrectOption(option, correctOption){
    if(option == correctOption){
        return "font-weight: bold;";
    }

    return '';
}

function makeRedIncorrectAnswer(option, correctOption, userAnswer){

    // If all three parameters values are same then do nothing
    if ((correctOption == userAnswer) ){
        return ''; // do nothing because currentOption is correctOption
    } else if (option == userAnswer) { // currentOption is the user answer then make it red
        return 'color: red;';
    } else {
        return '';

    }


}








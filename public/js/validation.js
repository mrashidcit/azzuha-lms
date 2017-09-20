// Use for Validation of Form Controls

// $( document ).ready(function() {
//     $( "#first_name" ).keypress(function(e) {
//         var key = e.keyCode;
//         if (key >= 48 && key <= 57) {
//             e.preventDefault();
//         }
//     });
// });


$( document ).ready(function() {
    $( "#first_name" ).bind('keyup blur',function(){ 
        var node = $(this);
        node.val(node.val().replace(/[^A-Za-z_\s]/,'') ); }   // (/[^a-z]/g,''
    );
});

$( document ).ready(function() {
    $( "#last_name" ).bind('keyup blur',function(){ 
        var node = $(this);
        node.val(node.val().replace(/[^A-Za-z_\s]/,'') ); }   // (/[^a-z]/g,''
    );
});
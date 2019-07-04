//Getting value from "ajax.php".
function fill(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#textbox').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#result').hide();
 }
 $(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("#form_result").on('submit',function(e) {
        e.preventDefault();
        //Assigning search box value to javascript variable named as "name".
        var name = $('#textbox').val();
        //Validating, if "name" is empty.
        if (name == "") {
            //Assigning empty value to "display" div in "search.php" file.
            $("#result").html("");
        }
        //If name is not empty.
        else {
            //AJAX is called.
            $.ajax({
                //AJAX type is "Post".
                type: "POST",
                //Data will be sent to "ajax.php".
                url: "search.php",
                //Data, that will be sent to "ajax.php".
                data: {
                    //Assigning value of "name" into "search" variable.
                    search: name
                },
                //If result found, this funtion will be called.
                success: function(html) {
                    //Assigning result to "display" div in "search.php" file.
                    $("#result2").html(html).show();
                    $('#myModal').modal('show');
                    $('#form_result')[0].reset();
                    //alert(html);
                }
            });
        }
    });
 });
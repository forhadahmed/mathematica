var row = "";
var math = "";
var maths = Array();
var history = 0;


function mathematica_process(output)
{
    if (output.indexOf("png") >= 0) {
        $('#rows > tbody:last').append("<div class='output'><img src='"+output+"'></span>");
    } else if (output.indexOf("^") >= 0) {
        $('#rows > tbody:last').append("<span class='error'>syntax error</span>");
    } else {
        $('#rows > tbody:last').append("<span class='error'>unknown error</span>");
    }
    
    maths.push(math);
    history = maths.length;
    mathematica_prompt();
}


function mathematica_query()
{
    math = $("#input").val().trim();	
	
    if (math == "")  {
        mathematica_unprompt();
        mathematica_prompt();
        return;
    }
	
    mathematica_unprompt();
	
    $.ajax({url: "mathematica.php?math="+encodeURIComponent(math)})
     .done (function(output) { mathematica_process(output); })
     .error(function(output) { mathematica_process(output); });
}

function mathematica_unprompt()
{
    $("#input").attr('readonly','readonly');
    $("#input").attr("id", "ID");
}


function mathematica_keypress(e)
{
    code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) mathematica_query();
}

function mathematica_keydown(e)
{
    code = (e.keyCode ? e.keyCode : e.which);
	
    if (code == 38) { // UP
        if (history > 0) $("#input").val(maths[--history]);
        $("#input").caretToEnd();
    } 
	
    if (code == 40) { // DOWN
        if (history < maths.length-1) $("#input").val(maths[++history]);
        $("#input").caretToEnd();
    }
}


function mathematica_prompt() 
{
    $('#rows > tbody:last').append(row.replace("ID", "input").replace("X", ""));
    $('#input').val('');
    $("#input").focus();
    $('html, body').animate({ scrollTop: $("#input").offset().top }, 0);
    $("#f").css("bottom", "0");
    $("#input").keypress(function(e) { mathematica_keypress (e)} );
    $("#input").keydown (function(e) { mathematica_keydown  (e)} );
}


function mathematica_clear()
{
    $("#rows").html('<tr><td></td></tr>');
    mathematica_prompt();
    history = maths.length; 
}


$(document).ready(function(){
    row = $("#row").html();
    mathematica_prompt();
    $("#clear").click(function(e) { mathematica_clear(); });
});


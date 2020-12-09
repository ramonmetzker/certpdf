<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declarations</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <form action="./declaration.php" method="POST">
            <img src="./media/logo.png" alt="Logo Minds" width="100px">
            <h1>DECLARATION</h1>
            <h2>Insert the student data</h2>
            <input type="text" class="std__name" name="stdname" placeholder="Student's name">
            
            <input type="text" class="std__ctr" name="stdctr" placeholder="Student's contract">
            <hr>
            <h2>Extra information?</h2>
            <input type="checkbox" name="grade" id="grade" value="1" >
            <label for="grade"> Grade</label>
            <input type="checkbox" name="hours" id="hours" value="2">
            <label for="hours"> Hours</label>
            <input type="checkbox" name="module" id="module" value="3">
            <label for="hours"> Module</label>
            <section class="grade">
                <label for="stdgrade">Grade: </label>
                <input type="number" class="std__grade" name="std__grade" id="stdgrade">
                <br>
            </section>
            <section class="hours">
                <label for="stdhours">Hours: </label>
                <input type="number" class="std__hours" name="std__hours" id="stdhours">
                <br>
            </section>
            <section class="module">
                <label for="module">Module: </label>
                <input list="modules" class="std__module" name="std__module" id="module">
                <datalist id="modules">
                    <option value="Basic"></option>
                    <option value="Intermediate"></option>
                    <option value="Advanced"></option>
                </datalist>
                <br>
            </section>
            <hr>
            <h2>Insert your data</h2>
            <input type="text" class="coord__name" placeholder="Coordinator Name" name="cdname">
            <input type="text" class="coord__city" placeholder="City" name="cdcity">
            <hr>
            <h2>Date to be shown: </h2>
            <input type="date" class="cert__date" name="cert__date" id="date">
            <hr>
            <button type="submit">Generate PDF</button>
        </form>
    </div>
    <script>
        $("#grade").change(function(e){
            if($( "#grade" ).prop( "checked")){
            $(".grade").show();
        }else{
            $(".grade").hide();
        }
        });
        $("#hours").change(function(e){
            if($( "#hours" ).prop( "checked")){
            $(".hours").show();
        }else{
            $(".hours").hide();
        }
        });
        $("#module").change(function(e){
            if($( "#module" ).prop( "checked")){
            $(".module").show();
        }else{
            $(".module").hide();
        }
        });
    </script>
    <script src="./jquery.mask.js"></script>
    <script>
        $('#stdgrade').mask("00.00", {placeholder: "__.__"});
    </script>
</body>
</html>
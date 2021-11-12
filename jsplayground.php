<!DOCTYPE html>
<!--JavaScript Playground!-->
<html>
    <head>
        <title>Ryan's javaScript Playground</title>
    </head>
    <body>
        <p>Welcome to my JavaScript Playground. Here I will be using JavaScript according to Lab 10.</p>
        <button id="secMdg" onclick="window.alert('Secret Message');changeButton(this)">Click Here for a Secret Message</button>
        </br></br>
        <button id="myName" onclick=showName()&hideSecret()>Click here to see my name</button>
        </br>
        <p id="firstName"></p>
        <button id="changePic" onclick=switchPic()>Click here to change the emoji</button>
        </br></br> 
        <img id="emoji" src="images/thinking_small.png"/>
        </br>
        <form name="stepForm" onblur="sayRequired(this)">
            <label for="exampleform">Simple text form for onBlur</label><br>  
            <textarea name="exampleform" id="exampleform" rows="5" cols="40">            
            </textarea><br><br>

      
        <!--Script to insert my name into a <p> -->
        <script>
            function showName() {
                document.getElementById("firstName").innerHTML = "Ryan";     
            }
        </script>
      
      <!--Script to hide the name button-->
        <script>
            function hideSecret() {
                document.getElementById("myName").style.display = "none";
            }
        </script>

      <!--Script to change the src of an image-->
        <script>
            function switchPic() {
                document.getElementById("emoji").src = "images/hyper_thinking.png";
            }
        </script>
        <!--Script to change the text of the first button-->
        <script>
            function changeButton(elem) {
                elem.innerHTML = "You saw the secret";    
            }
        </script>
        
        <!--Script to say that the text form is required-->
        <script>
            function sayRequired(elem) {
                elem.innerHTML = "This field is required";
            }
        </script>
        <h1>Here are some uses of PHP for lab 11 with GPIO!</h1>
        <form>
            <input type="button" value="Toggle LED" id="toggle" name="toggle">
        </form>

        <?php
            if(isset($_POST['toggle'])) {
                $output = `gpio toggle 0`;
                $logic = `gpio read 0`;
                echo "The LED logic level is $logic"
            }
        ?>
    </body>
</html>
// Show password function
function showPassword() {
    let x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        } else{
            x.type = "password";
        }
    }

function changeColor() {
    document.getElementById("main").style.backgroundColor = "#2D425A";
    document.getElementById("main").style.color = "#D9AF92";
    document.getElementById("main").style.backgroundImage = "none"
    document.getElementById("body").style.backgroundColor = "#395d7d";
    document.getElementById("log-panel").style.border = "2px solid #D9AF92";
    document.getElementById("log-panel").style.boxShadow = "10px 5px 5px #D9AF92";
   
    }

function changeLanguage(){
    alert("Language are changed!");
    }
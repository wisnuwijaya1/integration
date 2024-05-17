<!DOCTYPE html>
<html>
<head>
<title>LazyCodding</title>
<h1>
 Membuat Captcha</h1>
<br />
<a>Cara Membuat Captcha Dengan HTML</a><br /><br />
<style>
.captcha
{ font: italic bold 16px "Arial", cursive, sans-serif; 
color:#a0a0a0;background-color:#c0c0c0;
width:100px;border-radius: 5px;
text-align:center;
text-decoration:line-through;
}
.errmsg
{color:#ff0000;}
</style>
<script>
var captcha= new Array ();
function validateRecaptcha(){
    var recaptcha= document.getElementById("recaptcha").value;;
    var validRecaptcha=0;
    for(var z=0; z<6; z++){
        if(recaptcha.charAt(z)!= captcha[z]){
            validRecaptcha++;
        }
    }
    if (recaptcha == ""){
        document.getElementById('errCaptcha').innerHTML = 'Re-Captcha must be filled';
    } else if (validRecaptcha>0 || recaptcha.length>6){
        document.getElementById('errCaptcha').innerHTML = 'Sorry, Wrong Re-Captcha';
    } else{
        document.getElementById('errCaptcha').innerHTML = 'OK';
    }
}
function createCaptcha(){
    for(q=0; q<6 ; q++){
        if(q %2 ==0){
            captcha[q] = String.fromCharCode(Math.floor((Math.random()*26)+65));
        }else{      
            captcha[q] = Math.floor((Math.random()*10)+0);
        }
    }
    thecaptcha=captcha.join("");
    document.getElementById('captcha').innerHTML=
     "<span class='captcha'> " + thecaptcha+ " </span>" + "  <a onclick='createCaptcha()' href='#'>recaptcha</a>"; 
}
</script>
</head>
<body>
<table>
<tr><td>Captcha</td>
    <td id="captcha">
    <script> createCaptcha(); </script>
    </td>
</tr>
<tr>
    <td>Type Captcha</td>
    <td><input type="text" name="recaptcha" id="recaptcha" placeholder="Type the captcha"/></td>
    <td id="errCaptcha" class="errmsg"></td>
</tr>
<tr>
    <td colspan="2" style="text-align:right;">
        <input type="button" value="Submit" onClick="validateRecaptcha()"/>
    </td>
</tr>
</table>
</body>
</html>
Script by : <a href='https://lazycodding.blogspot.com' taget='blank'><bold>LazyCodding</bold></a>
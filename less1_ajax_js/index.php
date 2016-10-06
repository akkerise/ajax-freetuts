<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript">
            function load_ajax(){
                var xmlhttp;
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
                }
                
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById("result").innerHTML = xmlhttp.responseText;
                    }
                }
                
                xmlhttp.open("GET","result.php",true);
                xmlhttp.send();
//                alert('Clicked');
            }
        </script>
    </head>
    <body>
        <div id="result">
            Nội dung ajax sẽ được load ở đây
        </div>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    </body>
</html>
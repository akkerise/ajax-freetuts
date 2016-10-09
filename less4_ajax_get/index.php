<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        <script language="javascript">
             
            function load_ajax()
            {
                // $.ajax({
                //     url: "result.php",
                //     type: "get",
                //     dataType: "text",
                //     data: {
                //        number: $('#number').val()
                //     },
                //     success: function(data){
                //         $("#result").html(data); 
                //     }
                // });
                // 
                $.get("result.php",
                    {number: $('#number').val()},
                    function(data){
                        $('#result').html(data);
                    },
                    'text'
                );
                


            }
     // gửi phương thức ajax gồm các thuộc tính cần truyền là : url , type , dataType , data 
     // success để xử lý dữ liệu
        </script>
    </head>
    <body>
        <div id="result">
            Nội dung ajax sẽ được load ở đây
        </div>
        <br/>
        <input type="text" value="" id="number"/>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    </body>
</html>
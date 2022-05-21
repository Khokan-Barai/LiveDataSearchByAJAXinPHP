<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Live Data Search By AJAX in PHP</title>
</head>
<body>
    <div class="container">

        <div class="text-center mt-5 mb-4">
            <h2>Live Search By AJAX in PHP</h2>
        </div>
        
        <div class="col-md-6 offset-md-3">
            <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search ...">
        </div>
        <div id="searchresult"></div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#live_search').keyup(function(){
                var input = $(this).val();
                //alert(input);
                if(input != ""){
                    $.ajax({
                        url:"livesearch.php",
                        method:"POST",
                        data:{input:input},

                        success:function(data){
                            $("#searchresult").html(data);
                            $("#searchresult").css("display","block");
                        }
                    });
                }else{
                    $("#searchresult").css("display","none");
                }
            });
        });
    </script>
</body>
</html>
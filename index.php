<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">

    <script src="assets/vendors/jquery/jquery-3.4.1.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" >

    <style>
        
    </style>

    <script>

        $(document).ready(function(){
            $("td").click(function(){
                console.log("clicked");
            });
        })
        
    </script>

    <script src="assets/js/scripts.js" ></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <table class="robot-table">
                    <tr>
                        <th>المجموعه الأولى</th>
                        <th>المجموعه الثانيه</th>
                    </tr>
                    <tr>
                        <td>
                            <img src="assets/images/faheem.png" width="100px" />
                            <ul>
                                <li>فهيم</li>
                                <li>متخصص في كل شيء</li>
                            </ul>
                        </td>
                        <td>
                            <img src="assets/images/sportsman.png" width="100px" />
                            <ul>
                                <li>رياضي</li>
                                <li>متخصص في الرياضة</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="assets/images/coder.png" width="100px" />
                            <ul>
                                <li>مبرمج</li>
                                <li>متخصص في البرمجه</li>
                            </ul>
                        </td>
                        <td>
                            <img src="assets/images/chemist.png" width="100px" />
                            <ul>
                                <li>كميائي</li>
                                <li>متخصص في علوم الكيمياء</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                القائمه
            </div>
        </div>
    </div>

    

</body>
</html>
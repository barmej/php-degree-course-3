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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                أضف روبوتك
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">روبوت عام</a>
                <a class="dropdown-item" href="#">روبوت متخصص</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <table class="table table-dark text-center shadow">
                    <tr class="bg-warning">
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
            <div class="col-sm-4 text-direction">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">البريد الالكتروني</label>
                        <input name="email" type="email" class="form-control text-direction" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="أدخل البريد">
                        <small id="emailHelp" class="form-text">لن نقوم بمشاركه بريدك الالكتروني مع اي شخص ما</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">كلمه المرور</label>
                        <input name="password" type="password" class="form-control text-direction" id="exampleInputPassword1" placeholder="كلمه المرور">
                    </div>
                    <input type="submit" class="btn btn-outline-warning btn-sm btn-block" value="دخول" />
                </form>
            </div>
        </div>
    </div>

    

</body>
</html>
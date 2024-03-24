<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login form</title>
    <!-- di bawah ini source google font -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&family=Roboto:wght@100&display=swap');</style>
    <!-- di bawah ini source bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- di bawah ini source style.css -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <div class="row">
            <div class="col-md-4">
                <div class="textlogo">KOTUSA</div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="boxlogin">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default" style="color: black;"><b>Log in </b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="row">
            <div class="col-md-6">
                <h3>MARI BERGABUNG BERSAMA KAMI</h3>
                <div class="texthero">
SELAMAT DATANG DI KOTUSA MART                </div>
            </div>
            <div class="col-md-6">
                <div class="formhero">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1><center>Sign In</center></h1>
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h4>Email address</h4></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><h4>Password</h4></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><h4>Ulangi Password</h4></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <center><button  type="submit" class="btn btn-primary btn-lg"><h4>Sign In</h4></button></center>
                                    <br>
                                    <br>
                        
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
            <h3>&copy; kotusamartjaya</h3>
    </div>
</body>
</html>

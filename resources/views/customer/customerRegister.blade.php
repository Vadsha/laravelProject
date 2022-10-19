<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
        @import url("https://fonts.googleapis.com/css2?family=Righteous&display=swap");
        body{
            height: 663px;
            margin: 0;
            padding: 0;
            background-color: #7194cf;
            background-image: linear-gradient(180deg, #a9c9ff 0%, #ffbbec 100%);
            background-repeat: no-repeat;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-5 mt-5 bg-transparent">
                <div class="head mt-5">
                    <h1 class=" display-3 w-75" style="margin-left:90px; pointer-events:none; font-weight:bolder; background-image:url(/images/headtext.jpeg); background-size:cover;color:transparent; -webkit-background-clip:text;">ATHENA</h1>
                </div>
                <div class="body">

                    <form action="" method="">

                         <div class="form-group d-flex mt-3">
                              <div class="col-4">
                                  <label style="font-size: large;" class="ms-3" for="name">Name</label>
                              </div>
                              <div class="col-8">
                                  <input  type="text" name="email" placeholder="Full Name" class="form-control" style="background-color: #A4DAF9;">
                              </div>
                          </div>
                        <div class="form-group d-flex mt-3">
                            <div class="col-4">
                                <label style="font-size: large;" class="ms-3" for="email">Email Address</label>
                            </div>
                            <div class="col-8">
                                <input  type="text" name="email" placeholder="example@gmail.com" class="form-control" style="background-color: #A4DAF9;">
                            </div>
                        </div>

                        <div class="form-group d-flex mt-3">
                            <div class="col-4">
                                <label style="font-size: large;" class="ms-3" for="password">Password</label>
                            </div>
                            <div class="col-8">
                                <input  type="password" name="password" class="form-control" style="background-color: #A4DAF9;">
                            </div>
                        </div>
                        <div class="form-group d-flex mt-3">
                         <div class="col-4">
                             <label style="font-size: large;" class="ms-3" for="password">Re-type Password</label>
                         </div>
                         <div class="col-8">
                             <input  type="password" name="password" class="form-control" style="background-color: #A4DAF9;">
                         </div>
                     </div>

                        <div class="foot d-flex mt-3">
                            <div class="col-8">
                                <a href="" style="font-size: small; text-decoration:none; margin-left: 18px;">Already have an account?</a>
                            </div>
                            <div class="col-4 text-end">
                                <button class="btn-success btn-sm" style="border:none; margin-bottom: 5px;">Register</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>

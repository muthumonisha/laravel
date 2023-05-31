<!doctype html>
    <html lang="en">
      <head>
        <title>Register</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="styles.css">

        <!---Registration form---->
        <div class="container d-flex justify-content-center my-5">
            <div class="form border px-5 py-5" style="background-color:azure">
                @if($errors->any())
                    <ul style="list-style-type:none;">
                        {!!implode('',$errors->all('<li style="color:red">* :message</li>'))!!}
                    </ul>
                @endif

                <form enctype="multipart/form-data" action="register" method="post">
                    <h4 style="text-align:center">REGISTRATION FORM</h4><br>
                    <label for="">First Name : <input type="text" name="firstname" value="{{old('firstname')}}" placeholder="Enter Your Firstname" style="margin-left:50px"></label><br><br>
                    <label for="">Last Name : <input type="text" name="lastname" value="{{old('lastname')}}" placeholder="Enter Your lastname" style="margin-left:50px"></label><br><br>
                    <label for="">Phone Number : <input type="text" name="phonenumber" value="{{old('phonenumber')}}" placeholder="Enter Your phone number" style="margin-left:18px"></label><br><br>
                    <label for="">Email : <input type="text" name="email" value="{{old('email')}}" placeholder="Enter Your email" style="margin-left:88px"></label><br><br>
                    <label for="">Password : <input type="password" name="password" value="{{old('password')}}" placeholder="Enter passowrd" style="margin-left:60px"></label><br><br>
                    <label for="">Confirm Password : <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirm your password"></label><br><br>
                    <input class="center" type="submit" value="Submit">
                    @csrf
                </form>
            </div>
        </div>

      </body>
    </html>

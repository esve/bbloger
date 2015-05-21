<!doctype html>
<html>
<html lang="en">
  <head>
    <title>BBlogers</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>

    <style>
     @media (min-width:500px) and  (max-width:1200px)
          {
               .mydivs{

               width:50%;
               float:left;
               }
          }
    </style>
 </head>
  <body style="font-family: 'Segoe UI Light'">

  <nav class="navbar navbar-inverse" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color: white">BBloggers</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#sign-in-modal">Sign In</a></li>
            <li><a href="#" data-toggle="modal" data-target="#sign-up-modal">Sign Up</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
<br>
<br>
<br>

    @if(Session::has('error'))
      <h3>{{Session::get('error')}}</h3>
    @endif
    <div class="col-lg-12">
            <div class="col-lg-5 mydivs">
                <div class="col-lg-8 col-lg-offset-3">
                    <h2 class="col-lg-12" style="color: darkgreen"><b>BBloggers</b></h2>
                    <div class="col-lg-12">&nbsp;</div>
                    <h4 class="col-lg-12">
                        <hr class="col-lg-12">
                        BBloggers is a blogging webapp made for you.<br><br>
                        One thing that distinguishes us from all others is our templates.<br><br>
                        Use one from our large range of templates for happy blogging!
                    </h4>
                </div>
            </div>
            <div class="col-lg-7 mydivs">
                <img src="{{asset('Images/blog.jpg')}}" class="col-lg-8 col-lg-offset-2" style="height: 400px">
            </div>
        </div>

         <div class="modal" id="sign-in-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sign In</h4>
                  </div>
                  {{Form::open(array('url'=>'/signin','method'=>'POST','id'=>'signInForm'))}}

                  <div class="modal-body">
                    <fieldset>

                        <div class="form-group col-lg-6 col-lg-offset-3">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group col-lg-6 col-lg-offset-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>

                    </fieldset>
                  </div>
                  <div class="modal-footer">
                    <button id="signInSubmit" type="submit" class="btn btn-success">Submit</button>
                  </div>
                  {{ Form::close() }}
                </div>
              </div>
            </div>

            <div class="modal fade" id="sign-up-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
                      </div>
                      {{Form::open(array('url'=>'/signup','method'=>'POST','id'=>'signUpForm'))}}

                      <div class="modal-body">
                        <fieldset>
                            <div class="form-group col-lg-6 col-lg-offset-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
                            </div>
                            <div class="form-group col-lg-6 col-lg-offset-3">
                                <input type="text" class="form-control" name="username" placeholder="Username" >
                            </div>
                            <div class="form-group col-lg-6 col-lg-offset-3">
                                <input type="password" class="form-control" name="pwd" placeholder="Password" autocomplete="off" >
                            </div>
                            <div class="form-group col-lg-6 col-lg-offset-3">
                                <input type="password" class="form-control" name="cpwd" placeholder="Retype Password" autocomplete="off">
                            </div>
                            <div class="form-group col-lg-6 col-lg-offset-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" >
                            </div>

                        </fieldset>
                      </div>
                      <div class="modal-footer">
                        <button id="signUpSubmit" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      {{ Form::close() }}
                    </div>
                  </div>
                </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="../../js/index.js"></script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BBloggers | New Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <link href="../../css/summernote.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body style="font-family: 'Segoe UI Light'">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="color: darkgreen">BBloggers</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout" >Log Out</a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <br>

  <div class="container">
   {{Form::Open(array('id'=>'newBlogForm','method'=>'POST','class'=>'form-horizontal'))}}
       <div class="form-group">
           <label class="col-sm-3 control-label">Blog title</label>
           <div class="col-sm-5">
               <input type="text" class="form-control" name="title" id="title" />
           </div>
       </div>

       <div class="form-group">
           <label class="col-sm-3 control-label">Blog content</label>
           <div class="col-sm-9">
               <textarea class="form-control summernote" name="content" id="content" style="height: 400px;"></textarea>
           </div>
       </div>

       <div class="form-group">
            <button type="submit" id="blogSubmit" class="btn btn-success col-lg-offset-3" onclick="postBlog()">Post</button>
       </div>
   {{Form::Close()}}
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="../../js/summernote.js"></script>
    <script src="../../js/bootbox.js"></script>
    <script src="../../js/newBlog.js"></script>
  </body>
</html>
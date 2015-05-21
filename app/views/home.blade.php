<!doctype html>
<html>
<html lang="en">
  <head>
    <title>BBlogers</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
     <link href="../../css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Data tables CDN -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.js"></script>



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
            <li><a href="/profile">Profile</a></li>
            <li><a href="/logout">Log Out</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
<br>
<br>
<br>

<div class="container">

                <h1> Welcome</h1>
                <h3>{{Auth::user()->name}}</h3><br>

                <a href="newBlog" class="btn btn-success">+ New Blog</a>
                <a href="allBlogs" class="btn btn-success">All Blogs</a>

                <br><br>

                <h2>My Blogs</h2><hr>

                 <div class="table-responsive col-lg-8">
                   	<table id="myBlogs"  class="table table-condensed table-hover" cellspacing="0" width="100%">
                   		<thead>
                   		<tr>
                   			<th>Title</th>
                   			<th>Author</th>
                   			<th>Action</th>
                   		</tr>
                   		</thead>
                   		<tbody>
                   		<tr>
                   			<td></td>
                   			<td></td>
                   			<td></td>
                   			</tr>
                   		</tbody>
                   	</table>
                   	</div>


</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script src="../../js/bootbox.js"></script>

    <script>

    $(document).ready(function()
    {
         oTable = $('#myBlogs').dataTable({
               "ajax": 'http://b2.com/getMyblogs',
               "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]]
           });

    });

    function deleteBlog(bid)
    {
       bootbox.confirm("Are you sure want to delete?", function(result)
                   {

                      if(result)
                      {

                          $.get('http://b2.com/deleteBlog',{blogId:bid},function(response)
                                 {

                                     if(response=='Success')
                                     {
                                        bootbox.alert('Deleted',function()
                                        {

                                              location.reload();

                                       })
                                     }
                                 });
                      }


                  });
   }
    </script>
 </body>
</html>











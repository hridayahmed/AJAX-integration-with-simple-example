<!DOCTYPE html>
<html lang="en">
<head>
  <title>AJAX Simple Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">AJAX Username to User Phone Number Search</h2>
  <form class="form-horizontal">

    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="username" placeholder="Enter Your Username" name="username">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" id="give_data" class="btn btn-default">Submit</button>
      </div>
    </div>

  </form>

  <div class="text-center text-success">
    <h4 id="phone_number"></h4>
  </div>
</div>


<script type="text/javascript">
    $(document).ready(function() 
    { 
        $('#give_data').click(function()
        {
            var username = document.getElementById("username").value;
            $.ajax(
            {
              type: "POST",
              url: "show.php",
              data: {username: username},
              error: function(jqXHR, textStatus, errorMessage) 
              {
                  alert(errorMessage);
              },
              success: function(data) 
              {
                  //alert(data);
                  document.getElementById("phone_number").innerHTML = data;
              } 
            });
            
        });

    });
</script>

</body>
</html>

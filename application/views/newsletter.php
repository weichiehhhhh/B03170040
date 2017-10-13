<html>
    <head>
   <link rel="stylesheet" href = "<?php echo base_url(); ?>css/style.css" type="text/css" media="screen">
    </head>
    
    <body>
    Send an email : USING CODEIGNITER PHP <br /><br />
        <form action="<?php  echo base_url('email/send'); ?>" method="post">
        <div class="form-group" >
          <label for="name">name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
        </div>
        <br />
        
        <div class="form-group">
          <label for="email">email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Your email" required>
        </div>
        <br />

        <div class="form-group">
          <input type="submit" class="btn btn-default" value="Submit">
        </div>
      </form>
        
    </body>

</html>
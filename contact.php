<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
	<link rel="stylesheet" a href="style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
		h2{
			color: red;
		}
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2></h2>
                    </div>
                  <h2 >Please fill this form and submit.</h2>
                    <form action="in.php" method="post">
 
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" color ="blue" name="name" placeholder="Enter your name" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" color ="blue" name="email" placeholder="Enter your email" class="form-control">
                        </div>
 
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" color ="blue" name="mobile" placeholder="Enter your phone number" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
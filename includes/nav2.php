<?php 
require 'includes/db-inc.php';


 ?>
			<h2 style="text-align:center"> Library Management System </h2>
<nav class="navbar navbar-inverse navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example">
                <span class="sr-only">:</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>

        <div class="collapse navbar-collapse" id="bs-example">
            <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="profile.php">View Profile</a></li>
                    <li><a href="borrow-student.php">Borrow Books</a></li>
					<li><a href="fine-student.php">Fines</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
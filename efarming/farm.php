  <?php
  include_once 'config.php';
  
                    $result = mysqli_query($link,"SELECT  id_no,name,address,contact,product_id,farmer_id FROM order_details");
                    ?>
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
          <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM order_details";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>farmer_id</th>";
                echo "<th>product_id</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['farmer_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['product_id'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>           



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Orders Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav menu">
    
      <li class="nav-item">
        <a class="nav-link" href="processedorders.php">Processed Orders</a>
      </li>
    
    </ul>
  </div>
</nav>

          
            <br>
            <div class="col-md-12">
                <div class="table-responsive">
            <table class="table"
                   *ngIf="products && products.length">
                <thead>
                    <tr>
                        <th>
                            
                        </th>
                        <th>ID NUMBER</th><br>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>CONTACT</th>
                        <th>PRODUCT ID</th>
                         <th>FARMER ID</th>
                          <td> <a href="process_orders.php?prod_id=<?=$pid;?>" class="btn btn-sm btn-success">Process</a>
                        </td>
                        </form>
                    </tr>
                        </th>
                        
                    </tr>
                     <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["id_no"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["contact"]; ?></td>
                        <td><?php echo $row["product_id"]; ?></td>
                        <td><?php echo $row["farmer_id"]; ?></td>
                        <form action="" method="POST">
                        <td> <a href="process_orders.php?prod_id=<?=$pid;?>" class="btn btn-sm btn-success">Process</a>
                        </td>
                        </form>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>
                </thead>
                <tbody>
                    <tr *ngFor="let customer of customers">
                        <td>
                            <img *ngIf="product.imageUrl"
                                 [src]="customer.imageUrl"
                                 [title]="customer.firstName | uppercase"
                                 [style.width.px]="imageWidth" 
                                 [style.margin.px]="imageMargin">
                        </td>
                      
                    </tr>
                </tbody>
            </table>
        </div>
            </div>
            
          

    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Post Processed Orders</title>
</head>
<body>
<form action="processedinsert.php" method="post">
  <p>
      <label for="id_no">id_no:</label>
        <input type="text" name="id_no" id="id_no">
    </p>
  <p>
      <label for="name"> Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="address">address:</label>
        <input type="text" name="address" id="address">
    </p>
    <p>
      <label for="contact">contact:</label>
        <input type="text" name="contact" id="contact">
    </p>
     <p>
      <label for="product_id">product_id:</label>
        <input type="text" name="product_id" id="product_id">
    </p>
    <input type="submit" value="POST TO PROCESSED ORDERS">
</form>
</body>
</html>
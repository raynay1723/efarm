  <?php
  include_once 'config.php';
                    $result = mysqli_query($conn,"SELECT  * FROM product_details");
                    ?>
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                     



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255348.1558931374!2d34.59807862790489!3d-0.07462926875847549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa437ad4ac81d%3A0x2012a439d6248dd2!2sKisumu!5e0!3m2!1sen!2ske!4v1587041573817!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">AVAILABLE PRODUCTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


</nav>

          
            <br>
            <div class="col-md-12">
                <div class="table-responsive">
            <table class="table"
                   *ngIf="products && products.length">
                <thead>
                    <tr>
                        
                            
            
                        <th>FARMER ID</th><br>
                        <th>PRODUCT NAME</th>
                        <th>PRODUCT ID</th>
                        <th>ADDRESS</th>
                        <th>CONTACT</th>
                        
                        </th>
                        
                    </tr>
                     <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["farmer_id"]; ?></td>
                        <td><?php echo $row["product_name"]; ?></td>
                        <td><?php echo $row["product_id"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["contact"]; ?></td>
                        
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
<title>Make your order</title>
</head>
<body>
<form action="insert.php" method="post">
   <p>
      <label for="id_no">id_no:</label>
        <input type="text" name="id_no" id="id_no">
    </p>
  <p>
      <label for="name"> Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
            <label for="name"> Address:</label>
        <input type="text" name="address" id="address">
    </p>
    <p>
      <label for="contact">contact:</label>
        <input type="text" name="contact" id="contact">
    </p>
    <p>
      <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name"
    </p>
     <p>
      <label for="product_id">product_id:</label>
        <input type="text" name="product_id" id="product_id">
    </p>
      <p>
        <label for="farmer_id">farmer ID:</label>
        <input type="text" name="farmer_id" id="farmer_id">
    </p>
    <input type="submit" value="MAKE ORDER">
</form>

<div>
  <ul>
    
      <li><a href="buyerlogout.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Buyer Logout</span></a></li>
    
  </ul>
</div>
</body>
</html>
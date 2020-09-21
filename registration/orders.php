<?php
  include_once 'config.php';
                    $result = mysqli_query($conn,"SELECT  * FROM order_details");
                    ?>
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                     



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ORDERS MADE</a>
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
                        
                            
            
                        <th>BUYER ID</th>
                        <th> NAME</th>
                        <th>ADDRESS</th>
                        <th>CONTACT</th>
                        <th>PRODUCT NAME</th>
                        <th>PRODUCT ID</th>
                        <th>FARMER ID</th>
                        
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
                        <td><?php echo $row["product_name"]; ?></td>
                        <td><?php echo $row["product_id"]; ?></td>
                        <td><?php echo $row["farmer_id"]; ?></td>
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
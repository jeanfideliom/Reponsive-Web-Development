<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <center>
        <h1>Edit Product Details</h1>

        <form action="controller.php" method="POST" enctype="multipart/form-data">

            <table>
                <?php
                    getRecord($_GET['id']);
                ?>

            </table>
            <div class="container">
                <button type="submit" name="edit_product">Update Product Details</button>
                <a href="admin.php"><button type="button">View Product Records</button></a>
            </div>

        </form>
    </center>
</body>
</html>

<?php
    function getRecord($recno){
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM products WHERE  id='$recno'";
        $result = $conn -> query($sql);

        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "
                    <tr>
                        <input type='hidden' name='txtid' value='".$row['id']."'>
                        <th>Image</th>
                        <td><input type='file' name='txtphoto'></td>
                        <input type='hidden' name='txtphoto_old' value='".$row['photo']."'>
                    </tr>

                    <tr>
                        <th>Product Name</th>
                        <td><input type='text' name='txtprodName' value='".$row['prodName']."'></td>
                    </tr>

                    <tr>
                        <th>Product Price</th>
                        <td><input type='number' name='txtprice' value='".$row['price']."'></td>
                    </tr>

                    <tr>
                        <th>Product Description</th>
                        <td><input type='text' name='txtcaption' value='".$row['caption']."'></td>
                    </tr>

                    <tr>
                        <th>Product Category: </th>
                        <td>
                            <select name='txtcategory' class='form-control' required value='".$row['category']."'>
                                <option value='' disabled selected>Choose Category</option>
                                <option value='electronic devices'>Electronic Devices</option>
                                <option value='home and living'>Home and Living</option>
                                <option value='fashion'>Fashion</option>
                                <option value='sports'>Sports</option>
                                <option value='grocery'>Grocery</option>
                            </select>
                        </td>
                    </tr> 
                ";
            }
        }else{
            echo "No Record Found";
        }
    }
?>
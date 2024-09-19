<?php


function individualProd($id)
{   
    include ("../includes/sqlconnection.php");

    $query = "SELECT * FROM products WHERE id = '$id' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($product = $result->fetch_assoc()){
            echo " 
                <header class='col-md-8'>
                    <div class='thumbnail'>
                        <img src='../images/products/$product[category]/$product[photo]' style='width: 50%; height:auto; '>
                        <div class='caption'>
                            <h4 class='pull-right'>$product[price]</h4>
                            <h4>$product[prodName]</h4>
                            <div>
                                <form action='../back-end/controller.php' method='POST' enctype='multipart/form-data'>
                                <input type='hidden' name='txtId' value='".$product['id']."'>
                                <button type='submit' name='add_cart' class='btn btn-primary' style='margin-left:10px; margin-bottom: 10px;'>
                                    Add to Cart
                                </button>
                                </form>
                            </div>
                            <p>Description: $product[caption] </p> 
                        </div>
                    </div> 
                </header>
            ";
        };     
    } else {
        return "Null";
    }
}
function fetchProductbyCateg($categ)
{
    include ("../includes/sqlconnection.php");

    $query = "SELECT * FROM products WHERE category = '$categ' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <div class='col-md-3'>
                <div class='thumbnail'>
                    <img src='../images/products/$categ/{$row['photo']}' style=''width: 100%; height:250px;'>
                    <div class='caption'>
                        <h4 class='pull-right'>{$row['price']}</h4>
                        <h4><a href='product.php?id=$row[id]&categ=$row[category]'>{$row['prodName']}</a></h4>
                        <hr>
                        <p>
                            {$row['caption']}
                        </p>
                    </div>
                </div>
            </div>
            ";
        }
    } else {
        return "No Record Found";
    }
}
function fetchProductbyCategDesc($categ)
{
    include ("../includes/sqlconnection.php");

    $query = "SELECT * FROM products WHERE category = '$categ' ORDER BY price DESC";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <div class='col-md-3'>
                <div class='thumbnail'>
                    <img src='../images/products/$categ/{$row['photo']}' style=''width: 100%; height:250px;'>
                    <div class='caption'>
                        <h4 class='pull-right'>{$row['price']}</h4>
                        <h4><a href='product.php?id=$row[id]&categ=$row[category]'>{$row['prodName']}</a></h4>
                        <hr>
                        <p>
                            {$row['caption']}
                        </p>
                    </div>
                </div>
            </div>
            ";
        }
    } else {
        return "No Record Found";
    }
}
function fetchNumberOfProducts($categ)
{
    include ("../includes/sqlconnection.php");

    $query = "SELECT COUNT(*) as totalProducts FROM products WHERE category = '$categ' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['totalProducts'];
    } else {
        return "No Record Found";
    }

}


function fetchCart(){
    include ("../includes/sqlconnection.php");

    $query = "SELECT * FROM addcart";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($product = $result->fetch_assoc()){
            echo " 
                <div class='cart-item'>
                    <div>
                        <input type='checkbox' class='select-item'>
                        <img class='item' src='../images/products/$product[category]/$product[photo]' style='height: 100px; width: 100px;'>
                        <label>$product[prodName]</label>
                        <p>Price: ₱$product[price]</p>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type='number' value='1' min='0'>
                        <button class='delete-item'>Delete</button>
                    </div>
                </div>
            ";
        };     
    } else {
        return "Null";
    }
}

function checkOutCart(){
    include ("../includes/sqlconnection.php");

    $query = "DELETE FROM addcart";
    if($conn->query($query) === TRUE){
        unlink("images/products/$products[category]/$product[photo]");
        $_SESSION['status'] = "Product Check Out Successfully";
        header('location:cart.php');
    }
    else{
        $_SESSION['status'] = "Product Check Out Error";
        header('location:cart.php');
    }
    $conn->close();
}
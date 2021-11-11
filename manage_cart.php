<?php
require_once "config.php";
    session_start();
    if(isset($_SESSION['username']))
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(isset($_POST['Add_to_cart']))
            {
                if(isset($_SESSION['cart']))
                {
                    $myitems=array_column($_SESSION['cart'],'Item_Name');
                    if(in_array($_POST['Item_Name'],$myitems))
                    {
                        echo "<script>
                        alert('Item already added!');
                        window.location.href='index.php';
                        </script>";
                    }
                    else
                    {
                        $count=count($_SESSION['cart']);
                        $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                        
                        echo "<script>
                        alert('Item added!');
                        window.location.href='index.php';
                        </script>";
                    }
                }
                else
                {
                    $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                    print_r($_SESSION['cart']);
                    echo "<script>
                        alert('Item added!');
                        window.location.href='index.php';
                        </script>";
                }
            }
            if(isset($_POST['Remove_Item']))
            {
                foreach($_SESSION['cart'] as $key=>$value)
                {
                    if($value['Item_Name']==$_POST['Item_Name'])
                    {
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart']=array_values($_SESSION['cart']);
                        echo "<script>
                        alert('Item deleted!');
                        window.location.href='mycart.php';
                        </script>";
                    }
                }
            }
            if(isset($_POST['Inc_Item']))
            {
                foreach($_SESSION['cart'] as $key=>$value)
                {
                    if($value['Item_Name']==$_POST['Item_Name'])
                    {
                        $_SESSION['cart'][$key]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>$_POST['Quantity']+1);
                       echo "<script>
                        alert('Item updated!');
                        window.location.href='mycart.php';
                        </script>";
                    }
                }
                
            }
            if(isset($_POST['Dec_Item']))
            {
                foreach($_SESSION['cart'] as $key=>$value)
                {
                    if($value['Item_Name']==$_POST['Item_Name'])
                    {
                        if($_POST['Quantity']-1==0)
                        {
                            unset($_SESSION['cart'][$key]);
                            $_SESSION['cart']=array_values($_SESSION['cart']);
                            echo "<script>
                            alert('Item deleted!');
                            window.location.href='mycart.php';
                            </script>";
                        }
                        else{
                            $_SESSION['cart'][$key]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>$_POST['Quantity']-1);
                            echo "<script>
                             alert('Item updated!');
                             window.location.href='mycart.php';
                             </script>";
                        }
                    }
                }
                
            }
        }
    }
   else
   {
       echo "<script>
       alert('Please register!');
       window.location.href='login.php';
       </script>";
   }
?>
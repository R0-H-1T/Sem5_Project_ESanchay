<?php
    require('fpdf.php');
    $name = "localhost";
    $username = "root";
    $password = "";
    $dbname = "e_sanchayy";
    $conn = mysqli_connect($name, $username, $password, $dbname);
    if ($conn) {
        
        mysqli_select_db($conn, $dbname);
    }
    else{
        echo"Not connected to the Database.";
    }
  
        $productID = 1;
            $sql = "SELECT  UserID, UserName, Email, UserAddress, PhoneNumber, productID ,productCategory, productDate, productAns, productType, adminResponse, productImgPath, userResponse,productCategory, productPrice from users join products on UserID = user_ID where productID = $productID";  
            // $sql = "SELECT userName from users join products on user_id = userID where productID = $productID";
            $result = mysqli_query($conn, $sql);
            $date = date('d-m-y');
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                //echo $row["userName"];
                $protype =$row["productAns"];
                $str_arr = explode (",", $protype);
                $pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )
$pdf->Image('favicon.png',10,5,-600);
$pdf->Cell(189 ,10,'',0,1);//end of line
$pdf->Cell(189 ,10,'',0,1);//end of line
$pdf->Cell(189 ,10,'',0,1);//end of line

$pdf->Cell(130 ,5,'E-Sanchay',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'845, Shivaji Nagar',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'Pune, Maharashtra, 411004',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$pdf->Cell(34 ,5, $date,0,1);//end of line
$random= rand(1,99999);
$pdf->Cell(130 ,5,'Phone +91 2067576200',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,"$random",0,1);//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Customer ID  ',0,0);
$pdf->Cell(34 ,5, "  ".$row["UserID"],0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5, $row["UserName"],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5, $row["UserAddress"],0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5, "Phone: ".$row["PhoneNumber"],0,1);

$pdf->Cell(10 ,5,'',0,1);
// $pdf->Cell(90 ,5,'[Phone]',0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(50 ,5,'Product ',1,0);
$pdf->Cell(100 ,5,'Description',1,0);
$pdf->Cell(34 ,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(50 ,5,"Product Category ",1,0);
$pdf->Cell(100 ,5,$row["productCategory"],1,0);
$pdf->Cell(34 ,5,'-',1,1,'R');//end of line
$temp="";
foreach($str_arr as $key){
    $temp.= $key."\n" ;
    }
$pdf->Cell(50 ,5,"Product info" ,1,0);
$pdf->Cell(100 ,5,$row["productAns"],1,0,'L');
$pdf->Cell(34 ,5,$row["productPrice"],1,1,'R');//end of line

$pdf->Cell(50 ,5,'Status of product ',1,0);
$pdf->Cell(100 ,5,$row["adminResponse"],1,0);
$pdf->Cell(34 ,5,'-',1,1,'R');//end of line

$pdf->Cell(50 ,5,'Type of Product',1,0);
$pdf->Cell(100 ,5,$row["productType"],1,0);
$pdf->Cell(34 ,5,'-',1,1,'R');//end of line

$pdf->Cell(50 ,5,'Product Pickup',1,0);
$pdf->Cell(100 ,5,'34r3',1,0);
$pdf->Cell(34 ,5,'-',1,1,'R');//end of line

//summary
$pdf->Cell(50 ,5,'',0,0);
$pdf->Cell(93 ,5,'Subtotal',0,0 ,'R');
$pdf->Cell(7 ,5,"Rs.",1,0);
$pdf->Cell(34 ,5,$row["productPrice"],1,1,'R');//end of line

$pdf->Cell(50 ,5,'',0,0);
$pdf->Cell(93 ,5,'Total Credit',0,0 ,'R');
$pdf->Cell(7 ,5,'Rs.',1,0);
$pdf->Cell(34 ,5,$row["productPrice"],1,1,'R');//end of line

// $pdf->Cell(130 ,5,'',0,0);
// $pdf->Cell(25 ,5,'Tax Rate',0,0);
// $pdf->Cell(4 ,5,'$',1,0);
// $pdf->Cell(30 ,5,'10%',1,1,'R');//end of line

// $pdf->Cell(130 ,5,'',0,0);
// $pdf->Cell(25 ,5,'Total Due',0,0);
// $pdf->Cell(4 ,5,'$',1,0);
// $pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line
$pdf->Output();
            }else {
                echo "greater than one; REALLY";
            }

            



  

?>
<?php 



include("include/connection.php");

if (isset($_POST['book'])) {
	
		$depature = $_POST['depat'];
		$destination = $_POST['dest'];
		$travel = $_POST['travel'];
		$bus = $_POST['bus'];
		$adults = $_POST['adult'];
		$children = $_POST['child'];
		$luggage = $_POST['lug'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$description = $_POST['des'];
		
		$error = array();

		if (empty($depature)) {
			$error['book'] = "Enter Depature";

		}else if (empty($destination)) {
			$error['book'] = "Enter Destination";

		}else if (empty($travel)) {
			$error['book'] = "Enter Travel";

		}else if (empty($bus)) {
			$error['book'] = "Enter Bus";

		}else if ($adults =="") {
			$error['book'] = "Select Number of adults";

		}else if (empty($children)) {
			$error['book'] = "Enter Number of children";

		}else if (empty($luggage)) {
			$error['book'] = "Enter luggage";

		}else if (empty($email)) {
			$error['book'] = "Enter Email";

		}else if (empty($phone)) {
			$error['book'] = "Enter Phone";

		}else if (empty($description)) {
			$error['book'] = "Enter Description";

		
		if (count($error) == 0) {

			 $query = "INSERT INTO book(departure,destination,traveldate,bustype,adults,children,luggage,email,phone,description)  VALUES('$depature','$destination','$travel','$bus','$adults','$children','$luggage','$email','$phone','$description')";

			 $result = mysqli_query($connect,$query);

			 if ($result) {
			 	
			 	echo "<script>alert('You have successfuly booked')</script>";

			 	//header("Location: doctorlogin.php");

			 }else {

			 	echo "<script>alert('Failed')</script>";
			 }

		}

}

if (isset($error)) {
	$s =$error['book'];

	$show  = "<h5 class='text-center alert alert-danger'>$s</h5>";


	}else{
		$show = "";
	}


 ?>



<!DOCTYPE html>
<html>

<head>
    <title>Book with us @link Bus Services </title>
</head>

<body style="background-image: url(images/background.jpg); background-size: cover; background-repeat: no-repeat;">

    <?php 

	include("include/header.php");

 	?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron my-2">
                    <h5 class="text-center my-2">Make your reservation</h5>

                    <div>

                        <?php echo $show; ?>
                    </div>
                    <form method="post">

                        <div class="form-group">
                            <label>Depature area</label>
                            <input type="text" name="depat" class="form-control" autocomplete="off"
                                placeholder="Enter town/city">
                        </div>
                        <div class="form-group">
                            <label>Destination</label>
                            <input type="text" name="dest" class="form-control" autocomplete="off"
                                placeholder="Enter town/city">
                        </div>
                        <div class="form-group">
                            <label>Travel date</label>
                            <input type="date" name="travel" class="form-control" autocomplete="off"
                                placeholder="Enter travel date">
                        </div>

                        <div class="form-group">
                            <label>Bus type</label>
                            <select name="bus" class="form-control">
                                <option value="">select bus</option>
                                <option value="ordinally">ordinally</option>
                                <option value="VIP">VIP</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label>Adults</label>
                            <select name="adult" class="form-control">
                                <option value="">no of adults</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">more</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Children</label>
                            <select name="child" class="form-control">
                                <option value="">no of children</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">more</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Luggage</label>
                            <select name="lug" class="form-control">
                                <option value="">luggage</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" autocomplete="off"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" name="phone" class="form-control" autocomplete="off"
                                placeholder="Enter phone number">
                        </div>
                        <div class="form-group">
                            <label>Description(if any)</label>
                            <input type="text" name="des" class="form-control" autocomplete="off"
                                placeholder="incase of more numbers">
                        </div>

                        <input type="submit" name="book" class="btn btn-success" value="Book">


                    </form>

            
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>


</body>

</html>
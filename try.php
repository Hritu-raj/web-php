<?php
$conn=mysqli_connect("localhost","root","","library");
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
$query="select * from book";
$result=mysqli_query($conn,$query);







if (mysqli_num_rows($result) > 0) {
	print"<center>";
	
	echo"<table border='1'><tr><th>booknmae</th><th>bookid</th><th>price</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td style='background-color:red'>". $row["bookname"]."</td><td>". $row["bookid"] ."</td><td>".$row["price"]."</td></tr>";
    }

} else {
    echo "0 results";
}

mysqli_close($conn);

?>

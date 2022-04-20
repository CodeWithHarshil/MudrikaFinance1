
<?PHP
include('config.php');
$id = $_GET['id'];
$result1=mysqli_query($conn,"SELECT * from career where id= $id");
// if($res['file_name']=.img){
while ($res = mysqli_fetch_array($result1)) {

    $folder_dir = "uimage/";
        $x=("$folder_dir");
        $y=("$res[file_name]");
        $c = $x.$y;

    $file="$c";



    header('Content-type: application/pdf');
    header("Content-Length: " . filesize($file));
    
//     header('Content-Disposition: inline; filename="' . $res['file_name'] . '"');
      
//     header('Content-Transfer-Encoding: binary');
      
//     header('Accept-Ranges: bytes');
      
    
    readfile($file); 	}

 
// }
// //echo "<img src= $id >"; 



    ?> 
    

  

<?php
$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma","quicktime","MOV","mov");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);


if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "video/MOV")
|| ($_FILES["file"]["type"] == "video/quicktime")
|| ($_FILES["file"]["type"] == "audio/wma")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
      echo "<script>alert('some error in uploading file'); window.location.href='staff.single.php';</script>";
    }
  else
    {

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      echo "<script>alert('".$_FILES["file"]["name"] . " already exists.');window.location.href='staff.single.php';</script>";
      }
    else
      {
        move_uploaded_file($_FILES["file"]["tmp_name"],
        "upload/" . $_FILES["file"]["name"]);
        echo "<script>alert('"."Stored in: " . "upload/" . $_FILES["file"]["name"]."');window.location.href='staff.single.php';</script>";
      }
    }
  }
else
  {
      //echo "sss";
  }
?>
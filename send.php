<?php  
if(isset($_POST['submit'])) {
    $name       = $_POST['name'];
    $alamat     = $_POST['alamat'];
    $pemesanan  = $_POST['pemesanan'];
    $no_wa      = $_POST['noWa'];
   header ("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20Alamat:%20$alamat%20Pemesanan:%20$pemesanan");
    } else {
            echo "
                <script>
                window.location=history.go(-1);
                </script>
            ";
    }
?>

<?php
session_start();
if(isset($_SESSION['uid']) && $_SESSION["userid"]===true)
{
header('Location: index.html');
}
else
{
header('Location: account.html');
}
?>
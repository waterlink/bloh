<?require_once $_SERVER['DOCUMENT_ROOT'].'/logic/users/authorization.php'; ?>
<div class="top-panel">
<?
echo $user;
if ($user == null){
  require_once $_SERVER['DOCUMENT_ROOT'].'/views/users/sign_in.php';
}
else {
  require_once $_SERVER['DOCUMENT_ROOT'].'/views/users/signed.php';
}
?>
</div>

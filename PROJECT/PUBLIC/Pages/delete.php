<?php if(isset($_GET['id']) && isset($_POST['delete'])) {
    require_once('../../PRIVATE/config/connection.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM patient WHERE id=$id";
    if ($conn->query($sql) === true) {
        header("Location: patients.php");
    } else {
        echo "failed";
    }
}
?>


<?php include_once('inc/header.php'); ?>
<?php if (isset($_GET['id'])): ?>
<style media="screen">
    .card {
        width: 25rem;
        margin:2% auto;
        height:25%;
        border:3px solid red;
        height:540px;
        padding:10px;
    }

</style>
<div class="card" style="">
  <img src="../images/delete.png" class="card-img-top" alt="caution" height=350>
  <div class="card-body">
    <h5 class="card-title">Caution</h5>
    <p class="card-text">You are about to <b>delete everything</b> about this patient, click carefully on below button.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $_GET['id']; ?>" method="POST">
        <input type="submit" class="btn btn-warning" name="delete" value="Delete" style="width:100%;">
    </form>
  </div>
</div>

<?php endif; ?>
<?php include_once('inc/footer.php'); ?>

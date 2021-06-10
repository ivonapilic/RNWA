<div class="forma" >
<div class="title">Are you sure?</div>
<td><a href="?controller=faculty&action=delete&fa=<?php echo $_GET["fa"]?>" class="DelBtn"> Confirm</a></td>
<td><a onclick="goBack()" class="DodajBtn">Back</a></td>

<script>
function goBack() {
  window.history.back();
}
</script>
</div>
<div class="forma" >
<div class="title">Are you sure?</div>
<td><a href="?controller=subjects&action=delete&sub=<?php echo $_GET["sub"]?>" class="DelBtn"> Confirm</a></td>
<td><a onclick="goBack()" class="DodajBtn">Back</a></td>

<script>
function goBack() {
  window.history.back();
}
</script>
</div>
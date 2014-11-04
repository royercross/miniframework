<div class="form-group">
  <label for="<?=$campo;?>"><?=$texto;?></label>
  <select name="<?=$campo;?>" class="form-control">
  	<?php foreach($opciones as $key=>$val){ ?>
  		<option value="<?=$key;?>"><?=$val;?></option>
	<?php } ?>
  </select>
</div>
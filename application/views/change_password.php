<?php
  $attributes = array('id' => 'change_password_form');
  echo form_open('edit_profile', $attributes); 
?>
  <label for="currentpassword">Current password:</label>
  <input type="password" size="12" id="currentpassword" name="currentpassword"/>
  <?php echo form_error('currentpassword', '<span class="validation_error">', '</span>'); ?>

  <label for="newpassword">New password:</label>
  <input type="password" size="12" id="newpassword" name="newpassword"/>
  <?php echo form_error('newpassword', '<span class="validation_error">', '</span>'); ?>

  <label for="confpassword">Confirm new password:</label>
  <input type="password" size="12" id="confpassword" name="confpassword"/>
  <?php echo form_error('confpassword', '<span class="validation_error">', '</span>'); ?>

  <br>
  <input type="submit" value="Change password"/>
</form>

<script>
 var frm = $('#change_password_form');
    frm.submit(function () {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                $('#main_container').html(data);
            }
        });

        return false;
    });
</script>
<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" indent="yes" media-type="text/html"/>

<xsl:template match="/">


<form action="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php/edit_profile" method="post" accept-charset="utf-8" id="change_password_form">
  
  <label for="currentpassword">Current password:</label>
  <input type="password" size="12" id="currentpassword" name="currentpassword"/>

  <label for="newpassword">New password:</label>
  <input type="password" size="12" id="newpassword" name="newpassword"/>

  <label for="confpassword">Confirm new password:</label>
  <input type="password" size="12" id="confpassword" name="confpassword"/>

  <br></br>
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


</xsl:template>

</xsl:stylesheet>
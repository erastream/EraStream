<html>      <head>          <title>CREATE New CHANNEL</title>      </head>      <body>  				<?php			$this->load->helper('form');			echo form_open('live/createChannel');			?>				channel name: <input type="text" name="channel_name"></input></br>		channel desc : <input type="text" name="channel_disc"></input></br>		<input type="hidden" name="user_id" value="<?=$user_id?>">		<input type="submit" value="Go"></input>		</form>						    </body>  </html>
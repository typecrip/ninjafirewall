<?php
/*
 +---------------------------------------------------------------------+
 | NinjaFirewall (WP edition)                                          |
 |                                                                     |
 | (c) NinTechNet - http://nintechnet.com/                             |
 +---------------------------------------------------------------------+
 | REVISION: 2015-01-01 19:01:57                                       |
 +---------------------------------------------------------------------+
 | This program is free software: you can redistribute it and/or       |
 | modify it under the terms of the GNU General Public License as      |
 | published by the Free Software Foundation, either version 3 of      |
 | the License, or (at your option) any later version.                 |
 |                                                                     |
 | This program is distributed in the hope that it will be useful,     |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of      |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the       |
 | GNU General Public License for more details.                        |
 +---------------------------------------------------------------------+ i18n
*/

if (! defined( 'NFW_ENGINE_VERSION' ) ) { die( 'Forbidden' ); }

if (nf_not_allowed( 1, __LINE__ ) ) { exit; }

$nfw_options = get_option( 'nfw_options' );

echo '<div class="wrap">
	<div style="width:54px;height:52px;background-image:url( ' . plugins_url() . '/ninjafirewall/images/ninjafirewall_50.png);background-repeat:no-repeat;background-position:0 0;margin:7px 5px 0 0;float:left;"></div>
	<h2>' . __('Event Notifications', 'ninjafirewall') . '</h2>
	<br />';

// Saved ?
if ( isset( $_POST['nfw_options']) ) {
	nf_sub_event_save();
	echo '<div class="updated settings-error"><p><strong>' . __('Your changes have been saved.', 'ninjafirewall') . '</strong></p></div>';
	$nfw_options = get_option( 'nfw_options' );
}

if (! isset( $nfw_options['a_0'] ) ) {
	$nfw_options['a_0'] = 1;
}
?>
	<form method="post" name="nfwalerts">

	<h3><?php _e('WordPress admin dashboard', 'ninjafirewall') ?></h3>
	<table class="form-table">
		<tr>
			<th scope="row"><?php _e('Send me an alert whenever', 'ninjafirewall') ?></th>
			<td align="left">
			<p><label><input type="radio" name="nfw_options[a_0]" value="1"<?php checked( $nfw_options['a_0'], 1) ?>>&nbsp;<?php _e('An administrator logs in (default)', 'ninjafirewall') ?></label></p>
			<p><label><input type="radio" name="nfw_options[a_0]" value="2"<?php checked( $nfw_options['a_0'], 2) ?>>&nbsp;<?php _e('Someone (user, admin, editor...) logs in', 'ninjafirewall') ?></label></p>
			<p><label><input type="radio" name="nfw_options[a_0]" value="0"<?php checked( $nfw_options['a_0'], 0) ?>>&nbsp;<?php _e('No, thanks', 'ninjafirewall') ?></label></p>
			</td>
		</tr>
	</table>

	<br />

	<h3><?php _e('Plugins', 'ninjafirewall') ?></h3>
	<table class="form-table">
		<tr>
			<th scope="row"><?php _e('Send me an alert whenever someone', 'ninjafirewall') ?></th>
			<td align="left">
			<p><label><input type="checkbox" name="nfw_options[a_11]" value="1"<?php checked( $nfw_options['a_11'], 1) ?>>&nbsp;<?php _e('Uploads a plugin (default)', 'ninjafirewall') ?></label></p>
			<p><label><input type="checkbox" name="nfw_options[a_12]" value="1"<?php checked( $nfw_options['a_12'], 1) ?>>&nbsp;<?php _e('Installs a plugin (default)', 'ninjafirewall') ?></label></p>
			<p><label><input type="checkbox" name="nfw_options[a_13]" value="1"<?php checked( $nfw_options['a_13'], 1) ?>>&nbsp;<?php _e('Activates a plugin', 'ninjafirewall') ?></label></p>
			<p><label><input type="checkbox" name="nfw_options[a_14]" value="1"<?php checked( $nfw_options['a_14'], 1) ?>>&nbsp;<?php _e('Updates a plugin', 'ninjafirewall') ?></label></p>
			<p><label><input type="checkbox" name="nfw_options[a_15]" value="1"<?php checked( $nfw_options['a_15'], 1) ?>>&nbsp;<?php _e('Deactivates a plugin (default)', 'ninjafirewall') ?></label></p>
			<p><label><input type="checkbox" name="nfw_options[a_16]" value="1"<?php checked( $nfw_options['a_16'], 1) ?>>&nbsp;<?php _e('Deletes a plugin', 'ninjafirewall') ?></label></p>
			</td>
		</tr>
	</table>

	<br />

	<h3><?php _e('Themes', 'ninjafirewall') ?></h3>
	<table class="form-table">
		<tr>
			<th scope="row"><?php _e('Send me an alert whenever someone', 'ninjafirewall') ?></th>
			<td align="left">
			<p><label><input type="checkbox" name="nfw_options[a_21]" value="1"<?php checked( $nfw_options['a_21'], 1) ?>>&nbsp;<?php _e('Uploads a theme (default)', 'ninjafirewall') ?></label></p>
			<p><label><input type="checkbox" name="nfw_options[a_22]" value="1"<?php checked( $nfw_options['a_22'], 1) ?>>&nbsp;<?php _e('Installs a theme (default)', 'ninjafirewall') ?></label></p>
			<p><label><input type="checkbox" name="nfw_options[a_23]" value="1"<?php checked( $nfw_options['a_23'], 1) ?>>&nbsp;<?php _e('Activates a theme', 'ninjafirewall') ?></label></p>
			<p><label><input type="checkbox" name="nfw_options[a_24]" value="1"<?php checked( $nfw_options['a_24'], 1) ?>>&nbsp;<?php _e('Deletes a theme', 'ninjafirewall') ?></label></p>
			</td>
		</tr>
	</table>

	<br />

	<h3><?php _e('Core', 'ninjafirewall') ?></h3>
	<table class="form-table">
		<tr>
			<th scope="row"><?php _e('Send me an alert whenever someone', 'ninjafirewall') ?></th>
			<td align="left">
			<p><label><input type="checkbox" name="nfw_options[a_31]" value="1"<?php checked( $nfw_options['a_31'], 1) ?>>&nbsp;<?php _e('Updates WordPress (default)', 'ninjafirewall') ?></label></p>
			</td>
		</tr>
	</table>

	<br />

	<?php
	if (! isset( $nfw_options['a_51']) ) {
		$nfw_options['a_51'] = 1;
	}
	?>
	<h3><?php _e('Database', 'ninjafirewall') ?></h3>
	<table class="form-table">
		<tr>
			<th scope="row"><?php _e('Send me an alert whenever', 'ninjafirewall') ?></th>
			<td align="left">
				<p><label><input type="checkbox" name="nfw_options[a_51]" value="1"<?php checked( $nfw_options['a_51'], 1) ?>>&nbsp;<?php _e('An administrator account is created, modified or deleted in the database (default)', 'ninjafirewall') ?></label></p>
			</td>
		</tr>
	</table>

	<br />

	<h3><?php _e('Log', 'ninjafirewall') ?></h3>
	<table class="form-table">
		<tr>
			<th scope="row"><?php _e('Write all events to the firewall log', 'ninjafirewall') ?></th>
			<td align="left">
			<p><label><input type="checkbox" name="nfw_options[a_41]" value="1"<?php checked( $nfw_options['a_41'], 1) ?>>&nbsp;<?php _e('Yes (default)', 'ninjafirewall') ?></label></p>
			</td>
		</tr>
	</table>

	<br />

<?php
if (! is_multisite() ) {
?>
	<h3><?php _e('Contact email', 'ninjafirewall') ?></h3>
	<table class="form-table">
		<tr style="background-color:#F9F9F9;border: solid 1px #DFDFDF;">
			<th scope="row"><?php _e('Alerts should be sent to', 'ninjafirewall') ?></th>
			<td align="left">
			<input class="regular-text" type="text" name="nfw_options[alert_email]" size="45" maxlength="250" value="<?php echo empty( $nfw_options['alert_email']) ? get_option('admin_email') : $nfw_options['alert_email'] ?>">
			<input type="hidden" name="nfw_options[alert_sa_only]" value="2">
			</td>
		</tr>
	</table>

<?php
} else {
	// Select which admin(s) will recevied alerts in multi-site mode :
	if (! isset( $nfw_options['alert_sa_only'] ) ) {
		$nfw_options['alert_sa_only'] = 2;
	}
?>
	<h3><?php _e('Contact email', 'ninjafirewall') ?></h3>
	<table class="form-table">
		<tr style="background-color:#F9F9F9;border: solid 1px #DFDFDF;">
			<th scope="row"><?php _e('Alerts should be sent to', 'ninjafirewall') ?></th>
			<td align="left">
			<p><label><input type="radio" name="nfw_options[alert_sa_only]" value="1"<?php checked( $nfw_options['alert_sa_only'], 1 ) ?>>&nbsp;<?php _e('Only to me, the Super Admin', 'ninjafirewall') ?> (<?php echo get_option('admin_email'); ?>)</label></p>
			<p><label><input type="radio" name="nfw_options[alert_sa_only]" value="2"<?php checked( $nfw_options['alert_sa_only'], 2) ?>>&nbsp;<?php _e('To the administrator of the site where originated the alert (default)', 'ninjafirewall') ?></label></p>
			<input type="hidden" name="nfw_options[alert_email]" value="<?php echo get_option('admin_email'); ?>">
			</td>
		</tr>
	</table>
<?php
}
?>

	<br />
	<br />
	<input class="button-primary" type="submit" name="Save" value="<?php _e('Save Event Notifications', 'ninjafirewall') ?>" />

	</form>

</div>
<?php

/* ------------------------------------------------------------------ */

function nf_sub_event_save() {

	// Save Event Notifications :

	if (nf_not_allowed( 1, __LINE__ ) ) { exit; }

	if (! current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have sufficient permissions to access this page.',
			'', array( 'response' => 403 ) );
	}

	$nfw_options = get_option( 'nfw_options' );

	if (! preg_match('/^[012]$/', $_POST['nfw_options']['a_0']) ) {
		$nfw_options['a_0'] = 1;
	} else {
		$nfw_options['a_0'] = $_POST['nfw_options']['a_0'];
	}

	if (! preg_match('/^[12]$/', $_POST['nfw_options']['alert_sa_only']) ) {
		$nfw_options['alert_sa_only'] = 2;
	} else {
		$nfw_options['alert_sa_only'] = $_POST['nfw_options']['alert_sa_only'];
	}

	if ( empty( $_POST['nfw_options']['a_11']) ) {
		$nfw_options['a_11'] = 0;
	} else {
		$nfw_options['a_11'] = 1;
	}
	if ( empty( $_POST['nfw_options']['a_12']) ) {
		$nfw_options['a_12'] = 0;
	} else {
		$nfw_options['a_12'] = 1;
	}
	if ( empty( $_POST['nfw_options']['a_13']) ) {
		$nfw_options['a_13'] = 0;
	} else {
		$nfw_options['a_13'] = 1;
	}
	if ( empty( $_POST['nfw_options']['a_14']) ) {
		$nfw_options['a_14'] = 0;
	} else {
		$nfw_options['a_14'] = 1;
	}
	if ( empty( $_POST['nfw_options']['a_15']) ) {
		$nfw_options['a_15'] = 0;
	} else {
		$nfw_options['a_15'] = 1;
	}
	if ( empty( $_POST['nfw_options']['a_16']) ) {
		$nfw_options['a_16'] = 0;
	} else {
		$nfw_options['a_16'] = 1;
	}

	if ( empty( $_POST['nfw_options']['a_21']) ) {
		$nfw_options['a_21'] = 0;
	} else {
		$nfw_options['a_21'] = 1;
	}
	if ( empty( $_POST['nfw_options']['a_22']) ) {
		$nfw_options['a_22'] = 0;
	} else {
		$nfw_options['a_22'] = 1;
	}
	if ( empty( $_POST['nfw_options']['a_23']) ) {
		$nfw_options['a_23'] = 0;
	} else {
		$nfw_options['a_23'] = 1;
	}
	if ( empty( $_POST['nfw_options']['a_24']) ) {
		$nfw_options['a_24'] = 0;
	} else {
		$nfw_options['a_24'] = 1;
	}

	if ( empty( $_POST['nfw_options']['a_31']) ) {
		$nfw_options['a_31'] = 0;
	} else {
		$nfw_options['a_31'] = 1;
	}

	if ( empty( $_POST['nfw_options']['a_41']) ) {
		$nfw_options['a_41'] = 0;
	} else {
		$nfw_options['a_41'] = 1;
	}

	if ( empty( $_POST['nfw_options']['a_51']) ) {
		$nfw_options['a_51'] = 0;
	} else {
		$nfw_options['a_51'] = 1;
	}

	if (! empty( $_POST['nfw_options']['alert_email']) ) {
		$nfw_options['alert_email'] = sanitize_email( $_POST['nfw_options']['alert_email'] );
	}
	if ( empty( $nfw_options['alert_email'] ) ) {
		$nfw_options['alert_email'] = get_option('admin_email');
	}

	// Update options :
	update_option( 'nfw_options', $nfw_options );

}

/* ------------------------------------------------------------------ */
// EOF

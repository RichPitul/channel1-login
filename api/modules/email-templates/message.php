<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Urgent</title>
	<?php include('head.php'); ?>
</head>
<body style="margin: 0; padding: 0;">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td>
				<table align="center" cellpadding="0" cellspacing="0" width="520" style="border-collapse: collapse; ">
					<?php include('header.php'); ?>
					<tr>
						<td style="padding:0 1em; text-align:center; font-size: 1rem;">
							<p style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; font-size: 1.25rem; color: #1f3044; margin:24px 0;"><?php echo $message; ?></p>
							<p style="font-family: Helvetica, Arial, sans-serif;">Use this link to login: <a style="font-weight:bold;" href="<?php echo $domain;?>"><?php echo $domain;?></a></p>
						</td>
					</tr>
					<?php include('footer.php'); ?>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
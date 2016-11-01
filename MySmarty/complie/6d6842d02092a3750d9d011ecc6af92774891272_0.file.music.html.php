<?php
/* Smarty version 3.1.30, created on 2016-10-31 12:01:58
  from "/usr/local/nginx/html/application/views/music.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581732b633dc79_98232615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d6842d02092a3750d9d011ecc6af92774891272' => 
    array (
      0 => '/usr/local/nginx/html/application/views/music.html',
      1 => 1477737161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581732b633dc79_98232615 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>Music</title>
	<link rel="stylesheet" type="text/css" href="../../resource/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../resource/css/music.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 left"></div>
			<div class="col-sm-9 right">
			<?php echo $_smarty_tpl->tpl_vars['data']->value[0];?>

				<!--<?php echo '<?php ';?>foreach($list as $item): <?php echo '?>';?>
					<?php echo '<?php ';?>echo $item <?php echo '?>';?><br/>
				<?php echo '<?php ';?>endforeach <?php echo '?>';?>-->
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../resource/js/jquery-3.1.0.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

<div class="main">
<table align="center" cellpadding="0" cellspacing="3" width="850">
	<tbody>
		<tr>
            <td height="305" width="170" valign="top">
                <div class="list">
                    <center> MAIN MENU </center><br>
                    <div class="point"> <a href="index.php" <?php if(!isset($_GET['p'])){ echo 'class="bold"'; } ?>>Index</a></div>
                    <div class="point"> <a href="index.php?p=News" <?php if($_GET['p']=='News'){ echo 'class="bold"'; } ?>>Edit news</a></div>
                    <div class="point"> <a href="index.php?p=ManageNews" <?php if($_GET['p']=='ManageNews'){ echo 'class="bold"'; } ?>>News management</a></div>
                    <div class="point"> <a href="index.php?p=Onlines" <?php if($_GET['p']=='Onlines'){ echo 'class="bold"'; } ?>>Players online</a></div>
                    <div class="point"> <a href="index.php?p=Users" <?php if($_GET['p']=='Users'){ echo 'class="bold"'; } ?>>Management team</a></div>
                    <div class="point"> <a href="index.php?p=Inbox" <?php if($_GET['p']=='Inbox'){ echo 'class="bold"'; } ?>>Messages</a></div>
                    <div class="point"> <a href="index.php?p=Messages" <?php if($_GET['p']=='Messages'){ echo 'class="bold"'; } ?>>Letters</a></div>
                    <div class="point"> <a href="index.php?p=Search" <?php if($_GET['p']=='Search'){ echo 'class="bold"'; } ?>>Search player</a></div>
                    <div class="point"> <a href="index.php?p=Banned" <?php if($_GET['p']=='Banned'){ echo 'class="bold"'; } ?>>Ban player</a></div>
                    <div class="point"> <a href="index.php?p=Gold" <?php if($_GET['p']=='Gold'){ echo 'class="bold"'; } ?>>Gold and Silver</a></div>
                    <div class="point"> <a href="index.php?p=Newsletter" <?php if($_GET['p']=='Newsletter'){ echo 'class="bold"'; } ?>>Newsletter</a></div>
                    <div class="point"> <a href="index.php?p=Backup" <?php if($_GET['p']=='Backup'){ echo 'class="bold"'; } ?>>Backup</a></div>
                    <div class="point"> <a href="index.php?p=Config" <?php if($_GET['p']=='Config'){ echo 'class="bold"'; } ?>>Travian settings</a></div><br />
                    <div class="point"> <a target="_blank" href="<?php echo HOMEPAGE; ?>" class="bold">View website</a></div>
                    <div class="point"> <a href="?action=logout" class="bold">Log-Out</a></div>
                </div>
            </td>
			<td width="670" valign="top">
				<?php include "top.php"; ?>
				<table align="center" cellpadding="0" cellspacing="3">
					<tbody>
						<tr>
							<td height="12" width="425" valign="middle"></td>
							<td height="12" width="236"></td>
						</tr>
						<tr>
							<td width="664" colspan="2" valign="top"></td>
						</tr>
                        <tr>
                            <td height="261" width="664" colspan="2" valign="top">
                            <div class="page">
<?php
	if($_POST or $_GET){
		if($_GET['p'] and $_GET['p']!="search"){
			$filename = 'tpl/'.$_GET['p'].'.php';
			if(file_exists($filename)){
				include($filename);
			}else{
				include('tpl/404.php');
			}
		}else{
			include('tpl/search.tpl');
		}
		if($_POST['p'] and $_POST['s']){
			$filename = 'tpl/results_'.$_POST['p'].'.tpl';
			if(file_exists($filename)){
				include($filename);
			}else{
				include('tpl/404.php');
			}
		}
	}else{
		include('tpl/home.php');
	}
?>
                            </div>
                            </td>
                        </tr>
					</tbody>
        		</table>
        	</td>
		</tr>
	</tbody>
</table>
</div>
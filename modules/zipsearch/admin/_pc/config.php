<?php
include_once $g['path_module'].$module.'/var/var.php';
?>

<div id="configbox">

	<form name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return saveCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $module?>" />
	<input type="hidden" name="a" value="config" />

	<div class="title">
		주소찾기 설정
	</div>

	<table>
		<tr>
			<td class="td1">
				데스크탑 테마	
		   </td>
			<td class="td2">
				
				<select name="skin_pc" class="select1">
				<option value="">&nbsp;+ 선택하세요</option>
				<option value="">--------------------------------</option>
				<?php $tdir = $g['path_module'].$module.'/theme/_pc/'?>
				<?php $dirs = opendir($tdir)?>
				<?php while(false !== ($skin = readdir($dirs))):?>
				<?php if($skin=='.' || $skin == '..' || is_file($tdir.$skin))continue?>
				<option value="_pc/<?php echo $skin?>" title="<?php echo $skin?>"<?php if($d['zipsearch']['skin_pc']=='_pc/'.$skin):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($tdir.$skin)?>(<?php echo $skin?>)</option>
				<?php endwhile?>
				<?php closedir($dirs)?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="td1 m">
				(모바일테마)
			</td>
			<td class="td2">
				
				<select name="skin_mobile" class="select1">
				<option value="">&nbsp;+ 선택하세요</option>
				<option value="">--------------------------------</option>
				<?php $tdir = $g['path_module'].$module.'/theme/_mobile/'?>
				<?php $dirs = opendir($tdir)?>
				<?php while(false !== ($skin = readdir($dirs))):?>
				<?php if($skin=='.' || $skin == '..' || is_file($tdir.$skin))continue?>
				<option value="_mobile/<?php echo $skin?>" title="<?php echo $skin?>"<?php if($d['zipsearch']['skin_mobile']=='_mobile/'.$skin):?> selected="selected"<?php endif?>>ㆍ<?php echo getFolderName($tdir.$skin)?>(<?php echo $skin?>)</option>
				<?php endwhile?>
				<?php closedir($dirs)?>
				</select>
			</td>
		</tr>		
	</table>





	<div class="submitbox">
		<input type="submit" class="btnblue" value=" 확인 " />
	</div>

	</form>

</div>




<script type="text/javascript">
//<![CDATA[
function saveCheck(f)
{
	if (f.skin_pc.value == '')
	{
		alert('데스크탑 테마를 선택해 주세요.       ');
		f.skin_pc.focus();
		return false;
	}
	if (f.skin_mobile.value == '')
	{
		alert('모바일테마를 선택해 주세요.       ');
		f.skin_mobile.focus();
		return false;
	}

	return confirm('정말로 실행하시겠습니까?         ');
}
//]]>
</script>



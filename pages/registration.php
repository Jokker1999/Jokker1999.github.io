<?php
$reg_show=1;
if(!isset($_POST['u_login'])){
$u_login='';
$u_qiwi='';
}
else{
$warning='';

$u_login=$_POST['u_login'];
$u_login=preg_replace('#[^a-zA-Z\-\_0-9]+#','',$u_login);
$u_login=trim($u_login);

if(strlen($u_login)<3){ $warning.='����� �� ������ 3 ��������<br>'; }
else{
$ulq=mysql_query("SELECT login FROM users WHERE login LIKE '".$u_login."'");
if(mysql_num_rows($ulq)>0){ $warning.='���� ����� �����<br>'; }
}

$u_qiwi=$_POST['u_qiwi'];
$u_qiwi=preg_replace('#[^a-zA-Z\-\_0-9]+#','',$u_qiwi);
if(strlen($u_qiwi)<3){ $warning.='������ �� ����� 3 ��������<br>'; }
if(strlen($u_qiwi)>30){ $warning.='������ �� ����� 30 ��������<br>'; }

if($warning==''){
$u_ref=''; if(!empty($_SESSION['ref_login'])){ $u_ref=$_SESSION['ref_login']; }
$regq=mysql_query("INSERT INTO users (login,qiwi,ref,date) VALUES ('$u_login','".md5($u_qiwi)."','$u_ref','$time')");

$regusepq=mysql_query("SELECT uid FROM users");
$r_users=mysql_num_rows($regusepq);
$regtoputnu='';
$regnusq=mysql_query("SELECT login FROM users ORDER BY date DESC LIMIT 80");
while($regnusm=mysql_fetch_row($regnusq)){ $regtoputnu.='<img src="images/nu.png"> '.$regnusm[0].' '; }
mysql_query("UPDATE data SET users='$r_users', new_u='$regtoputnu'");

$reg_show=0;
}}
?>


<div class="main_news_top"></div>

<div class="main_news_center">
<div class="main_news_title">����������� � �������</div>



<?php if($reg_show==0){ ?>
<div class="reg_s_title">������ �� ���������������� � ����� �������!</div>
<div align="center" class="reg_s_date">
�����: <font color="#77AF1B"><?php echo $u_login; ?></font>
<br>������: <font color="#FF962D"><?php echo $u_qiwi; ?></font>
</div>
<?php } ?>

<?php if($reg_show==1){ ?>






<form id="registration" method="POST" action="/?page=registration" style="margin:0;padding:0">

<table align="center" cellpadding="0px" cellspacing="0px" width="520px">
<?php
if($warning!=''){
echo '<tr><td class="reg_warning" colspan="3">'.$warning.'</td></tr>';
}
?>
<tr>
<td style="padding-left:20px;"><input id="u_login" onkeyup="reg_u_login();" class="reg_login" type="text" name="u_login" placeholder="�����" autocomplete="off" maxlength="20" value="<?php echo $u_login; ?>"></td>
</td>
<td><input class="reg_qiwi" id="u_qiwi" type="text" name="u_qiwi" placeholder="������" maxlength="30" value="<?php echo $u_qiwi; ?>"></td>
</tr>

<tr>
<td colspan="3" class="reg_ref">
��� ���������: <font color="#E17E06"><?php if(!empty($_SESSION['ref_login'])){ echo $_SESSION['ref_login']; }?></font>
</td>

</td>
</tr>

<tr>
<td colspan="3">
<div class="reg_danger">
��� ����� ������������.
<br>�� ��������� ������� �� ���� ������ ����������� ����������.
<br>���� ������ �������� - ����� ����� �������.
<br>�� ������ �� ���������!
<br>
<br>� ������� ����� ��������� ������� ����, ��������� 18 ���.
<br>������������� �� ����� ������������� ������� ��������� �����.
<br>� ����� ������ �� ������ ������ �� ��������. 
</div>

<div align="center">
<a class="reg_button" href="javascript:with(document.getElementById('registration')){ submit(); }">�����������</a>
</div>

</table>
</form>

<?php } ?>

</div>

<div class="main_news_bottom"></div>

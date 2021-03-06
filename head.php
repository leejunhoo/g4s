<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

include_once($g4['path'].'/head.sub.php');
include_once($g4['path'].'/lib/outlogin.lib.php');
include_once($g4['path'].'/lib/poll.lib.php');
include_once($g4['path'].'/lib/visit.lib.php');
include_once($g4['path'].'/lib/connect.lib.php');
include_once($g4['path'].'/lib/popular.lib.php');

//print_r2(get_defined_constants());

if ($config['cf_title'] == $g4['title']) $g4['title'] = '';
?>

<p style="text-align:center">작업 중입니다. 일부 기능은 정상적으로 동작하지 않을 수 있습니다.</p>

<header>
<div id="to_content"><a href="#wrapper">본문 바로가기</a></div>
<h1><?=$g4['title']?> <?=$config['cf_title']?></h1>
<div id="logo"><a href="<?=$g4['path']?>/">처음으로</a></div>

<ul>
    <? if ($member['mb_id']) { ?>
    <li><a href="<?=$g4['bbs_path']?>/logout.php">로그아웃</a></li>
    <li><a href="<?=$g4['bbs_path']?>/member_confirm.php?url=register_form.php">정보수정</a></li>
    <? if ($is_admin) { ?><li><a href="<?=$g4['path']?>/adm">관리자</a></li><? } ?>
    <? } else { ?>
    <li><a href="<?=$g4['bbs_path']?>/login.php">로그인</a></li>
    <li><a href="<?=$g4['bbs_path']?>/register.php">회원가입</a></li>
    <? } ?>
    <li><a href="<?=$g4['bbs_path']?>/new.php">최근게시물</a></li>
</ul>

<form name="fsearchbox" method="get" onsubmit="return fsearchbox_submit(this);">
<input type="hidden" name="sfl" value="wr_subject||wr_content">
<input type="hidden" name="sop" value="and">
<fieldset>
    <legend>사이트 내 전체검색</legend>
    <label for="header_stx">검색어</label>
    <input type="text" id="header_stx" name="stx" maxlength="20">
    <input type="submit" value="검색">
</fieldset>
</form>
</header>

<?=outlogin('neo'); // 외부 로그인 ?>
<?=poll('neo'); // 설문조사 ?>
<?=visit('neo'); // 방문자수 ?>
<?=connect(); // 현재 접속자수 ?>

<div id="wrapper">

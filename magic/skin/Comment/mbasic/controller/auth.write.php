<?php if(!defined("__MAGIC__")) exit; 

if(!$this->Can('write')) {
	Dialog::alert("글쓰기 권한이 없습니다.");
}
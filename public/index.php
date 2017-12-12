<?php
use cebe\markdown\GithubMarkdown;

include_once dirname(__DIR__) . '/vendor/autoload.php';

if (isset($_FILES['file'])) {
	$file = $_FILES['file'];
	$content = file_get_contents($_FILES['file']['tmp_name']);
	$parser = new GithubMarkdown();
	$parser->html5 = true;
	$markdown = $parser->parse($content);
	echo view('home', compact('markdown'));
} else {
	echo view('home');
}
?>
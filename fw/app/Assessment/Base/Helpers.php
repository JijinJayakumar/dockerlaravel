<?php
function admin_url($path=''){
	return url(env('ADMIN_URL')."/".$path);
}
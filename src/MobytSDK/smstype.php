<?php

define('SMSTYPE_TOP','N');
define('SMSTYPE_DIRECT','L');

function sdk_sms_type_valid($smstype) {
	return $smstype === SMSTYPE_TOP ||
			$smstype === SMSTYPE_DIRECT;
}

function sdk_sms_type_has_custom_tpoa($smstype) {
	return $smstype === SMSTYPE_TOP ||
			$smstype === SMSTYPE_DIRECT;
}
	
?>

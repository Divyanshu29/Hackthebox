<?php
class Tokyo {
	private function sign($caCert,$userCsr) {
		$caKey = file_get_contents('/home/nairobi/ca.key');
		$userCert = openssl_csr_sign($userCsr, $caCert, $caKey, 365, ['digest_alg'=>'sha256']);
		openssl_x509_export($userCert, $userCertOut);
		return $userCertOut;
	}
}

$tokyo = new Tokyo;


<?php

	namespace Models;

	class ContactModel
	{
		public static function sendForm(){
			$mail = new \EMail('vps.dankicode.com','testes@dankicode.com','gui123456','Guilherme');
			$mail->addAdress('testes@dankicode.com','Guilherme');
			$mail->formatarEmail(array('assunto'=>'mensagem do site','corpo'=>'aqui é uma mensagem'));
			$mail->enviarEmail()
		}
	}

?>
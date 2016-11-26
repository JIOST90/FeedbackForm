<?

/** @var dpsEmailController $this */

$this->setSubject( 'From ' . $sUsername );
$this->setLayout( 'emailLayoutTpl' );

?>

<b>ФИО пользователя</b>: <?= $sUsername ?> <br/>
<b>Email для связи</b>:<?= $sUseremail ?> <br/>
<b>Сообщение от пользователя</b>:<?= $sUsermessage ?> <br/>
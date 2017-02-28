
<?php
include('includes/connexion.inc.php');

// NOTE: Smarty has a capital 'S'
require_once('libs/Smarty.class.php');
$smarty = new Smarty();


if(isset($_GET['id']) && !empty($_GET['id'])){
	$smarty->assign('id', $_GET['id']);
	$query='SELECT contenu FROM messages WHERE id='.$_GET['id'];
	$stmt=$pdo->query($query);
	while($data=$stmt->fetch()){
		$smarty->assign('contenu', $data['contenu']);
	}
}

$mpp=6;

if(isset($_GET['page']) && isset($_GET['contenu'])){
    	$query = 'SELECT contenu, messages.id AS idMessage, pseudo, date 
	FROM messages 
	INNER JOIN utilisateur ON messages.user_id=utilisateur.id 
	WHERE contenu LIKE "%'.$_GET['contenu'].'%"
	OR pseudo LIKE "%'.$_GET['contenu'].'%"
	ORDER BY date DESC 
	LIMIT '.($_GET['page']*$mpp-$mpp).','.$mpp;
}


else if(!isset($_GET['page']) && isset($_GET['contenu'])){
    	$query = 'SELECT contenu, messages.id AS idMessage, pseudo, date 
	FROM messages 
	INNER JOIN utilisateur ON messages.user_id=utilisateur.id 
	WHERE contenu LIKE "%'.$_GET['contenu'].'%"
	OR pseudo LIKE "%'.$_GET['contenu'].'%"
	ORDER BY date DESC LIMIT 0,'.$mpp;
}


else if(isset($_GET['page'])){
	$query = 'SELECT contenu, messages.id AS idMessage, pseudo, date 
	FROM messages 
	INNER JOIN utilisateur ON messages.user_id=utilisateur.id 
	ORDER BY date DESC 
	LIMIT '.($_GET['page']*$mpp-$mpp).','.$mpp;
}


else{
	$query = 'SELECT contenu, messages.id AS idMessage, pseudo, date 
	FROM messages 
	INNER JOIN utilisateur ON messages.user_id=utilisateur.id 
	ORDER BY date DESC LIMIT 0,'.$mpp;
}


$stmt=$pdo->query($query);


$tab=array();
$i=0;
while($data=$stmt->fetch()){
	$tab[$i]['contenu'] = $data['contenu'];
	$tab[$i]['idMessage'] = $data['idMessage'];
	$tab[$i]['pseudo'] = $data['pseudo'];
	$tab[$i]['date'] = $data['date'];
	$i++;
}

$smarty->assign('list_contenu', $tab);


if(isset($_GET['contenu'])){
    $query = 'SELECT count(messages.id) AS nbreId FROM messages INNER JOIN utilisateur ON messages.user_id=user_id  WHERE contenu LIKE "%'.$_GET['contenu'].'%" 
	OR pseudo LIKE "%'.$_GET['contenu'].'%"';
}

else{
    $query = 'SELECT count(id) AS nbreId FROM messages';
}


$stmt=$pdo->query($query);


while ($data = $stmt->fetch()) {
	
	$nbreMessages=$data['nbreId'];
}


$nbrePages=($nbreMessages) ? ceil($nbreMessages/$mpp) : 1;
$smarty->assign('nbrePages', $nbrePages);
$smarty->assign('nbreMessages', $nbreMessages);
$smarty->assign('pseudo', $pseudo);
$smarty->assign('mpp', 4);

$smarty->display('index.tpl');

?>



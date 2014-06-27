<?php
$pdo = new PDO(
'mysql:host=localhost;dbname=scrubs;charset=utf8','root',''
);
$pdo -> exec ("SET CHARACTER SET utf8");
$pdo ->setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);
$st=$pdo
->query(
"SELECT name FROM patients"
);
$row = $st->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['name']);


/*
$stmt->execute(array('id' => $id)); 
  
$result = $stmt->fetchAll(); 
  
if ( count($result) ) { 
    foreach($result as $row) { 
        print_r($row); 
    } 
} else { 
    echo "No rows returned."; 
}
*/
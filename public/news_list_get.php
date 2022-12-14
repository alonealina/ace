<?php
try {
    $page = $_GET['page'];
    $pdo = new PDO('mysql:host=localhost;dbname=kurage;charset=utf8', 'root', '');
    $qry = $pdo->prepare('select * from news LIMIT 0, 10');
    $qry->execute();
    $html = '';
    foreach($qry->fetchAll() as $row){
        $html .= '<a class="news_a" href="javascript:clickNews('. $row["id"] .');">
        <div class="news_column"><div>' . $row["created_at"] . '</div><div>' . $row["title"] . '</div></div></a>
        <div class="news_column_line"></div>';
    }
    echo json_encode($html);
} catch (Exception $e) {
    echo json_encode($e->getMessage());
}
?>
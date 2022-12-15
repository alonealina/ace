<?php
try {
    $id = $_GET['id'];
    $pdo = new PDO('mysql:host=andy-db.ctw3fkqs6gvk.ap-northeast-1.rds.amazonaws.com; dbname=andy;charset=utf8', 'andy_db_admin', 'andy123456');
    $qry = $pdo->prepare('select * from news_ace where id = '. $id);
    $qry->execute();
    $html = '';
    foreach($qry->fetchAll() as $row){
        $html .= '<div class="news_title_sp"><span id="news_date">'. $row["notice_date"] .'</span><br><span id="news_title">'. $row["title"] .'</span></div>
        <div id="news_content">'. $row["content"] .'</div>';
    }
    echo json_encode($html);
} catch (Exception $e) {
    echo json_encode($e->getMessage());
}
?>
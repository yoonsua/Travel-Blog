<?php include("config.php");

    if(isset($_GET['keywords'])) {
        $keywords = $db->escape_string($_GET['keywords']);
        $query = $db->query("
            SELECT title, writer
            FROM posts
            WHERE title LIKE '%{$keywords}%'
            OR writer LIKE '%{$keywords}%'
        ");
?>
    <div class="result-count">
        <?php echo $query->num_rows; ?>
    </div>

<?php
    if($query->num_rows) {
        while($r = $query->fetch_object()) {
            ?>
            <div class="result">
                <a href="#"><?php echo $r->title; ?></a>
            </div>
        <?php
        }
    }
}
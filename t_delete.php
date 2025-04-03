<form action="treatment_delete.php" method="post">
    <input name="id"  value="<?= $article['id']  ?>" type="hidden" />
    <button name="delete" class="btn btn-danger" type="submit">delete article</button>
</form>
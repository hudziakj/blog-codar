<?php
include_once("templates/header.php");
if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;
    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content"></p>
        <p class="post-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor, quis eaque magni voluptatum nisi? Doloribus amet, iusto nulla tenetur, eos alias a aut praesentium modi veritatis harum. Doloribus, aliquam!
            Pariatur expedita dicta praesentium eveniet, eligendi omnis, esse necessitatibus incidunt fugiat nihil modi, quidem ad suscipit repellat laboriosam voluptate possimus aut eum ipsum provident? Repellendus perferendis unde laudantium mollitia accusamus.
            Possimus quae necessitatibus nisi quo laboriosam architecto? Repellat molestiae eos possimus voluptatem. Amet ut cupiditate architecto laborum, at vitae nihil rerum, soluta omnis consequatur numquam iure quas ipsa. Porro, modi!
            Tenetur deserunt, minima debitis fugit illo iusto vero, recusandae assumenda quia delectus obcaecati molestias doloribus exercitationem esse cupiditate ipsum eos magni eum vel aut veritatis, quod cum quo? Ratione, labore.
            Facere incidunt obcaecati neque? Libero praesentium mollitia, harum voluptates quod perferendis vel ipsam accusantium, dicta eius totam provident dolorum cumque laborum cum illo ex? Ducimus fugiat veritatis porro non reiciendis.
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor, quis eaque magni voluptatum nisi? Doloribus amet, iusto nulla tenetur, eos alias a aut praesentium modi veritatis harum. Doloribus, aliquam!
            Pariatur expedita dicta praesentium eveniet, eligendi omnis, esse necessitatibus incidunt fugiat nihil modi, quidem ad suscipit repellat laboriosam voluptate possimus aut eum ipsum provident? Repellendus perferendis unde laudantium mollitia accusamus.
            Possimus quae necessitatibus nisi quo laboriosam architecto? Repellat molestiae eos possimus voluptatem. Amet ut cupiditate architecto laborum, at vitae nihil rerum, soluta omnis consequatur numquam iure quas ipsa. Porro, modi!
            Tenetur deserunt, minima debitis fugit illo iusto vero, recusandae assumenda quia delectus obcaecati molestias doloribus exercitationem esse cupiditate ipsum eos magni eum vel aut veritatis, quod cum quo? Ratione, labore.
            Facere incidunt obcaecati neque? Libero praesentium mollitia, harum voluptates quod perferendis vel ipsam accusantium, dicta eius totam provident dolorum cumque laborum cum illo ex? Ducimus fugiat veritatis porro non reiciendis.
        </p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></1i>
                <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></1i>
                <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php");
?>
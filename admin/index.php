<?php
include("header.php");
?>
<style>
    .btn-spacing {
        margin-right: 20px;
    }

</style>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="post-list">
    <table class="table mt-1 table-bordered w-100 fs-5 ">
        <thead class="table-info">
            <tr>
            <th style="width:15%;">Date</th>
            <th style="width:15%;">Title</th>
            <th style="width:45%;">Article</th>
            <th style="width:25%;">Action</th>
            </tr>
        </thead>
        <tbody>
           
            <?php
            include("../connect.php");
            $sqlSelect ="SELECT * FROM posts";
           $result = mysqli_query($conn, $sqlSelect);
           while($data =mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?= $data["date"]?></td>
                <td><?= $data["title"]?></td>
                <td><?= $data["summary"]?></td>
                
                <td>
                    <a class="btn btn-primary btn-spacing " href="view.php?id=<?= $data["id"]?>">View</a>
                    <a class="btn btn-secondary btn-spacing " href="edit.php?id=<?= $data["id"]?>">Edit</a>
                    <a class="btn btn-danger btn-spacing " href="delete.php?id=<?= $data["id"]?>">Delete</a>
                </td>

            </tr>
            <?php
           }
            ?>
        </tbody>

    </table>
</div>

</main>
<?php
include("footer.php");
?>

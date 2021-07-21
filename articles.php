<?php
include_once 'header.php';
?>



<!-- sidebar -->
<aside id ="subject-bar">
    <!-- <span id="class"></span> -->
</aside>

<!-- forum container -->
<div id="forum-container">
<!-- forum box template -->
    <div id="forum-box">
        <p class="author">anony</p>
        <p class="forum-content">Welcome to the forum, you can just scroll through or pick a category from the sidebar to begin</p>
        <p class="subject">general-info</p>
    </div>
<!-- end of forum box template -->
</div>
<!-- end of forum container -->

<!-- post button -->
<button id="post">POST</button>

<!-- post form -->
<div id="post-form">
    <h1>Post something</h1>
    <form action="includes/post.inc.php" method="GET">
        <br>
        <input type="text" name="subject" placeholder="subject...">
        <br>
        <br>
        <textarea name="content" id="content" cols="30" rows="10">type what you want here...</textarea>
        <br>
        <button name="submit" type="submit">SUBMIT</button>
    </form>
</div>
<!-- test -->

<?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM posts;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    echo "<script>";
    echo "\nlet arr = [];";
    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "\narr.push(['".$row['username']."','".$row['content']."','".$row['subject']."']);";
        }
    }
 
        $new_sql = "SELECT DISTINCT subject FROM posts GROUP BY subject;";
        $new_result = mysqli_query($conn,$new_sql);
        $new_resultCheck = mysqli_num_rows($new_result);
        echo "\nlet category = [];";
        if($new_resultCheck > 0) {
           while($row = mysqli_fetch_assoc($new_result)) {
               echo "\ncategory.push ('#" . $row['subject'] . "');"; 
           }
       }
       echo "\n</script>"

?>


<script src="scripts/forum.js"></script>
<?php
include_once 'footer.php';
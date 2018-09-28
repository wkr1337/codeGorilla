
<style> 
/* Style the footer */
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #ddd;
    color: black;
    text-align: center;
}

/* Add a black background color to the top navigation */
.topNavigationBar {
    background-color: #0D0765;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topNavigationBar a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topNavigationBar a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topNavigationBar a.active {
    background-color: #0f2938;
    color: white;
}
</style>
<div class="topNavigationBar">
  <a class="active" href="./index.php">Home</a>
  <a href="./form_owner.php">Owner form</a>
  <a href="./form_tenant.php">tenant form</a>
  <a href="./relevant_links.php">relevant links</a>
  <a href="./faq.php">FAQ</a>
    <?php include_once("./logInSql/login.php"); ?>

</div>

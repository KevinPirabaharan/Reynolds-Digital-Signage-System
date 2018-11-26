<!--<div class="pos-f-t">
    <nav class="navbar navbar-dark" style="background-color: #41A7C7">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="<?php echo $dir; ?>images/bell.png" style="margin-left:70px; position:absolute;" width="50px">
        <h1 style="color:white;"><?php echo $title; ?></h1>
        <a href="<?php echo $dir; ?>index.php?login=1"><img src="<?php echo $dir; ?>images/logo.png" width="50px"></a>
    </nav>
    
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="text-white h4">Menu</h5>
            <p class="text-muted"><a href="<?php echo $dir; ?>index.php?login=1">Home</a></p>
            <p class="text-muted"><a href="<?php echo $dir; ?>create/index.php?login=1">Create</a></p>
            <p class="text-muted">Drafts</p>
            <p class="text-muted">Approvals</p>
            <p class="text-muted"><a href="<?php echo $dir; ?>index.php?login=0">Logout</a></p>
            <br>
            <p class="text-muted"><a href="<?php echo $dir; ?>display/index.php?login=1">Preview</a></p>
        </div>
    </div>
</div>-->

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}


.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <span style="margin-left:30px";>
        <h5 class="text-white h4">Menu</h5>
        <p class="text-muted"><a href="<?php echo $dir; ?>index.php?login=1">Home</a></p>
        <p class="text-muted"><a href="<?php echo $dir; ?>create/index.php?login=1">Create</a></p>
        <p class="text-muted">Drafts</p>
        <p class="text-muted">Approvals</p>
        <p class="text-muted"><a href="<?php echo $dir; ?>index.php?login=0">Logout</a></p>
        <br>
        <p class="text-muted"><a href="<?php echo $dir; ?>display/index.php?login=1">Preview</a></p>
    </span>
</div>

    <nav class="navbar navbar-dark" style="background-color: #41A7C7">
        <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
        <img src="<?php echo $dir; ?>images/bell.png" style="margin-left:70px; position:absolute;" width="50px">
        <h1 style="color:white;"><?php echo $title; ?></h1>
        <a href="<?php echo $dir; ?>index.php?login=1"><img src="<?php echo $dir; ?>images/logo.png" width="50px"></a>
    </nav>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

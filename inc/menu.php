<div class="pos-f-t">
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="<?php echo $dir; ?>images/bell.png" style="margin-left:-40%" width="50px">
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
            <p class="text-muted">Notifications</p>
            <p class="text-muted"><a href="<?php echo $dir; ?>index.php?login=0">Logout</a></p>
        </div>
    </div>
</div>
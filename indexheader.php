<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-image:url(img/wowow.jpg); background-repeat: no-repeat;background-size: 100%;">


    <div >

    </div>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(69, 181, 241, 0.753);bag">
                <a class="navbar-brand" href="index.php">ChatForum</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                   <li class="nav-item">
                            Hi,<b><?php echo htmlspecialchars($_SESSION['user_name']); ?></b> not you?
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="signout.php">Sign Out</a>
                    </li>
                  </ul>
                </div>
              </nav>



              <div class="container-fluid" >
                    <div class="row" id="body">
                        <div class="col-3" id="menu">
                            <div class="list-group" id="list-tab" role="tablist">
                              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="index.php" role="tab" aria-controls="home">Home</a>
                              <a class="list-group-item list-group-item-action false" id="list-profile-list" data-toggle="list" href="forum.php" role="tab" aria-controls="profile">Forum</a>
                              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="create_cat.php" role="tab" aria-controls="messages">Create Category</a>
                              <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="create_topic.php" role="tab" aria-controls="settings">Create Topic</a>
                              <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="create_topic.php" role="tab" aria-controls="settings">Replied Topics</a>
                              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="forum.php" role="tab" aria-controls="profile">Profile</a>

                            </div>
                          </div>
                      
          
<div>
</div>
              
                          <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
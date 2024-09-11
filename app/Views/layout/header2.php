<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="asset/css/bootstrap.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand " href="<?php echo base_url(); ?>main">Task Management</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>dashboard">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>newtask">Add Task</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="main.html">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
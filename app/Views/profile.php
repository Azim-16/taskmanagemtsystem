
<header class="text-bg-primary py-4">
        <h1 class="text-center">profile</h1>
        <p class="text-center text-light">It's quick and easy</p>
    </header>
    <section>
       
   

    <form method="post" action="<?php echo base_url();?>profile">
        <div class="container py-4 ">
          
                <div class="mb-3">
                  <label for="InputFullName" class="form-label">Full Name</label>
                  <input type="fullname" class="form-control" name="fullname" placeholder="Please enter your full name" value="<?=$fullname?>">
                </div>

                <div class="mb-3">
                  <label for="InputUsername" class="form-label">Username</label>
                  <input type="Username" class="form-control" name="username" placeholder="Please enter your username" value="<?=$username?>">
                </div>

                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Please enter your email" value="<?=$email?>">
                  </div>

                  <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Please enter your passwword" value="<?=$password?>">
                  </div>
                <a href="dashboard" class="btn btn-primary">Submit</a>
        </div>
        </form>
    </section>
</body>
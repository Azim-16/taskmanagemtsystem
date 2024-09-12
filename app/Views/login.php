
<header class="text-bg-primary py-4 ">
        <div class="container">
        <h1 class="text-center"> Login</h1>
        <p class="text-center text-light">It's quick and easy</p>
      </div>
      </header>

      <section>
       
        <div class="container card mt-5 py-3">
            <form method="post" action="<?php echo base_url();?>login">
                <div class="mb-3">
                  <label for="InputUsername" class="form-label">Username</label>
                  <input type="Username" class="form-control" name="username" placeholder="Please enter your username">
                </div>
                  <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Please enter your passwword">
                  </div>
                <button type="login" class="btn btn-primary">Login</button>
              </form>
        </div>
    </section>
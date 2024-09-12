
<header class="text-bg-primary py-4">
        <h1 class="text-center"> Sign Up</h1>
        <p class="text-center text-light">It's quick and easy</p>
    </header>
    <section>
       
   

    <form method="post" action="<?php echo base_url();?>register">
        <div class="container py-4 ">
          
        <?php if (session()->getFlashdata('error')) { ?>
                  <div class="alert alert-danger" role="alert">
                      <?php echo session()->getFlashdata('error'); ?>
                  </div>
                <?php } ?>

                <div class="mb-3">
                  <label for="InputFullName" class="form-label">Full Name</label>
                  <input type="fullname" class="form-control" name="fullname" placeholder="Please enter your full name" required>
                </div>

                <div class="mb-3">
                  <label for="InputUsername" class="form-label">Username</label>
                  <input type="Username" class="form-control" name="username" placeholder="Please enter your username" required>
                </div>

                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Please enter your email" required>
                  </div>

                  <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Please enter your passwword" required>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </section>
    
    <?php if (session()->getFlashdata('error')) {?>
      <script>
  Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "<?php echo session()->getFlashdata('error');?>",
});</script>
<?php } ?>
</body>
<header class="text-bg-primary py-4">
        <h1 class="text-center"> Sign Up</h1>
        <p class="text-center text-light">It's quick and easy</p>
    </header>
    <section>
       
        <div class="container py-4 ">
            <form>
                <div class="mb-3">
                  <label for="InputFullName" class="form-label">Full Name</label>
                  <input type="fullname" class="form-control" id="InputFullName" placeholder="Please enter your full name" value="<?= $nama?>">
                </div>
                <div class="mb-3">
                  <label for="InputUsername" class="form-label">Username</label>
                  <input type="Username" class="form-control" id="InputUsername" placeholder="Please enter your username" value="<?= $username?>">
                </div>
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Please enter your email" value="<?= $email?>">
                  </div>
                  <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="InputPassword" placeholder="Please enter your passwword" value="<?= $password?>">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    
    </section>
    
</body>
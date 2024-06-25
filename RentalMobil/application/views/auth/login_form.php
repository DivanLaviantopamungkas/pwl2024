       <!-- Sing in  Form -->
       <section class="sign-in">
           <div class="container">
               <div class="signin-content">
                   <div class="signin-image">
                       <figure><img src="<?php echo base_url('assets/assets_customer/img/all_new_avanza.png') ?>" alt="sing up image"></figure>
                       <a href="<?php echo base_url('Register') ?>" class="signup-image-link">Create an account</a>
                   </div>

                   <div class="signin-form">
                       <h2 class="form-title">Sign up</h2>
                       <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>
                       <form method="POST" action="<?php echo base_url('auth/Login/index') ?>" class="register-form" id="login-form">
                           <div class="form-group">
                               <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                               <input type="text" name="username" id="username" placeholder="Username" />
                               <?php echo form_error('username', '<div class="text-small text-primary">', '</div>') ?>
                           </div>
                           <div class="form-group">
                               <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                               <input type="password" name="password" id="password" placeholder="Password" />
                               <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                           </div>
                           <div class="form-group form-button">
                               <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                           </div>
                       </form>
                       <div class="social-login">
                           <span class="social-label">Or login with</span>
                           <ul class="socials">
                               <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                               <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                               <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </section>
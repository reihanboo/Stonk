{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dastone - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0">
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#Register_Tab" role="tab">Register</a>
                                        </li>
                                    </ul>
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane p-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal auth-form" method="POST" action="{{ route('login') }}">
                                                @csrf
                
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="email">Email</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                                                    </div>                                    
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Password</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                    </div>                               
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group row my-3">
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="remember_me">
                                                            <label class="form-label text-muted" for="remember_me">Remember me</label>
                                                        </div>
                                                    </div><!--end col--> 
                                                    <div class="col-sm-6 text-end">
                                                        <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                                    </div><!--end col--> 
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <div class="m-3 text-center text-muted">
                                                <p class="mb-0">Don't have an account ?  <a href="auth-register.html" class="text-primary ms-2">Free Resister</a></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">
                                            <form class="form-horizontal auth-form" action="index.html">
            
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Username</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                    </div>                                    
                                                </div><!--end form-group--> 
            
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="useremail">Email</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter Email">
                                                    </div>                                    
                                                </div><!--end form-group-->
                    
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Password</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                    </div>                               
                                                </div><!--end form-group--> 
            
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="conf_password">Confirm Password</label>                                            
                                                    <div class="input-group">                                   
                                                        <input type="password" class="form-control" name="conf-password" id="conf_password" placeholder="Enter Confirm Password">
                                                    </div>
                                                </div><!--end form-group-->
                    
                                                <div class="form-group row my-3">
                                                    <div class="col-sm-12">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess2">
                                                            <label class="form-label text-muted" for="customSwitchSuccess2">You agree to the Dastone <a href="#" class="text-primary">Terms of Use</a></label>
                                                        </div>
                                                    </div><!--end col-->                                             
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="button">Register <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div><!--end col--> 
                                                </div> <!--end form-group-->                           
                                            </form><!--end form-->
                                            <p class="my-3 text-muted">Already have an account ?<a href="auth-login.html" class="text-primary ms-2">Log in</a></p>                                                    
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Reihan © <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>

        
    </body>

</html>
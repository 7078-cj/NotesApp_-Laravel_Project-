<body class="h-screen bg-gradient-to-t from-slate-400 via-gray-700 to-gray-800 flex items-center justify-center m-0 font-robotoMono">
    <!-- Login Form -->
    <div class="container max-w-sm p-6 bg-white shadow-lg rounded-lg" id="login-form">
      <h2 class="text-center text-2xl font-semibold mb-6">Login</h2>
      <form action="/login" method="POST">
        <?php echo csrf_field(); ?>
        <input 
          type="text" 
          placeholder="Username" 
          name="login_name"
          required 
          class="w-full p-3 mb-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        <input 
          type="password" 
          placeholder="Password" 
          name="login_password"
          required 
          class="w-full p-3 mb-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        <button 
          type="submit" 
          class="w-full p-3 bg-cyan-300 text-black font-semibold rounded hover:bg-cyan-500"
        >
          Login
        </button>
      </form>
      <p 
        class="toggle-link text-center mt-4 text-blue-500 cursor-pointer hover:underline" 
        onclick="showRegister()"
      >
        Don't have an account? Register
      </p>
    </div>
  
    <!-- Register Form -->
    <div class="container max-w-sm p-6 bg-white shadow-lg rounded-lg hidden" id="register-form">
      <h2 class="text-center text-2xl font-semibold mb-6">Register</h2>
      <form action="/register" method="POST">
        <?php echo csrf_field(); ?>
        <input 
          type="text" 
          placeholder="Username" 
          name="name"
          required 
          class="w-full p-3 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        <input 
          type="email" 
          placeholder="Email" 
          name="email"
          required 
          class="w-full p-3 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        <input 
          type="password" 
          placeholder="Password( 8 characters)" 
          name="password"
          required 
          class="w-full p-3 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        <input 
          type="password" 
          placeholder="Confirm Password" 
          required 
          class="w-full p-3 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        <button 
          type="submit" 
          class="w-full p-3 bg-cyan-200 text-black font-semibold rounded hover:bg-cyan-500"
        >
          Register
        </button>
      </form>
      <p 
        class="toggle-link text-center mt-4 text-blue-500 cursor-pointer hover:underline" 
        onclick="showLogin()"
      >
        Already have an account? Login
      </p>
    </div>
  
    <script>
      // JS to toggle forms
      function showRegister() {
        document.getElementById('login-form').classList.add('hidden');
        document.getElementById('register-form').classList.remove('hidden');
      }
  
      function showLogin() {
        document.getElementById('register-form').classList.add('hidden');
        document.getElementById('login-form').classList.remove('hidden');
      }
    </script>
  </body>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\santo\OneDrive\Desktop\php-laravel\NotesApp\resources\views/Login.blade.php ENDPATH**/ ?>
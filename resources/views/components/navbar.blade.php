<nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex">
          <a href="/" class="nav-link">Home</a>
          @guest
          <a href="/register" class="nav-link">Create New Account</a>
          <a href="/login" class="nav-link">Login</a>
          @else
          <img
                src="{{auth()->user()->avatar}}"
                width="50"
                height="50"
                class="rounded-circle"
            >
            <a
                href=""
                class="nav-link"
            >{{auth()->user()->name}}</a>
          
          
          <form action="/logout" method="post">
            @csrf
          <button
                    type="submit"
                    href=""
                    class="nav-link btn btn-link"
                >Logout</button>
          </form>
          @endguest
          <a href="/#blogs" class="nav-link">Blogs</a>
          <a href="#subscribe" class="nav-link">Subscribe</a>
        </div>
      </div>
    </nav>
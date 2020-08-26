<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - Laravel Blog</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"
    />
  </head>

  <body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a
          role="button"
          class="navbar-burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navMenu"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
          <a href="{{ route('posts.index') }}" class="navbar-item">
            All Posts
          </a>
        </div>
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a href="{{ route('posts.create') }}" class="button is-info">
                <strong>New Post</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section class="section">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-8">
            {{-- If is a notification sended, print it --}}
            @if (session('notification'))
            <div class="notification is-primary">
              {{ session('notification') }}
            </div>
            @endif @yield('content')
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>Laravel Blog</strong> |
          <a href="https://stevencotterill.com">Steven Cotterill</a>
        </p>
      </div>
    </footer>

    {{-- asset generates a complete url for our file, by default it takes our ip and the file route
    http://127.0.01:8000/js/nav.js, looking for the file in our public directory. We can change it in our .env with ASSET_URL=http://new_url --}}
    <script src="{{ asset('js/nav.js') }}"></script>
  </body>
</html>
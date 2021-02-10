<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary bg-gradient">
        <div class="container">
            <a class="navbar-brand text-white" href="/">Posts'n Roll</a>
            <form class="d-flex" action="{{ route('posts.create') }}">
                <button class="btn btn-light btn-outline-primary bg-gradient" type="submit">Aggiungi nuovo post</button>
            </form>
        </div>
      </nav>
</header>

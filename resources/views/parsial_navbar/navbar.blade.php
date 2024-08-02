<nav class="navbar navbar-expand-lg navbar -light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Self Blogs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Home')? 'active' : '' }}" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Post')? 'active' : '' }}" href="/post">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'About me')? 'active' : '' }}" href="/">About me</a>
            </li>
        </ul>
        </div>
    </div>
</nav>



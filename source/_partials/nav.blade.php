<div class="sidebar pure-u-1 pure-u-md-1-4">
    <div class="header">
        <h1 class="brand-title">A Sample Blog</h1>
        <h2 class="brand-tagline">Creating a blog layout using Pure</h2>

        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="pure-button" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="pure-button" href="{{ $page->mainUrl }}/contact/">Contact</a>
                </li>
            </ul>
        </nav>

        {{-- Social media links --}}
        <div class="meta-nav">
            <div class="pure-menu pure-menu-horizontal">
                <ul>
                    <li class="pure-menu-item"><a href="{{ $settings->setting->fblink }}" target="_blank" class="pure-menu-link">Facebook</a></li>
                    <li class="pure-menu-item"><a href="{{ $settings->setting->twitterlink }}" target="_blank" class="pure-menu-link">Twitter</a></li>
                    <li class="pure-menu-item"><a href="{{ $settings->setting->instagramlink }}" target="_blank" class="pure-menu-link">Instagram</a></li>
                </ul>
            </div>
        </div>
        {{-- Social media links end --}}

    </div>
</div>
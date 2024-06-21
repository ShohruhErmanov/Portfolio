<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href=""> <img alt="image" src="{{ @asset('img/shohruh.jpg') }}" class="header-logo" /><br> <span
                    class="logo-name">

                    Shohruh</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="{{ route('dashboard') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.categories.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Categories</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.portfolios.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Portfolios</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.skill.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Skill</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.experience.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Experience</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.resume.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Resume</span></a>
            </li>

        </ul>
    </aside>
</div>

@section('js')
    <script>
        var url = windows.location.href;
        var link = document.querySelectorAll("[href='" + url + "']")[0];
        link.parentElement.classList.add('active')
    </script>
@endsection

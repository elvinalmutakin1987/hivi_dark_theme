<style>
    .account-widget {
        position: relative;
        border-radius: 10px;
        background: #111;
        padding: 10px 10px 10px 20px;
        margin-right: 10px;
    }
</style>

<div class="flat-wallet flex">
    <div class="header-search relative">
        <a href="#" class="show-search">
            <i class="fas fa-user" style="color:black; border: 2px solid black; border-radius: 50%; padding: 10px;"></i>

        </a>
        <div class="top-search">
            <div class="account-widget" style="background-color: #f5f5f7; padding-top:0px; padding-bottom:0px;">
                <ul id="menu-mobile-menu" class="menu" style="margin-top: 2px; padding-top:0px;">
                    <li style="padding: 5px; padding-top:15px">
                        <a href="about-us.html" style="color:black">Profil</a>
                    </li>
                    <li style="padding: 5px">
                        <a href="about-us.html" style="color:black">Dashboard</a>
                    </li>
                    <li style="padding: 5px; padding-bottom:15px">
                        <a href="{{ route('logout') }}" style="color:black">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

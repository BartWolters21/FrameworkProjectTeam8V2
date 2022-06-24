<nav class="navbar is-link" role="navigation" aria-label="main navigation">
    <div class="navbar-item">
        <div class="navbar-item is-logo">
            <img src="{{asset('img/outokumpu_logo.png')}}">
        </div>
        <div class="navbar-item">
            <a href="/" class="navbar-item">
                <span class="icon"><i class="fa fa-home"></i></span> KA4 Line
            </a>
        </div>
        <div class="navbar-item">
            <a href="/calendar/month" class="navbar-item">
                <span class="icon is-small"><i class="fa-solid fa-calendar-days"></i></span>
                <span>Weekly Planning</span>
            </a>
        </div>
        <div class="navbar-item">
            <a href="/record" class="navbar-item">
                <span class="icon is-small"><i class="fa-solid fa-file-lines"></i></span>
                <span>SAP Records</span>
            </a>
        </div>
        <div class="navbar-item">
            <a href="/tonnages" class="navbar-item">
                <span class="icon is-small"><i class="fa-solid fa-clipboard"></i></span>
                <span>Tonnage</span>
            </a>
        </div>
        <div class="navbar-item">
            <a href="/stoppers" class="navbar-item">
                <span class="icon is-small"><i class="fa-solid fa-clock-rotate-left"></i></span>
                <span>Stopper History</span>
            </a>
        </div>

    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item">

                <div class="columns">
                    <div class="column">
                        <p class="bd-notification is-info">OEE target: 41%</p>
                        <div class="columns is-mobile">
                            <div class="column">
                                <progress class="progress is-info" value="40" max="100" style="width: 200px;">40%
                                </progress>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="navbar-end">
        <div class="navbar-item">
            <div class="buttons">
                <h1 class="navbar-item">Pick a Date</h1>
                <input id="date-picker" type="date">
            </div>
        </div>
    </div>
    </div>
</nav>

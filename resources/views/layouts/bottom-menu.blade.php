{{-- <div class="side-main overflow-hidden">
    <div class="side-wrap row">
        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top side-wrap">
            <div
                class="nav-wrap d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/"
                    class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5">P<span class="d-none d-sm-inline">resensi</span></span>
                </a>
                <ul class="nav nav-main nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center"
                    id="menu">
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fas fa-home"></i><span class="ms-3 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                            <i class="fas fa-tachometer-alt"></i><span class="ms-3 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-file"></i><span class="ms-3 d-none d-sm-inline">Docs</span>
                        </a>
                    </li>
                    <li>
                        <div class="buttoncamp large-button">
                            <a href="#" class="nav-link webcam">
                                <i class="fa-solid fa-camera"></i><span class="ms-3 d-none d-sm-inline"></span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fas fa-calendar-alt"></i><span class="ms-3 d-none d-sm-inline">Cuti</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fa-solid fa-clock-rotate-left"></i><span
                                class="ms-3 d-none d-sm-inline">Histori</span>
                        </a>
                    </li>
                </ul>
                <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28"
                            class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Joe</span>
                    </a>
                    <ul class="dropdown-menu text-small" role="menu" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item"
                                    style="margin-left: 5px; font-weight:500; font-size:13px">Logout<i
                                        class="fas fa-sign-out-alt" style="margin-left: 5px"></i></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="{{ route('dashboard') }}" class="item {{ request()->is('dashboard') ? 'active' : '' }}">
        <div class="col">
            <i class="icon fa-solid fa-home"></i>
            <strong>Home</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <i class="icon fa-regular fa-calendar-days"></i>
            <strong>Calendar</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <div class="action-button large">
                <i class="icon fa-solid fa-camera" style="color: #ffffff;"></i>
            </div>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <i class="icon fa-solid fa-file-contract"></i>
            <strong>Docs</strong>
        </div>
    </a>
    <a href="javascript:;" class="item">
        <div class="col">
            <i class="icon fa-solid fa-user-group"></i>
            <strong>Profile</strong>
        </div>
    </a>
</div>

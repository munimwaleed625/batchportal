<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITEC Batch Advisory Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .custom-navbar {
            background-color: white;
            border-bottom: 5px solid #f1c40f; /* Yellow border */
            border-top: 5px solid #002147;   /* Dark blue border */
            padding: 10px 20px;
             width: 100%;
        }
        .portal-title {
            font-weight: bold;
            font-size: 1.2rem;
            color: #002147;
        }
        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            height: 100%;
            background-color: #f8f9fa;
            border-right: 2px solid #ddd;
        }
        .sidebar a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            border-bottom: 1px solid #ddd;

        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #002147;
            color: #ffffff;
            font-weight: bold;
        }
        .sidebar a::before {
            content: ">";
            margin-right: 8px;
            color: #333;
        }
        html, body {
            height: 100%;
            margin: 0;
        }
        .topbar {
            background-color: #fff;
            padding: 15px;
            border-bottom: 3px solid #f0ad4e;
            text-align: right;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .card {
            border-radius: 10px;
            padding: 15px;
            text-align: center;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background: #002147;
            color: #ffffff;
            width: 100%;
            bottom: 0;
            position: fixed;
        }
        .dropdown-menu {
            padding: .7rem 0rem;
            font-size: .875rem;
            line-height: 22px;
            color: #5c5776;
            border: none;
            box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
            border-radius: .5rem;
            margin-left: -126px;

        }
        .dropdown-menu{
            display: block;
            visibility: hidden;
            opacity: 0;
            -webkit-transform: translateY(20px);
            -ms-transform: translateY(20px);
            transform: translateY(20px);
            -webkit-transition: all 0.3s ease-in;
            -o-transition: all 0.3s ease-in;
            transition: all 0.3s ease-in;
        }
        .dropdown {
            &:hover {
                >.dropdown-menu {
                    -webkit-transform: scaleY(1);
                    -ms-transform: scaleY(1);
                    transform: scaleY(1);
                    opacity: 1;
                    visibility: visible;
                }
            }
        }
        .dropdown-submenu {
            &:hover {
                >.dropdown-menu {
                    -webkit-transform: scaleY(1);
                    -ms-transform: scaleY(1);
                    transform: scaleY(1);
                    opacity: 1;
                    visibility: visible;
                }
            }
        }
        @media (min-width: 990px){

            .dropright-lg {
                position: relative;
                .dropdown-menu{
                    top: 0;
                    right: 0%;
                    left: 10%;
                    margin-top: 0;
                    margin-right: 0.1rem;
                }
            }
        }
        .dropdown-toggle::after {
            display: inline-block;
            margin-left: .200em;
            vertical-align: .255em;
            content: ">";
            border-top: 0rem;
            border-right: 0rem;
            border-bottom: 0;
            border-left: 0rem;
            float: right;

        }

        .avatar-md {
            width: 56px;
            height: 56px;

        }
        .avatar img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        /*// avatar indicators*/
           .avatar {
               position: relative;
               display: inline-block;
               width: 3rem;
               height: 3rem;
               font-size: 1rem;
           }


        .avatar-online:before {
            background-color: green;
        }


        .avatar-indicators:before {
            content: "";
            position: absolute;
            bottom: 0px;
            right: 0%;
            width: 30%;
            height: 30%;
            border-radius: 50%;
            border: 2px solid #fff;
            display: table;

        }
    </style>
</head>
<body>
<nav class="custom-navbar d-flex align-items-center justify-content-between">
    <!-- Left Logo -->
    <div class="d-flex align-items-center " >
        <img src="{{ asset('assets/img/download.jpg') }}" alt="Logo" width="80" height="80">
    </div>

    <!-- Center/Right Text -->
    <div class="d-flex align-items-center">
        <span class="portal-title me-3">Welcome to Hitec Batch Advisory Portal</span>
{{--        <img src="{{ asset('assets/img/055a91979264664a1ee12b9453610d82.jpg') }}" alt="Profile" class="profile-icon">--}}
        <div class="dropdown">
            <img src="assets/img/pf.png" class="rounded-circle" alt="Profile" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" width="35" height="35" />
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>


    </div>
</nav>



</a>
</div>
</nav>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="height:100vh;">
        <div class="sidebar">
            <a href="{{ route('student_main_dashboard') }}" class="{{ request()->is('student_main_dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('applications') }}" class="{{ request()->is('applications') ? 'active' : '' }}">Applications</a>
            <a href="{{ route('grade_i') }}" class="{{ request()->is('grade_i') ? 'active' : '' }}">I-Grade</a>
            <a href="{{ route('student_conflicts') }}" class="{{ request()->is('student_conflicts') ? 'active' : '' }}">Student Conflicts</a>
            <a href="{{ route('timetable_clash') }}" class="{{ request()->is('timetable_clash') ? 'active' : '' }}">Timetable Clashes</a>
            <a href="{{ route('extra_curricular_activity') }}" class="{{ request()->is('extra_curricular_activity') ? 'active' : '' }}">ExtraCurricular Activities</a>
            <a href="{{ route('scholarship') }}" class="{{ request()->is('scholarship') ? 'active' : '' }}">Apply for Scholarship Aid</a>
            <a href="{{ route('manage_profile_student') }}" class="{{ request()->is('profile') ? 'active' : '' }}">Manage Profile</a>
        </div>

    </div>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        @yield('content')
    </div>
</div>

<!-- Footer -->
<div class="footer">
    © 2025 HITEC University Taxila.
</div>

</body>

<script>
    var closebtns = document.getElementsByClassName("close");
    var i;

    for (i = 0; i < closebtns.length; i++) {
        closebtns[i].addEventListener("click", function() {
            this.parentElement.style.display = 'none';
        });
    }
</script>

</html>

<div class="sidebar" data-color="orange" data-image="assets/img/full-screen-image-3.jpg">
        
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    
    <div class="logo">
        <a href="http://www.creative-tim.com" class="logo-text">
            Creative Tim
        </a>
    </div>
	<div class="logo logo-mini">
		<a href="http://www.creative-tim.com" class="logo-text">
			Ct
		</a>
	</div>

	<div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="../assets/img/default-avatar.png" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    Tania Andrew
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
        @if(session('currentUserRole') == 'admin')
			<ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
    
                <li>
                    <a href="{{ route('create_lecturer') }}">
                        <i class="pe-7s-graph1"></i>
                        <p>Create a Lecturer</p>
                    </a>
                </li>
    
                <li>
                    <a href="#">
                        <i class="pe-7s-date"></i>
                        <p>Invite</p>
                    </a>
                </li>
            </ul>
		@endif
		
		@if(session('currentUserRole') == 'lecturer')
			<ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
    
                <li>
                    <a href="charts.html">
                        <i class="pe-7s-graph1"></i>
                        <p>Create a Course</p>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <i class="pe-7s-date"></i>
                        <p>Register Student</p>
                    </a>
                </li>
    
                <li>
                    <a href="#">
                        <i class="pe-7s-date"></i>
                        <p>Invite</p>
                    </a>
                </li>
            </ul>
		@endif
		
		@if(session('currentUserRole') == 'student')
			<ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
    
                <li>
                    <a href="charts.html">
                        <i class="pe-7s-graph1"></i>
                        <p>view Courses</p>
                    </a>
                </li>
            </ul>
		@endif
	</div>
</div>
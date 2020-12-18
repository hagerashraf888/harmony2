<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/fonts/css/all.css')}}"> 
        <link rel="icon" href="{{ asset('images/harmony-logo.jpg')}}">
    </head>
    <body>
        <!-- The sidebar -->
        <div class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/harmony-logo.jpg')}}">
            </div>

            <!-- admin -->
            <h2><a href="admin.html"> Admin </a></h2>
            <a href="projects.html"> Projects </a>
        </div>
        
        <!-- Page content -->
        <div class="content">
            <div class="topnav">
                <!--<div class="search">
                    <input id="search" type="text" placeholder="Search..">
                    <button class="btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>-->
                <div class=title>
                    <h2> Edit Project </h2>
                </div>
                <!--
                <div class="notify">
                    <button class="btn">
                        <i class="fas fa-bell"></i>
                    </button>
                    <button class="btn">
                        <i class="fas fa-envelope"></i>
                    </button>
                </div>
                -->
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">
                        <i class="fas fa-user"></i> 
                        Hager Ashraf 
                        <!--<i class="fas fa-sort-down"></i>-->
                    </button>
                    <!--
                    <div id="myDropdown" class="dropdown-content">
                    <a href="#"><i class="fas fa-spinner"></i> Activity log </a>
                    <a href="#"><i class="fas fa-sign-out-alt"></i> Sign out </a>
                    </div>
                    -->
                </div> 
            </div> 

            <section id="form">
                <form action="{{route('update_project',$project->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="hidden" name="id" value=""
                            class="form-control" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Project Name </label>
                        <div class="col-sm-12">
                        <input type="text"name="project_name" class="form-control"
                            placeholder="type the name of project"  value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Project Image </label>
                        <div class="col-sm-12">
                        <input type="file"  class="form-control" name="image">
                        <input type="hidden" name="oldimage" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Project Price </label>
                        <div class="col-sm-12">
                        <input type="text" name="project_price" class="form-control"
                            placeholder="type the price of project"  value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Project Quantity</label>
                        <div class="col-sm-12">
                        <input type="text"name="project_quantity" class="form-control"
                            placeholder="type the quantity of project"  value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Type ID </label>
                        <div class="col-sm-12">
                        <input type="text"name="type_id" class="form-control"
                            placeholder="type the type id of project"  value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-12 col-form-label"> Category ID </label>
                        <div class="col-sm-12">
                        <input type="text"name="category_id" class="form-control"
                            placeholder="type the category id of project"  value="">
                        </div>
                    </div>
                    <input type="submit"  value="save changes" class="mx-auto d-block" id="btn">
                </form>
            </section>
        </div>
        
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/admin.js')}}"></script>
    </body>
</html> 

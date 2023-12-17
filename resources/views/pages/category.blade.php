@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Management</h1>    

    <div class="row">
        <div class="col-xl-8">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Category</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>                                                                
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>Action</th>                                    
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>                                    
                                    <td>System Architect</td>                                    
                                    <td>System Architect</td>                                                                        
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>System Architect</td>                                    
                                    <td>System Architect</td>                                    
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>System Architect</td>                                    
                                    <td>System Architect</td>                                    
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>                         
                                    <td>System Architect</td> 
                                    <td>System Architect</td>                                                                                  
                                </tr>                                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card shodow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name...">                            
                        </div>                        
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea class="form-control" name="detail" id="detail" cols="20" rows="3" placeholder="Enter detail..."></textarea>                            
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>                                                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
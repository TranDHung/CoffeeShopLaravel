
<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">           
    <div class="row">        
        <div class="col-xl-7 mb-2">
            <div class="row">            
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-xl-8">
                                <ul class="nav nav-pills ml-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="pills-coffee-tab" data-toggle="pill" href="#pills-coffee" role="tab" aria-controls="pills-coffee" aria-selected="true">Cà phê</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="pills-soda-tab" data-toggle="pill" href="#pills-soda" role="tab" aria-controls="pills-soda" aria-selected="false">Soda & Đá xây</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Trà & Trà sữa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Yaourt</a>
                                    </li>                                    
                                </ul>
                            </div>
                            <div class="col-xl-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>                                      
                                    </div>
                                  </div>                            
                            </div>                            
                        </div>                                             
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-coffee" role="tabpanel" aria-labelledby="pills-coffee-tab">
                                <div class="row">
                                    <div class="card ml-4 mb-1" style="width:21%; float:left">
                                        <img class="card-img-top" src="<?php echo e(asset('/img')); ?>/product_test.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Cà phê</p>
                                            <a href="#" class="btn btn-primary">Add</a>
                                        </div>
                                    </div>
                                    <div class="card ml-4 mb-1" style="width:21%; float:left">
                                        <img class="card-img-top" src="<?php echo e(asset('/img')); ?>/product_test.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Cà phê</p>
                                            <a href="#" class="btn btn-primary">Add</a>
                                        </div>
                                    </div>
                                    <div class="card ml-4 mb-1" style="width:21%; float:left">
                                        <img class="card-img-top" src="<?php echo e(asset('/img')); ?>/product_test.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Cà phê</p>
                                            <a href="#" class="btn btn-primary">Add</a>
                                        </div>
                                    </div>
                                    <div class="card ml-4 mb-1" style="width:21%; float:left">
                                        <img class="card-img-top" src="<?php echo e(asset('/img')); ?>/product_test.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Cà phê</p>
                                            <a href="#" class="btn btn-primary">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-soda" role="tabpanel" aria-labelledby="pills-soda-tab">...</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                        </div>
                    </div>                    
                </div>                                                
            </div>                                    
        </div>
        <div class="col-xl-5">           
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hóa đơn</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>                                    
                                    <th>Tên món</th>                                                                
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>#</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <tr>
                                    <td>Cà phê</td>
                                    <td>2</td>                                    
                                    <td>30.000đ</td>                                    
                                    <td><i class='fas fa-trash'></i></td>
                                </tr>
                                <tr>
                                    <td>Cà phê</td>
                                    <td>2</td>                                    
                                    <td>30.000đ</td>                                    
                                    <td><i class='fas fa-trash'></i></td>
                                </tr>
                                <tr>
                                    <td>Cà phê</td>
                                    <td>2</td>                                    
                                    <td>30.000đ</td>                                    
                                    <td><i class='fas fa-trash'></i></td>
                                </tr>
                                <tr>
                                    <td>Cà phê</td>
                                    <td>2</td>                                    
                                    <td>30.000đ</td>                                    
                                    <td><i class='fas fa-trash'></i></td>
                                </tr>                                            
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <h5>Tổng tiền: <strong class="text-danger">120.000đ</strong></h5>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Thanh toán</button>
                        <input type="button" class="btn btn-secondary" value="Xóa hết">
                    </div>
                </div>
            </div>            
        </div>        
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Hóa đơn thanh toán</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="orderid" class="text-primary">ID</label>
                                <input type="text" class="form-control" id="" name="" disabled>
                            </div>                            
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="cashier" class="text-primary">Thu ngân</label>
                                <input type="text" class="form-control" id="" name="" disabled>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="created_date" class="text-primary">Ngày</label>
                                <input type="text" class="form-control" id="" name="" disabled>
                            </div>
                        </div>                        
                    </div>                    
                    <div class="row">
                        <table class="table table-bordered ml-2 mr-2">
                            <thead>
                                <tr>
                                    <th>Tên món</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>                                    
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cà phê</td>
                                    <td>2</td>
                                    <td>30.000đ</td>
                                </tr>
                                <tr>
                                    <td>Cà phê</td>
                                    <td>2</td>
                                    <td>30.000đ</td>
                                </tr>
                                <tr>
                                    <td>Cà phê</td>
                                    <td>2</td>
                                    <td>30.000đ</td>
                                </tr>
                                <tr>
                                    <td>Cà phê</td>
                                    <td>2</td>
                                    <td>30.000đ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="total" class="text-primary">Tổng tiền</label>
                                <input type="text" class="form-control" id="" name="" disabled>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="discount" class="text-primary">Tiền giảm</label>
                                <input type="text" class="form-control" id="" name="" disabled>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="moneyforpaid" class="text-danger">Tiền phải thanh toán</label>
                                <input type="text" class="form-control" id="" name="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="row ml-1">
                                <label for="salecode" class="text-primary">Mã giảm giá</label>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">                                
                                        <input type="text" class="form-control" id="" name="">                                
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <button type="button" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-xl-6">
                            <div class="row ml-1">
                                <label for="membercode" class="text-primary">Mã thành viên</label>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">                                
                                        <input type="text" class="form-control" id="" name="">                                
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <button type="button" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </div>                            
                        </div>                        
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><i class="fas fa-print"></i> In</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\HocLaravel\resources\views/pages/selling.blade.php ENDPATH**/ ?>
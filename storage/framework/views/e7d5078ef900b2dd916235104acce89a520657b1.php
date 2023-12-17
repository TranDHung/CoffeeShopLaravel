
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
                                    <?php if(count($categories)>0): ?>
                                        <?php for($i = 0; $i < count($categories); $i++): ?>
                                            <?php if($i == 0): ?>
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-<?php echo e($categories[$i]['id']); ?>-tab" data-toggle="pill" href="#pills-<?php echo e($categories[$i]['id']); ?>" role="tab" aria-controls="pills-<?php echo e($categories[$i]['id']); ?>" aria-selected="true"><?php echo e($categories[$i]['name']); ?></a>
                                                </li>
                                            <?php else: ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-<?php echo e($categories[$i]['id']); ?>-tab" data-toggle="pill" href="#pills-<?php echo e($categories[$i]['id']); ?>" role="tab" aria-controls="pills-<?php echo e($categories[$i]['id']); ?>" aria-selected="true"><?php echo e($categories[$i]['name']); ?></a>
                                                </li>
                                            <?php endif; ?>                                        
                                        <?php endfor; ?>
                                    <?php else: ?>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-null-tab" data-toggle="pill" href="#pills-null" role="tab" aria-controls="pills-null" aria-selected="true">NULL</a>
                                        </li>
                                    <?php endif; ?>                                                                        
                                </ul>
                            </div>
                            <div class="col-xl-4">
                                <div class="input-group">
                                    <input type="text" class="form-control search" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="basic-addon2">
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
                        <div id="search-message" style="display: none">
                            <h5 class="text-danger">Không có sản phẩm bạn cần tìm!</h5>
                        </div>
                        <div id="search-content" style="display: none"></div>
                        <div class="tab-content" id="pills-tabContent">
                            <?php if(count($categories)>0): ?>
                                <?php for($i = 0; $i < count($categories); $i++): ?>
                                    <?php if($i==0): ?>
                                        <div class="tab-pane fade show active" id="pills-<?php echo e($categories[$i]['id']); ?>" role="tabpanel" aria-labelledby="pills-<?php echo e($categories[$i]['id']); ?>-tab">
                                            <div class="row">
                                                <?php if(count($products)>0): ?>
                                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($categories[$i]['id'] == $product->categoryID): ?>
                                                            <div class="card ml-4 mb-1 mt-2" style="width:28%; float:left">
                                                                <img class="card-img-top" src="<?php echo e(asset('/img')); ?>/product_test.jpg" alt="Card image cap">
                                                                <div class="card-body">
                                                                    <h6 class="card-title text-primary"><?php echo e($product->name); ?></h6>
                                                                    <p class="card-text"><?php echo e(number_format($product->price, 0, '', ',')); ?>đ</p>
                                                                    <a href="<?php echo e(route('selling.add')); ?>/<?php echo e($product->id); ?>" class="btn btn-primary">Add</a>
                                                                    
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>                                            
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <h5 class="text-danger ml-2">Không có dữ liệu</h5>
                                                <?php endif; ?>                                                
                                            </div>
                                        </div>
                                    <?php else: ?>
                                    <div class="tab-pane fade" id="pills-<?php echo e($categories[$i]['id']); ?>" role="tabpanel" aria-labelledby="pills-<?php echo e($categories[$i]['id']); ?>-tab">
                                        <div class="row">
                                            <?php if(count($products)>0): ?>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($categories[$i]['id'] == $product->categoryID): ?>
                                                        <div class="card ml-4 mb-1 mt-2" style="width:28%; float:left">
                                                            <img class="card-img-top" src="<?php echo e(asset('/img')); ?>/product_test.jpg" alt="Card image cap">
                                                            <div class="card-body">
                                                                <h6 class="card-title text-primary"><?php echo e($product->name); ?></h6>
                                                                <p class="card-text"><?php echo e(number_format($product->price, 0, '', ',')); ?>đ</p>
                                                                <a href="<?php echo e(route('selling.add')); ?>/<?php echo e($product->id); ?>" class="btn btn-primary">Add</a>
                                                                
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>                                            
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                <h5 class="text-danger ml-2">Không có dữ liệu</h5>
                                            <?php endif; ?>                                        
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            <?php else: ?>
                                <h5 class="text-danger ml-2">Không có dữ liệu</h5>
                            <?php endif; ?>                                                                                    
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
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo e(session('success')); ?></strong> Kiểm tra món nước bên dưới.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>                
                    <?php endif; ?>    
                    <?php if(session('fail')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?php echo e(session('fail')); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>                                
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
                                <?php if(session('cart')): ?>                                    
                                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($value['name']); ?></td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="number" class="form-control quantity" value="<?php echo e($value['quantity']); ?>" min='1'>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary update-item-cart" data-id="<?php echo e($id); ?>"><i class='fas fa-sync-alt'></i></button>
                                                    </div>
                                                </div>                                                
                                            </td>
                                            <td><?php echo e(number_format($value['quantity']*$value['price'], '0', ',')); ?>đ</td>
                                            <td><button class="btn btn-primary delete-item-cart" data-id="<?php echo e($id); ?>"><i class='fas fa-trash'></i></button></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4">
                                            <h5 class="text-danger">Chưa có món nào!</h5>
                                        </td>
                                    </tr> 
                                <?php endif; ?>                                                                            
                            </tbody>
                        </table>
                    </div>                                
                    <div class="row">
                        <?php 
                            $total = 0
                        ?>
                        <?php if(session('cart')): ?>
                            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $total += $value['price'] * $value['quantity'] 
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-6">
                                <h5>Tổng tiền: <strong class="text-danger"><?php echo e(number_format($total, '0', ',')); ?>đ</strong></h5>
                            </div>
                        <?php endif; ?>                        
                        <div class="col-xl-6">
                            <h5>Tổng tiền: <strong class="text-danger"><?php echo e(number_format($total, '0', ',')); ?>đ</strong></h5>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Thanh toán</button>
                        <button type="button" class="btn btn-secondary delete-all-item-cart">Xóa hết</button>                        
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
                                <input type="text" class="form-control" id="" name="" value="<?php echo e(date('Y-m-d H:i:s')); ?>" disabled>
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
                                <?php if(session('cart')): ?>                                    
                                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($value['name']); ?></td>
                                            <td><?php echo e($value['quantity']); ?></td>
                                            <td><?php echo e(number_format($value['quantity']*$value['price'], '0', ',')); ?>đ</td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3">
                                            <h5 class="text-danger">Chưa có món nào!</h5>
                                        </td>
                                    </tr> 
                                <?php endif; ?>                                                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="total" class="text-primary">Tổng tiền</label>
                                <input type="text" class="form-control" id="" name="" value="<?php echo e(number_format($total, '0', ',')); ?>đ" disabled>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="discount" class="text-primary">Tiền giảm</label>
                                <input type="text" class="form-control" id="" name="" value="0đ" disabled>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label for="moneyforpaid" class="text-danger">Tiền phải thanh toán</label>
                                <input type="text" class="form-control" id="" name="" value="<?php echo e(number_format($total, '0', ',')); ?>đ" disabled>
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

<?php $__env->startSection('ajax'); ?>
    <script type="text/javascript">                
        $('.update-item-cart').click(function (e) {
            e.preventDefault();            
            var element = $(this);            
            $.ajax({
                url: '<?php echo e(route('selling.update')); ?>',
                method: 'patch',
                data: 
                {
                    _token:'<?php echo e(csrf_token()); ?>',
                    id: element.attr('data-id'),
                    quantity: element.parents('tr').find(".quantity").val()                    
                },
                success: function(response) {                        
                    window.location.reload();
                }
            });
        });

        $('.delete-item-cart').click(function (e) {
            e.preventDefault();            
            var element = $(this);            
            $.ajax({
                url: '<?php echo e(route('selling.delete')); ?>',
                method: 'delete',
                data: 
                {
                    _token:'<?php echo e(csrf_token()); ?>',
                    id: element.attr('data-id')                    
                },
                success: function(response) {                        
                    window.location.reload();
                }
            });
        });

        $('.delete-all-item-cart').click(function (e) {
            e.preventDefault();            
            var element = $(this);            
            $.ajax({
                url: '<?php echo e(route('selling.deleteall')); ?>',
                method: 'delete',
                data: 
                {
                    _token:'<?php echo e(csrf_token()); ?>',                    
                    success: function(response) {                        
                        window.location.reload();
                    }
                }
            });
        });

        $('.search').keyup(function (e) {
            var val = $(this).val();
            if(val==='') {
                val = 'nothing';
            }            
            $.ajax({
                url: '<?php echo e(route('selling.search')); ?>',
                method: 'get',
                data: {search: val},
                success:function(data) {
                    if(data==0) {
                        document.getElementById("pills-tabContent").style.display = "none";
                        document.getElementById("search-content").style.display = "none";
                        document.getElementById("search-message").style.display="block";       
                    }
                    else if(data==1) {
                        document.getElementById("search-message").style.display="none";
                        document.getElementById("search-content").style.display = "none";
                        document.getElementById("pills-tabContent").style.display = "block";
                    }
                    else {
                        document.getElementById("search-message").style.display="none";
                        document.getElementById("pills-tabContent").style.display = "none";
                        document.getElementById("search-content").style.display = "block";
                        var html = '';
                        data.forEach(element => {
                            html += '<div class="card ml-4 mb-1 mt-2" style="width:28%; float:left">'+
                                        '<img class="card-img-top" src="<?php echo e(asset('/img')); ?>/product_test.jpg" alt="Card image cap">'+
                                        '<div class="card-body">'+
                                            '<h6 class="card-title text-primary">'+ element.name +'</h6>'+
                                            '<p class="card-text">'+ new Intl.NumberFormat().format(element.price) +'đ</p>'+
                                            '<a href="<?php echo e(route('selling.add')); ?>/'+ element.id +'" class="btn btn-primary">Add</a>'+
                                            ''+
                                        '</div>'+
                                    '</div>';                            
                        });
                        $('#search-content').html(html);
                    }                 
                }
            });
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\CoffeeShopLaravel\resources\views/pages/selling.blade.php ENDPATH**/ ?>
@include('header')
    <section class="position-relative overflow-hidden bg-light-blue">
        <div class="container" style="width:60%;margin-top:150px; margin-bottom:90px;">
            <div class="banner-content">
                <h2 style="text-align:center;">Form Hỗ Trợ Khách Hàng</h2>
    @php
        $success = Session::get('success');
        $error = Session::get('error');
        if($success){
            echo "$success";
        }
        else if($error){
            echo "$error";
        }
    @endphp
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                </p>    
                <form action="/submit-form-api" method="post">
                @csrf                 
                    <div class="form-group mb-4">
                        <label for="name">Tên khách hàng:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                                                
                    <div class="form-group mb-4">
                        <label for="email">Email khách hàng:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                                                
                    <div class="form-group mb-4">
                        <label for="phone">Số điện thoại:</label>
                        <input type="tel" name="phone" id="phone" class="form-control" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="phone">Địa chỉ:</label>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>
                                                
                    <div class="form-group mb-4">
                        <label for="product">Sản phẩm quan tâm:</label>
                        <input type="text" name="product" id="product" class="form-control" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="quantity">Số lượng:</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" required>
                    </div>

                    <input type="hidden" id="time" name="time">
                                                
                    <div class="form-group d-flex mt-5">
                        <button type="submit" class="btn btn-primary flex-grow-1">Gửi form</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@include('footer')
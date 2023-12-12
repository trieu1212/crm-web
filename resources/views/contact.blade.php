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
                <form action="/form-request" method="post">
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
                        <select name="product" id="product" class="form-control">
                            <option value="Bậc inox">Bậc inox</option>
                            <option value="Bàn inox mạ vàng">Bàn inox mạ vàng</option>
                            <option value="Bàn inox để chén">Bàn inox để chén</option>
                            <option value="Bàn tủ inox treo tường ">Bàn tủ inox treo tường </option>
                            <option value="Bồn chứa inox">Bồn chứa inox</option>
                            <option value="Bồn rửa inox">Bồn rửa inox</option>
                            <option value="Chậu rửa inox ">Chậu rửa inox </option>
                            <option value="Cầu thang inox ">Cầu thang inox </option>
                            <option value="Chụp hút khói">Chụp hút khói</option>
                            <option value="Giường đơn inox">Giường đơn inox</option>
                            <option value="Giường y tế inox">Giường y tế inox</option>
                            <option value="Giàn phơi quần áo inox ">Giàn phơi quần áo inox </option>
                            <option value="Giá inox treo tường ">Giá inox treo tường </option>
                            <option value="Hàng rào inox">Hàng rào inox</option>
                            <option value="Hộp inox">Hộp inox</option>
                            <option value="Kệ cân">Kệ cân</option>
                            <option value="Lò nướng inox ">Lò nướng inox </option>
                            <option value="Kệ inox">Kệ inox</option>
                            <option value="Lancan inox">Lancan inox</option>
                            <option value="Mặt bàn inox">Mặt bàn inox</option>
                            <option value="Móc inox">Móc inox</option>
                            <option value="Nắp inox">Nắp inox</option>
                            <option value="Ống thoát khói inox ">Ống thoát khói inox </option>
                            <option value="Tủ thuốc y tế inox">Tủ thuốc y tế inox</option>
                            <option value="Xe đẩy inox">Xe đẩy inox</option>
                            <option value="Tủ inox cửa mở ">Tủ inox cửa mở </option>
                            <option value="Tủ gia vị ">Tủ gia vị </option>
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="quantity">Số lượng:</label>
                        <input type="number" name="quantity" id="quantity" min="1" class="form-control" required>
                    </div>

                    <div class="form-group d-flex mt-5">
                        <button type="submit" class="btn btn-primary flex-grow-1" >Gửi form</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@include('footer')
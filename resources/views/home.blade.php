@include('header')
    <section id="billboard" class="position-relative overflow-hidden bg-light-blue">
      <div class="swiper main-swiper" style="margin-top:90px ">
        <div class="swiper-wrapper">
          <div class="swiper-slide" >
            <div class="container">
              <div class="row d-flex align-items-center">
                <div class="col-md-6">
                  <div class="banner-content">
                    <h1 class="display-2 text-uppercase text-dark pb-5">SẢN PHẨM INOX</h1>
                    <a href="#" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Mua Ngay</a>
                  </div>
                </div>
                <div class="col-md-5" >
                  <div class="image-holder">
                    <img src="{{ asset('assets/images/banner-removebg-preview.png') }}" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="company-services" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3" style="margin-top:20px">
                <svg class="cart-outline">
                  <use xlink:href="#cart-outline" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Miễn Phí Giao Hàng</h3>
                <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3" style="margin-top:20px">
                <svg class="quality">
                  <use xlink:href="#quality" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Đảm Bảo Chất Lượng</h3>
                <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3" style="margin-top:20px">
                <svg class="price-tag">
                  <use xlink:href="#price-tag" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Ưu Đãi Hấp Dẫn</h3>
                <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3" style="margin-top:20px">
                <svg class="shield-plus">
                  <use xlink:href="#shield-plus" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h3 class="card-title text-uppercase text-dark">Hỗ Trợ Thanh Toán</h3>
                <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Sản Phẩm --}}
  <hr>
<h1 style="text-align: center; color:brown" id="product-list">Thiết Bị INOX</h1>

<div class="container">
  <div class="row">
      <div class="col-md-3 col-sm-6">
          <div class="product-grid">
              <div class="product-image">
                  <a href="#" class="image">
                      <img class="img-1" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Gia-inox-treo-tuong-Inox-Sau-Phat.jpg" />
                      <img class="img-2" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Gia-inox-treo-tuong-Inox-Sau-Phat.jpg" />
                  </a>
                  <ul class="product-links">
                      <li>
                          <a href="#"><i class="fa fa-heart"></i></a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-random"></i></a>
                      </li>
                  </ul>
                  <a href="{{ URL::to('/contact') }}" class="add-cart">Liên hệ ngay!</a>
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#">Giá inox treo tường</a></h3>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="img-1" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Tu-inox-Cua-Mo-inox-Sau-Phat-o-TPHCM.jpg" />
                    <img class="img-2" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Tu-inox-Cua-Mo-inox-Sau-Phat-o-TPHCM.jpg" />
                </a>
                <ul class="product-links">
                    <li>
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                </ul>
                <a href="{{ URL::to('/contact') }}" class="add-cart">Liên hệ ngay!</a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">Tủ inox cửa mở</a></h3>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="product-grid">
          <div class="product-image">
              <a href="#" class="image">
                  <img class="img-1" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Tu-inox-gan-tuong-inox-Sau-Phat.jpg" />
                  <img class="img-2" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Tu-inox-gan-tuong-inox-Sau-Phat.jpg" />
              </a>
              <ul class="product-links">
                  <li>
                      <a href="#"><i class="fa fa-heart"></i></a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-random"></i></a>
                  </li>
              </ul>
              <a href="{{ URL::to('/contact') }}" class="add-cart">Liên hệ ngay!</a>
          </div>
          <div class="product-content">
              <h3 class="title"><a href="#">Bàn tủ inox treo tường</a></h3>
          </div>
      </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="product-grid">
        <div class="product-image">
            <a href="#" class="image">
                <img class="img-1" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Chuyen-lam-cau-thang-inox-o-TPHCM.jpg" />
                <img class="img-2" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Chuyen-lam-cau-thang-inox-o-TPHCM.jpg" />
            </a>
            <ul class="product-links">
                <li>
                    <a href="#"><i class="fa fa-heart"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-random"></i></a>
                </li>
            </ul>
            <a href="{{ URL::to('/contact') }}" class="add-cart">Liên hệ ngay!</a>
        </div>
        <div class="product-content">
            <h3 class="title"><a href="#">Cầu thang inox</a></h3>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-3 col-sm-6">
      <div class="product-grid">
          <div class="product-image">
              <a href="#" class="image">
                  <img class="img-1" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Chup-hut-khoi-inox-san-xuat-theo-yeu-cau.jpg" />
                  <img class="img-2" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Chup-hut-khoi-inox-san-xuat-theo-yeu-cau.jpg" />
              </a>
              <ul class="product-links">
                  <li>
                      <a href="#"><i class="fa fa-heart"></i></a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-random"></i></a>
                  </li>
              </ul>
              <a href="{{ URL::to('/contact') }}" class="add-cart">Liên hệ ngay!</a>
          </div>
          <div class="product-content">
              <h3 class="title"><a href="#">Chụp hút khói</a></h3>
          </div>
      </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="product-grid">
        <div class="product-image">
            <a href="#" class="image">
                <img class="img-1" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Ong-Khoi-Inox-Inox-Sau-Phat.jpg" />
                <img class="img-2" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Ong-Khoi-Inox-Inox-Sau-Phat.jpg" />
            </a>
            <ul class="product-links">
                <li>
                    <a href="#"><i class="fa fa-heart"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-random"></i></a>
                </li>
            </ul>
            <a href="{{ URL::to('/contact') }}" class="add-cart">Liên hệ ngay!</a>
        </div>
        <div class="product-content">
            <h3 class="title"><a href="#">Ống thoát khói Inox</a></h3>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6">
  <div class="product-grid">
      <div class="product-image">
          <a href="#" class="image">
              <img class="img-1" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Lo-nuong-inox.jpg" />
              <img class="img-2" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Lo-nuong-inox.jpg" />
          </a>
          <ul class="product-links">
              <li>
                  <a href="#"><i class="fa fa-heart"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-random"></i></a>
              </li>
          </ul>
          <a href="{{ URL::to('/contact') }}" class="add-cart">Liên hệ ngay!</a>
      </div>
      <div class="product-content">
          <h3 class="title"><a href="#">Lò nướng inox</a></h3>
      </div>
  </div>
</div>
<div class="col-md-3 col-sm-6">
<div class="product-grid">
    <div class="product-image">
        <a href="#" class="image">
            <img class="img-1" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Gian-phoi-quan-ao-inox-inox-sau-phat-5.jpg" />
            <img class="img-2" width="500" height="500" src="https://inoxsauphat.com/wp-content/uploads/2022/11/Gian-phoi-quan-ao-inox-inox-sau-phat-5.jpg" />
        </a>
        <ul class="product-links">
            <li>
                <a href="#"><i class="fa fa-heart"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-random"></i></a>
            </li>
        </ul>
        <a href="{{ URL::to('/contact') }}" class="add-cart">Liên hệ ngay!</a>
    </div>
    <div class="product-content">
        <h3 class="title"><a href="#">Giàn phơi quần áo inox đôi</a></h3>
    </div>
</div>
</div>

                                                                        
<!-- Footer -->

    
@include('footer')
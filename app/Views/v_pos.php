<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class ="card-body p-2">
            <div class="row">
              <div class = "col-md-4">
                <select name="" id="" class="form-control">
                  <option value="">Waitress 1</option>
                  <option value="">Waitress 2</option>
                  <option value="">Waitress 3</option>
                </select>
              </div>
              <div class="col-md-4">
                <select name="" id="" class="form-control">
                  <option value="">Dine In</option>
                  <option value="">Take Away</option>
                  <option value="">Delivery</option>
                </select>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <button type="button" class="btn btn-info btn-block">Table</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body p-2">
            <table class="table table-sm">
              <thead class="bg-info">
                <tr>
                  <th>Item</th>
                  <th>Harga</th>
                  <th>Qty</th>
                  <th>Discount</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Aqua</td>
                  <td>Rp 5000</td>
                  <td>5</td>
                  <td></td>
                  <td>Rp 25.000,-</td>
                </tr>
                <tr>
                  <td>Sop Buntut</td>
                  <td>30000</td>
                  <td>3</td>
                  <td></td>
                  <td>Rp 90.000,-</td>
                </tr>
                <tr>
                  <td>Nasi</td>
                  <td>5000</td>
                  <td>3</td>
                  <td></td>
                  <td>Rp 15.000,-</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-body p-2 mt-5">
            <table class="table table-sm">
              <tr>
                <td style="width:50%">Subtotal:</td>
                <td class="text-right">Rp 130.000,-</td>
              </tr>
              <tr>
                <td>Discount</td>
                <td class="text-right">-</td>
              </tr>
              <tr>
                <td>Tax (9.3%)</td>
                <td class="text-right">Rp 13.000,-</td>
              </tr>
              <tr>
                <td>Service Charge :</td>
                <td class="text-right">Rp 13.000,-</td>
              </tr>
              <tr>
                <td>Total:</td>
                <td class="text-right">Rp 156.000,-</td>
              </tr>
            </table>
          </div>   
          <div class="card-body">
            <div class="row">
              <div class="col">
                <a href="" target="" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
              </div>
              <div class="col">
                <button type="button" class="btn btn-danger btn-block">Cancels</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-primary btn-block">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
          <input type="text" class="form-control" placeholder="search product.....">
            <div class="btn-group w-100 m-0">
              <a class="btn btn-info" href="javascript:void(0)" data-filter="all"> All items </a>
              <a class="btn btn-info" href="javascript:void(0)" data-filter="main"> Main Course </a>
              <a class="btn btn-info" href="javascript:void(0)" data-filter="appetizer"> Appetizer </a>
              <a class="btn btn-info" href="javascript:void(0)" data-filter="dessert"> Dessert </a>
              <a class="btn btn-info" href="javascript:void(0)" data-filter="drink"> Drink </a>
              <a class="btn btn-info" href="javascript:void(0)" data-filter="promo"> Promo </a>
              <a class="btn btn-info" href="javascript:void(0)" data-filter="snack"> Snacka </a>
            </div>
            <div class="filter-container p-2 row">
              <div class="filtr-item col-sm-3 bg-light" data-category="main">
                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white">
                  <p class="text-center">Rendang </p>
                  <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                  <p class="text-center">Rp. 20.000,- </p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="appetizer">
                <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black">
                  <p class="text-center">Mendoan</p>
                  <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
                  <p class="text-center">Rp. 10.000,- </p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="dessert">
                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                  <p class="text-center">Es Serut</p>
                  <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                  <p class="text-center">Rp. 20.000,- </p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="dessert">
                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                  <p class="text-center">Es Campur</p>
                  <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                  <p class="text-center">Rp. 20.000,- </p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="appetizer">
                <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black">
                <p class="text-center">Rujak Buah</p>
                  <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample"/>
                  <p class="text-center">Rp. 20.000,- </p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="main">
                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
                  <p class="text-center">Ayam Geprek</p>
                  <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample"/>
                  <p class="text-center">Rp. 30.000,- </p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="main">
                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
                  <p class="text-center">Soto Betawi</p>
                  <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample"/>
                  <p class="text-center">Rp. 35.000,- </p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="drink">
                <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                  <p class="text-center">Air Mineral</p>
                  <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample"/>
                  <p class="text-center">Rp. 5.000,-</p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="drink">
                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                  <p class="text-center">Es Teh Manis</p>
                  <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                  <p class="text-center">Rp. 5.000,-</p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="main">
                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                  <p class="text-center">Sate Ayam</p>
                  <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample"/>
                  <p class="text-center">Rp. 30.000,-</p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="main">
                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
                  <p class="text-center">Gado-gado</p>
                  <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample"/>
                  <p class="text-center">Rp. 25.000,-</p>
                </a>
              </div>
              <div class="filtr-item col-sm-3 bg-light" data-category="drink">
                <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
                  <p class="text-center">Kopi</p>
                  <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample"/>
                  <p class="text-center">Rp. 15.000,-</p>
                </a>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
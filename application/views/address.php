<div class="zillow">  
  <div class="container">
    <div class="row maps">
      <div id="street-view" style="width:49%;height:400px;display:inline-block;"></div>
      <div id="googleMap" style="width:49%;height:400px;display:inline-block;"></div>
    </div>
  </div>

  <div class="container home-address">
    <div class="row">
        <div class="col-12 col-md-5">
            <div class="single-special wow fadeInUp" data-wow-delay="0.2s">
                <h1><strong><?php echo $datas['address']; ?> <br> <?php echo $datas['citystatezip']; ?></strong></h1>
                <h4><td><?php echo $datas['bedrooms']; ?></td>  beds <td><?php echo $datas['bedrooms']; ?></td> baths <?php echo $datas['finishedSqFt']; ?> sqft</h4>
            </div>
        </div>
        <!-- Single Special Area -->
        <div class="col-12 col-md-6">
            <div class="single-special wow fadeInUp" data-wow-delay="0.4s">
                <h4>FOR SALE</h4>
                <h3><strong>$ <?php echo $datas['lastSoldPrice']; ?></strong></h3>
                <p>Zestimate: $<?php echo $datas['amount']; ?></p>
            </div>
        </div>
    </div>
  </div>

  <div class="container home-address">
    <div class="row">
        <div class="widget stacked widget-table action-table">
          <div class="widget-header">
            <h1><strong>Facts and Features</strong></h1>
          </div>
          <div class="widget-content">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Year Built</th>
                  <th>Lot</th>
                  <th>Floor Size</th>
                  <th>Beds </th>
                  <th>Baths </th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $datas['useCode']; ?></td>
                  <td><?php echo $datas['yearBuilt']; ?></td>
                  <td><?php echo $datas['lotSizeSqFt']; ?></td>
                  <td><?php echo $datas['finishedSqFt']; ?></td>
                  <td><?php echo $datas['bedrooms']; ?></td>
                  <td><?php echo $datas['bathrooms']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>


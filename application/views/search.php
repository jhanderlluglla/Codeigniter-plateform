<section id="search">
  <div class="container">
    <div class="row">

      <div class="col-xs-12">
        <h4 class="error"><?php echo $this->session->flashdata('item'); ?></h4>
        <div class="form-wrap">
          <h1>Find your way Home</h1>
          <form method="post" action="/address" id="login-form" autocomplete="off">
            <div class="form-group">
                <label for="address" class="sr-only">Address</label>
                <input type="text" name="address" placeholder="Enter an address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="citystatezip" class="sr-only">City, State, Zip</label>
                <input type="text" name="citystatezip" class="form-control" placeholder="Enter City, State, Zip" required>
            </div>
            <button type="submit" class="search_button btn btn-success text-center">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

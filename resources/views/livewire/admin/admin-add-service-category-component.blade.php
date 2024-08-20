<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Add Category</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Add Service Category</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel bg-light">
                                <dvi class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>All Service Category</h3>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <a href="{{{Route("admin.service_category")}}}" class="btn btn-info pull-right">View All</a>
                                        </div>
                                    </div>
                                </dvi>
                            </div>
                            <div class="panel-body">
                                <!-- Form Section -->
                                <form>
                                    <div class="form-group">
                                      <label for="name">Name</label>
                                      <input type="text" class="form-control" id="name"  placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="Slug">Slug</label>
                                        <input type="text" class="form-control" id="Slug"  placeholder="Enter Slug">
                                      </div>
                                      <div class="form-group">
                                        <label for="Image">Image Upload</label>
                                        <input type="file" class="form-control-file" id="image">
                                      </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

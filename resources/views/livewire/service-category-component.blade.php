<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Services Category</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>/</li>
                        <li>Services Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>Services<span>Category</span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div class="row">
                <div class="col-md-12">
                    <ul class="services-lines full-services">
                        @foreach ($categories as $cat)
                            <li>
                                <div class="item-service-line">
                                    <i class="fa"><a href="#"><img class="icon-img"
                                                src="{{asset('images/servicecategory/'.$cat->image)}}" alt=""></a></i>
                                    <h5>{{ $cat->name }}</h5>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="content_info content_resalt">
            <div class="container">
                <div class="row">
                    <div class="titles">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

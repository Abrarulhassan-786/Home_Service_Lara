<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Service Categories</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Service Categories</li>
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
                        <div class="col-md-12 profile1">
                            <table width="100%" style="border-collapse: collapse; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <thead>
                                    <tr style="background-color: #333; color: white;">
                                        <th style="padding: 8px; text-align: center;">#</th>
                                        <th style="padding: 8px; text-align: center;">Image</th>
                                        <th style="padding: 8px; text-align: center;">Name</th>
                                        <th style="padding: 8px; text-align: center;">Slug</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admincategory as $acs)
                                    <tr style="text-align: center; background-color: {{ $loop->index % 2 == 0 ? '#f2f2f2' : '#539df0' }};">
                                        <td>{{$acs->id}}</td>
                                        <td><img src="{{asset('images/servicecategory/'.$acs->image)}}" width="60"></td>
                                        <td>{{$acs->name}}</td>
                                        <td>{{$acs->slug}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="margin-top: 20px; text-align: center;">
                                {{$admincategory->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

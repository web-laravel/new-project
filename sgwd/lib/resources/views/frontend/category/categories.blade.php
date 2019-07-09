<div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
    <aside class="aa-sidebar">
        <!-- single sidebar -->
        <div class="aa-sidebar-widget">
            <h3>Category</h3>
            <ul class="aa-catg-nav">
                @foreach($categories as $cate)
                    <li><a href="{{asset('category/'.$cate->cate_id.'.html')}}">{{$cate->cate_name}}</a></li>
                @endforeach
            </ul>
        </div>
    </aside>
</div>
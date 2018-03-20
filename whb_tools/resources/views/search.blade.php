
<a class="btn btn-success" data-toggle="modal" href="#search-form">
    高级搜索
</a>


<div class="modal fade " id="search-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">高级搜索</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal tasi-form" action="" id="search_from">

                </form>

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">
                    <i class="fa fa-times">关闭</i>
                </button>
                <button class="btn btn-info searc" type="button">
                    <i class="fa fa-searche">搜索</i>
                </button>
                <button class="btn btn-success add" type="button" >
                    <i class="fa fa-plus-circle">添加</i>
                </button>
                <button class="btn btn-warning clear" type="button">
                    <i class="fa fa-share-square">清空</i>
                </button>
            </div>
        </div>
        <script id="user-search-tpl" type="text/html">
            <div class="form-group" data-num ="<%=num%>">
                <div class="col-lg-12">
                    <div class="row" >
                        <div class="col-lg-3">
                            <select class="form-control" name="condition[<%=num%>][prop]" id="">
                                // <option value="id">编号</option>

                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" name="condition[<%=num%>][op]" id="">
                                <option value="=">等于</option>
                                <option value=">">大于</option>
                                <option value=">=">大于等于</option>
                                <option value="<">小于</option>
                                <option value="<=">小于等于</option>
                                <option value="<>">不等于</option>
                                <option value="like">相似</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <input class="form-control" placeholder="" name="condition[<%=num%>][value]" type="text">
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-danger del" type="button" id="">
                                <i class="fa  fa-minus-circle">添加</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </script>

        @section('js')
        <script src="{{asset('js/template-native.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin_assets/js/advance-search-form.js')}}" type="text/javascript"></script>

        <script>
            $(document).ready(function(){

                AdvanceSearchFrom.init({
                    'form': 'search_from',
                    'tpl': 'user-search-tpl',
                    'url':'/admin/{FEATURE_NAME_L}',
                })

            });
        </script>
        @endsection
    </div>
</div>
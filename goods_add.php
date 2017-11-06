<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>乐淘 - 后台管理</title>
    <?php include './common/style.html'; ?>
</head>

<body>

    <!-- 侧边栏 -->
    <?php include './common/aside.html'; ?>
    <!-- 主体 -->
    <div class="main">
        <div class="container-fluid">
            <!-- 头部 -->
            <?php include './common/header.html'; ?>
            <!-- 讲师资料 -->
            <div class="body">
                <div class="goods-add">
                    <form action="" class="form-horizontal">
                        <div class="form-group">
                            <label for="" class="col-xs-3 control-label">商品封面</label>
                            <div class="col-xs-2 preview">
                                <img src="./images/default.png">
                                <input type="file" id="upfile">
                                <input type="hidden" name="pic">
                                <div class="cover">
                                    <i class="fa fa-upload"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-xs-3 control-label">商品名称</label>
                            <div class="col-xs-5">
                                <input type="text" class="form-control input-sm" name="proName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-xs-3 control-label">所属品牌</label>
                            <div class="col-xs-5">
                                <select name="brandId" class="form-control input-sm">
                                    
                                    <option value="1">耐克</option>
                                
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-xs-3 control-label">商品价格</label>
                            <div class="col-xs-5">
                                <input type="text" class="form-control input-sm" name="oldPrice">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-xs-3 control-label">优惠价格</label>
                            <div class="col-xs-5">
                                <input type="text" class="form-control input-sm" name="price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-xs-3 control-label">库存量</label>
                            <div class="col-xs-5">
                                <input type="text" class="form-control input-sm" name="num">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-xs-3 control-label">尺寸</label>
                            <div class="col-xs-5">
                                <input type="text" class="form-control input-sm" name="size">
                            </div>
                        </div>
                        
                        <div class="form-group">
                                <label for="" class="col-xs-3 control-label">是否上架</label>
                                <div class="col-xs-5">
                                    <div class="radio-inline">
                                        <label for="">
                                            <input type="radio" name="statu" value="1"> 是
                                        </label>
                                    </div>
                                    <div class="radio-inline">
                                        <label for="">
                                            <input type="radio" name="statu" value="0"> 否
                                        </label>
                                    </div>
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="" class="col-xs-3 control-label">商品描述</label>
                            <div class="col-xs-5 ckeditor">
                                <textarea name="proDesc" rows="5" class="form-control input-sm"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-8">
                                <input type="submit" class="btn btn-success btn-sm pull-right" value="保 存">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include './common/script.html'; ?>
    <script>
        require(['src/goods_add']);
    </script>
</body>

</html>
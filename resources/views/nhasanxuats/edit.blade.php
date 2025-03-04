
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sửa Thông Tin Nhà Sản Xuất</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center">Sửa Thông Tin Nhà Sản Xuất</h1>
        <form method="post" action="{{route('nhasanxuats.update', $nhasanxuat->id)}}">
            @csrf
            @method('PUT')
            <label for="ten" class="form-label">Tên</label>
            <input type="text" name="ten" id="ten" class="form-control" value="{{$nhasanxuat->ten}}" required="required">

            <label for="logo" class="form-label">Logo</label>
            <input type="text" name="logo" id="logo" class="form-control" value="{{$nhasanxuat->logo}}" required="required">

            <label for="status" class="form-label">Status</label>
            <select  id="status" name="status" class="form-control">
                <option value="1" {{$nhasanxuat->status == 1 ? 'selected' : ''}}>1</option>
                <option value="0" {{$nhasanxuat->status == 0 ? 'selected' : ''}}>0</option>
            </select>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </body>
</html>


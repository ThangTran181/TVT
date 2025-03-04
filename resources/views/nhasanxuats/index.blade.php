
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Danh Sách Nhà Sản Xuất</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center">Danh Sách Nhà Sản Xuất</h1>
        <a href="{{ route('nhasanxuats.create') }}" class="btn btn-primary">Thêm mới nhà sản xuất</a>
        <table class="table table-light">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Logo</th>
                    <th>Status</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nhasanxuats as $nhasanxuat )
                <tr>
                    <td>{{ $nhasanxuat->ten}}</td>
                    <td><<img src="{{$nhasanxuat->logo}}" alt="Logo"></td>
                    <td>{{ $nhasanxuat->status}}</td>
                    <td><a href="{{route('nhasanxuats.edit', $nhasanxuat->id)}}" class="btn btn-primary-sm">Sửa</a>
                    {{-- <td><a href="{{route('nhasanxuats.delete', $nhasanxuat->id)}}" class="btn btn-primary-sm">Xóa</a></td> --}}
                        <<form method="post" action="{{route('nhasanxuats.destroy', $nhasanxuat->id)}}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger-sm" onclick="return confirm('Bạn có xoá không?')";>Xóa</button>
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </body>
</html>


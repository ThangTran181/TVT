Danh sách nhà sản xuất <br>
@foreach ($nsx as $row )
    <li> {{$row->ten}} - {{$row->logo}} - {{$row->status}}</li>
@endforeach

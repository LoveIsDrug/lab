<?php
    include('inc/connect.inc');
    $lop = $_GET['lop'];

    $sql = "SELECT * from sinhvien where lop='{$lop}'";
    $result = mysqli_query($conn, $sql);
    $str = "<table>
        <tr class='hd'>
              <th>TT</th>
              <th>Mã số</th>
              <th>Họ tên</th>
              <th>Địa chỉ</th>
        </tr>
    </table>";
    $tt = 1;
    while ($row = mysqli_fetch_array($result)) {
        $str.= "<tr>
            <td>{$tt}</td>
            <td>{$row['masv']}</td>
            <td>{$row['hoten']}</td>
            <td>{$row['diachi']}</td>
            </tr>";
        $tt++;
    }
    $str.= "</table>";
    echo $str;
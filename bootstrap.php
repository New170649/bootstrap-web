<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ติตตั้ง js , css ลงเครื่อง -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <div class="alert alert.primry">
        Hallo Bootstrap
    </div>

    <div class="row">
        <div class="col - 4">ทดสอบ</div>
        <div class="col - 4">ทดสอบ</div>
        <div class="col - 4">ทดสอบ</div>
    </div>

    <div class="container" style="border: 1px solid #4682B4">
        <div class="row">การใช้ container</div>
    </div>

    <div class="container-fulid" style="border: 1px solid #4682B4">
        <div class="row">การใช้ container-fuild</div>
    </div>

    <p class="Text-left"> การจัดตำแหน่ง </p>
    <p class="Text-center"> การจัดตำแหน่ง </p>
    <p class="Text-end"> การจัดตำแหน่ง </p>

    <h1 class="display-1"> Hello Bootstrap</h1>
    <h1 class="display-2"> Hello Bootstrap</h1>
    <h1 class="display-3"> Hello Bootstrap</h1>
    <h1 class="display-4"> Hello Bootstrap</h1>

    <buttom type="buttom"> แบบปกติ </buttom>
    <buttom type="buttom" class="btn"> แบบbtn </buttom>
    <buttom type="buttom" class="btn btn-primary"> แบบprimary </buttom>
    <buttom type="buttom" class="btn btn-secondary"> แบบsecondary </buttom>

    <hr>
    <buttom type="buttom" class="btn btn-info"> แบบinfo </buttom>
    <buttom type="buttom" class="btn btn-warning"> แบบwarning </buttom>
    <buttom type="buttom" class="btn btn-danger"> แบบdanger </buttom>
    <buttom type="buttom" class="btn btn-success"> แบบsuccess </buttom>
    </hr>

    <buttom type="buttom" class="btn btn-dark"> แบบdark </buttom>
    <buttom type="buttom" class="btn btn-light"> แบบlight </buttom>
    <buttom type="buttom" class="btn btn-link"> แบบlink </buttom>

    <div class="container">
        <table bordor="1">
            <thead>
                <tr>
                    <th>Item IP</th>
                    <th>Item Name</th>
                    <th>Item price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>สบู่</td>
                    <td>20</td>
                </tr>

                <tr>
                    <td>002</td>
                    <td>แชมพู</td>
                    <td>25</td>
                </tr>

                <tr>
                    <td>003</td>
                    <td>แปรงสีฟัน</td>
                    <td>60</td>
                </tr>

            </tbody>
            <tfoot>
                <th colspan="3">รวม 3 รายการ</th>
            </tfoot>
        </table>
    </div>

    <div class="container">
        <table bordor="1" class="table table-bordered" p-5 mb-2 bg-light text-dark>
            <thead>
                <tr>
                    <th>Item IP</th>
                    <th>Item Name</th>
                    <th>Item price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>สบู่</td>
                    <td>20</td>
                </tr>

                <tr>
                    <td>002</td>
                    <td>แชมพู</td>
                    <td>25</td>
                </tr>

                <tr>
                    <td>003</td>
                    <td>แปรงสีฟัน</td>
                    <td>60</td>
                </tr>

            </tbody>
            <tfoot>
                <th colspan="3">รวม 3 รายการ</th>
            </tfoot>
        </table>
    </div>

    <div class="container">
        <table bordor="1" class="table table-striped">
            <thead>
                <tr>
                    <th>Item IP</th>
                    <th>Item Name</th>
                    <th>Item price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td class="table-danger">สบู่</td>
                    <td>20</td>
                </tr>

                <tr>
                    <td>002</td>
                    <td>แชมพู</td>
                    <td>25</td>
                </tr>

                <tr>
                    <td class="table-success">003</td>
                    <td>แปรงสีฟัน</td>
                    <td>60</td>
                </tr>

            </tbody>
            <tfoot>
                <th colspan="3">รวม 3 รายการ</th>
            </tfoot>
        </table>
    </div>

    <div class="container">
        <table bordor="1" class="table table-hover">
            <thead>
                <tr>
                    <th>Item IP</th>
                    <th>Item Name</th>
                    <th>Item price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>สบู่</td>
                    <td>20</td>
                </tr>

                <tr>
                    <td>002</td>
                    <td>แชมพู</td>
                    <td>25</td>
                </tr>

                <tr>
                    <td>003</td>
                    <td>แปรงสีฟัน</td>
                    <td>60</td>
                </tr>

            </tbody>
            <tfoot>
                <th colspan="3">รวม 3 รายการ</th>
            </tfoot>
        </table>
    </div>

    <div class="container">
        <form action="" method="post">
            <div class="form-control">
                <p>ชือ-สกุล: </p>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="กรอกชื่อ-สกุล">
                <p>ชื่อผู้ใช้: </p>
                <input type="text" name="username" id="username" class="form-control" placeholder="กรอกชื่อผู้ใช้">
                <p>รหัสผ่าน: </p>
                <input type="password" name="password" id="password" class="form-control" placeholder="กรอกรหัสผ่าน">
                <p>ตัวเลข: </p>
                <input type="number" name="number" id="number" class="form-control" placeholder="กรอกตัวเลข">
                <p>ค้าหา: </p>
                <input type="search" name="search" id="search" class="form-control" placeholder="ค้าหา">
                <p>Browse_files: </p>
                <input type="file" name="browse_files" id="browse_files" class="form-control">

            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>

    </div>

<div class="container">
    <form>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="radio1" id="radio1" value="radio1"> เพศชาย
            </label>
            <br>
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="radio1" id="radio2" value="radio2"> เพศหญิง
            </label>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="check1" id="check1" value="1"> facebook
            </label>
            <br>
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="check2" id="check2" value="1"> Line
            </label>
            <br>
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="check3" id="check3" value="1"> Instagram
            </label>
        </div>
    </form>
</div>

<!-- วันที่ Date -->
<div class="container">
    <form>
        <div class="form-group">
            <p>Date: </p>
            <input type="date" name="txtdate" id="txtdate" class="form-control" value="2026-01-01">
        </div>
    </form>
</div>

<!-- Date Time -->
<div class="container">
    <form>
        <div class="form-group">
            <p>Date time: </p>
            <input type="datetime-local" name="txtdatetime" id="txtdatetime" class="form-control" value="2026-01-01T00:00">
        </div>
    </form>
</div>

<!-- Month -->
<div class="container">
    <form>
        <div class="form-group">
            <p>Month: </p>
            <input type="month" name="txtmonth" id="txtmonth" class="form-control" value="2026-01">
        </div>
    </form>
</div>

<!-- Week -->
<div class="container">
    <form>
        <div class="form-group">
            <p>Week: </p>
            <input type="week" name="txtweek" id="txtweek" class="form-control" value="2026-W01">
        </div>
    </form>
</div>

<!-- color -->
<div class="container">
    <form>
        <div class="form-group">
            <p>Color: </p>
            <input type="color" name="txtcolor" id="txtcolor" class="form-control" value="#ff0000">
        </div>
    </form>
</div>

<!-- Image -->
<div>  
    <img src="anime1.jpg">
</div>
<div class="text-center">
    <img src="anime2.jpg">
</div>
<div class="text-center">
    <img src="anime3.jpg" class="w-25"><br>
    <img src="anime4.webp" class="w-50"><br>
    <img src="scorpio.webp" class="w-75"><br>
    <img src="catsamurai.avif" class="w-100"><br>
</div>
<!-- YouTube Video -->
<div class="embed-responsive">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/5ySwsjh7SLQ?si=_m6gIuFvZzaGbkP7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<!-- google map -->
<div class="z-depth-1 half map-container" id="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38663.215059850096!2d99.92903351783752!3d13.06339966095026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30fd21281ecd2e4f%3A0x98cacc019b9a1acf!2z4LmC4Lij4Lia4Li04LiZ4Liq4Lix4LiZ4LmE4Lil4Lif4LmM4Liq4LmE4LiV4Lil4LmMIOC5gOC4nuC4iuC4o-C4muC4uOC4o-C4tQ!5e1!3m2!1sth!2sth!4v1786942112524!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>


</body>
</html>
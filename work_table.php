<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ติตตั้ง js , css ลงเครื่อง -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #eef2f7 0%, #dbe6f0 100%);
            font-family: "Prompt", "Segoe UI", sans-serif;
            padding: 40px 0;
        }

        .container {
            max-width: 850px;
            margin: 0 auto;
        }

        h2.page-title {
            text-align: center;
            color: #34495e;
            font-weight: 700;
            margin-bottom: 25px;
            letter-spacing: 0.5px;
        }

        .table-wrapper {
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(70, 130, 180, 0.2);
            overflow: hidden;
            padding: 4px;
        }

        table.table {
            margin-bottom: 0;
            border: 1px solid #4682B4;
            border-radius: 10px;
            overflow: hidden;
        }

        table.table thead th {
            text-align: center;
            font-size: 1.05rem;
            font-weight: 700;
            vertical-align: middle;
            padding: 14px 10px;
            border-bottom: 2px solid #4682B4;
        }

        table.table tbody td {
            text-align: center;
            vertical-align: middle;
            padding: 12px 10px;
            font-size: 0.98rem;
            color: #2c3e50;
        }

        table.table tbody tr:hover {
            background-color: #eaf4ff !important;
            transition: background-color 0.25s ease;
        }

        table.table td:first-child {
            font-weight: 600;
            color: #34495e;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="page-title">📊 ตารางอัตราภาษีเงินได้บุคคลธรรมดา</h2>
        <div class="table-wrapper">
            <table class="table table-striped table-hover table-bordered" p-3 style="border: 1px solid #4682B4">
                <thead>
                    <tr>
                        <th class="table-danger">เงินได้สุทธิ</th>
                        <th class="table-info">อัตราภาษี</th>
                        <th class="table-warning">ภาษีสูงสุดของขั้น</th>
                        <th class="table-success">ภาษีสะสม</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0 - 150,000</td>
                        <td>0%</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>150,001 - 300,000</td>
                        <td>5%</td>
                        <td>7,500</td>
                        <td>7,500</td>
                    </tr>

                    <tr>
                        <td>300,001 - 500,000</td>
                        <td>10%</td>
                        <td>20,000</td>
                        <td>27,500</td>
                    </tr>

                    <tr>
                        <td>500,001 - 750,000</td>
                        <td>15%</td>
                        <td>37,500</td>
                        <td>65,000</td>
                    </tr>

                    <tr>
                        <td>750,001 - 1,000,000</td>
                        <td>20%</td>
                        <td>50,000</td>
                        <td>115,000</td>
                    </tr>

                    <tr>
                        <td>1,000,001 - 2,000,000</td>
                        <td>25%</td>
                        <td>250,000</td>
                        <td>365,000</td>
                    </tr>

                    <tr>
                        <td>2,000,001 - 5,000,000</td>
                        <td>30%</td>
                        <td>900,000</td>
                        <td>1,265,000</td>
                    </tr>

                    <tr>
                        <td>5,000,001 ขึ้นไป</td>
                        <td>35%</td>
                        <td>ไม่จำกัด</td>
                        <td>ไม่จำกัด</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
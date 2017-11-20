<div class="container">
    <h1>證照報名列表</h1>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center" width="2%">#</th>
                <th class="text-center">證照名稱</th>
                <th class="text-center" width="24%">考試時間</th>
                <th class="text-center" width="12%">報名截止日</th>
                <th class="text-center" width="7%">目前報名人數</th>
                <th class="text-center" width="7%">考照人數限制</th>
                <th class="text-center" width="30%">功能</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            if(count($list) > 0 ) {
                $i = 1;
                foreach($list as $row) {
                    echo "<tr>" ;
                    echo "<td class='text-center'>".$i++."</td>";
                    echo "<td class='text-center'>".$row['rg_name']."</td>";
                    echo "<td class='text-center'>".nice_date($row['rg_startDate'], 'Y-m-d H:i')." ~ ".nice_date($row['rg_endDate'], 'Y-m-d H:i')."</td>";
                    echo "<td class='text-center'>".nice_date($row['rg_applyEndDate'], 'Y-m-d H:i')."</td>";
                    echo "<td class='text-center'>".$row['rg_nowNumber']."</td>";
                    echo "<td class='text-center'>".$row['rg_number']."</td>";
                    echo "<td class='text-center'>";
                    echo "<a class='btn btn-info btn_apply' href='/lrs/Manage/detailed/".$row['rg_id']."'>詳細</a>";
                    echo "<a class='btn btn-default' style='margin-left: 5px;margin-right: 5px;' href='/lrs/Manage/checkPay/".$row['rg_id']."'>繳費處理</a>";
                    echo "<a class='btn btn-default' style='margin-left: 5px;margin-right: 5px;' href='/lrs/Manage/inpScore/".$row['rg_id']."'>成績處理</a>";
                    echo "<a class='btn btn-success' target='_blank' download='excel' href='/lrs/Manage/exportList/".$row['rg_id']."'>名單匯出</a>";
                    echo "</td>";
                    echo "</tr>" ;
                }
            }
        ?>    
        </tbody>
    </table>   
</div>
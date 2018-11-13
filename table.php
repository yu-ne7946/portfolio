<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>테이블만들기</title>
</head>
<body>
    <header class="w3-container w3-teal">
        <h1>테이블 만들기</h1>
        <h4>생성할 테이블의 행과 열을 입력해 주세요</h4>
    </header>
    <section>
        <!--action 작성한걸 누구한테 보내주냐 -->
        <form name="table_form" action="table_res.php" method="get">
            <table class="w3-table w3-table-all">
                <tr>
                    <td style="width:20%">행 갯수</td>
                    <td>
                        <select class="w3-select w3-border" name="row">
                         <? for($i=1; $i<=10; $i++){?>
                           <option value="<? echo $i;?>"><? echo $i; ?></option>
                         <?} ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style = "width:20%">열 갯수</td>
                    <td>
                        <select class="w3-select w3-border" name="row">
                            <? for($i=1; $i<=10; $i++){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            } ?>
                        </select>                    
                    </td>
                </tr>
            </table>
            <div>
                <button type="submit" class="w3-button w3-teal">확인</button>
            </div>
        </form>
    </section>
</body>
</html>